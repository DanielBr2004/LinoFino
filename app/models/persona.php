<?php

require_once 'Conexion.php';

class Persona extends Conexion{

    private $pdo;

    public function __CONSTRUCT(){$this->pdo = parent::getConexion();}

          //Función para registrar a la persona devolviendo su id 
          public function add($params = []):int{
            try{
                $cmd = $this->pdo->prepare("call spu_personas_registrar(@idpersona,?,?,?,?,?)");
                $cmd->execute(
                    array(
                    $params['apellidos'],
                    $params['nombres'],
                    $params['telefono'],
                    $params['dni'],
                    $params['direccion']
                    )
                ); 
                //actualizacion capturamos el valor de salido OUT
                $response = $this->pdo->query("SELECT @idpersona AS idpersona")->fetch(PDO::FETCH_ASSOC);
                return (int) $response['idpersona'];
            }
            catch(Exception $e){
                error_log("Error: " . $e->getMessage());
            return -1;
            }
            return $idgenerado;
        }

}

$persona = new Persona();
$id = $persona->add([
    "apellidos"     => "Braulio",
    "nombres"       => "Buleje",
    "telefono"      => "987456789",
    "dni"           => "78978974",
    "direccion"     => ""
]);
echo $id;