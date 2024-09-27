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
                "apellidos"     =>$persona->limpiarCadena($_POST['apellidos']),
                "nombres"       =>$persona->limpiarCadena($_POST['nombres']),
                "telefono"      =>$persona->limpiarCadena($_POST['telefono']),
                "dni"           =>$persona->limpiarCadena($_POST['dni']),
                "direccion"     =>$persona->limpiarCadena($_POST['direccion']),
            ];
            $idpersona = $persona->add($datosrecibidos);
            echo json_encode(['idpersona' =>$idpersona]);
            break;
    }
}