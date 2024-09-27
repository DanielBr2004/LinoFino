document.addEventListener("DOMContentLoaded",()=>{
  
  function $(objeto = null){
    return document.querySelector(objeto)
  }
  async function buscarDni(){
    const dni = $("#dni").value;

    if(dni.length == 8 ){
      const response = await fetch(`../../app/api/test.php?dni=${dni}`,{method: 'GET' });
      const data = await response.json();
      
      
      //identicar la estucuta del json
      if(data.hasOwnProperty("message")){
        showToast("No encontrado", "INFO", 1500);
      }else{
        $("#apellidos").value = data['apellidoPaterno'] + " "+ data['apellidoMaterno'];
        $("#nombres").value = data['nombres'];
      }
    }
  }

  async function Registrarpersona() {
    const parametros = new FormData();

    parametros.append("operation", "add");
    parametros.append("apellidos", $("#apellidos").value);
    parametros.append("nombres", $("#nombres").value);
    parametros.append("telefono", $("#telefono").value);
    parametros.append("dni", $("#dni").value);
    parametros.append("direccion", $("#direccion").value);
    
    const response = await fetch(`../../app/controllers/Persona.controller.php`,{
      method: 'POST',
      body: parametros
    });

    const data = await response.json();
    console.log(data);
  }

  $("#formPersonas").addEventListener("submit", async (event)=>{
    event.preventDefault();

    if(await ask("¿Estas seguro de guardar?", "Modulo usuarios")){
        await Registrarpersona();
        showToast("Guardado correctamente", "SUCCESS");
        
    }
  });

  //evento buscar persona api
  $("#dni").addEventListener("keypress",(event)=>{
    if(event.keyCode==13){
      buscarDni()
    }
  })
  $("#buscarDni").addEventListener("click",buscarDni)
});