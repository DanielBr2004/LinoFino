<?php

require_once'../models/Persona.php';
$persona = new Persona();

header("Content-type: application/json; charset=utf-8");

//consultas, busqueda
if(isset($_GET['operation'])){
    switch($_GET['operation']){
        case '':
            break;
    }
}

//modificaciones
if(isset($_POST['operation'])){
    switch($_POST['operation']){
        case 'add':
            $datosrecibidos = [
                "apellidos"     =>$persona->limpiarCadena($POST['apellidos']),
                "nombres"       =>$persona->limpiarCadena($POST['nombres']),
                "telefono"      =>$persona->limpiarCadena($POST['telefono']),
                "dni"              =>$persona->limpiarCadena($POST['dni']),
                "direccion"     =>$persona->limpiarCadena($POST['direccion']),
            ];
            $idpersona = $persona->add($datosrecibidos);
            echo json_encode(['idpersona' =>$idpersona]);
            break;
    }
}