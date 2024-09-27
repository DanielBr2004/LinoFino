document.addEventListener("DOMContentLoaded",()=>{
  
  function $(objeto = null){
    return document.querySelector(objeto)
  }
  function buscarDni(){
    console.log("Estoy buscando espérate...")
  }

  $("#formPersonas").addEventListener("submit", async (event)=>{
    event.preventDefault();
    if(await ask("¿Estas seguro de guardar?", "Modulo usuarios")){
        showToast("Guardado correctamente", "SUCCESS")
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