<?php

require_once'../models/Usuario.php';
$usuario = new Usuario();

header("Content-type: application/json; charset=utf-8");

//consultas, busqueda
if(isset($_GET['operation'])){
    switch($_GET['operation']){
        case 'getAll':
            echo json_encode($usuario->getAll());
            break;
    }
}

//modif
