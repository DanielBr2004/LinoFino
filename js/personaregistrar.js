document.addEventListener("DOMContentLoaded",()=>{
  
  function $(objeto = null){
    return document.querySelector(objeto)
  }
  function buscarDni(){
    console.log("Estoy buscando espérate...")
  }

  $("#formPersonas").addEventListener("submit",(event)=>{
    event.preventDefault();
    if(confirm("¿Seguro de proceder?")){
      console.log("guardado correctamente")
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