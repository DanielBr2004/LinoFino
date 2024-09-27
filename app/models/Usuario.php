<?php

require_once 'Conexion.php';

class Usuario extends Conexion{

    private $pdo;

    public function __CONSTRUCT(){$this->pdo = parent::getConexion();}

    public function getAll():array{
        return parent::getData("spu_usuarios_LISTAR");
    }
    
}