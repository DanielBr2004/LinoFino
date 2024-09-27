document.addEventListener("DOMContentLoaded", () =>{

    async function obtenerDatos() {
        const response = await fetch(`../../app/controllers/Usuario.controller.php?operation=getAll`, {method: 'GET'});
        const data = await response.json();
        console.log(data)
    }

    obtenerDatos();

});