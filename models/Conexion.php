<?php

class Conexion{

  //1. Almacenamos los datos de conexión
  private $servidor = "localhost";
  private $puerto = "3306";
  private $baseDatos = "cine";
  private $usuario = "root";
  private $clave = "";

  public function getConexion(){

    try{
      $pdo = new PDO(
        "mysql:host={$this->servidor};
        port={$this->puerto};
        dbname={$this->baseDatos};
        charset=UTF8", 
        $this->usuario, 
        $this->clave
      );

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

/**
 * evita intentos de SQLinjection
 */

  public static function limpiarCadena($cadena):string{
    $cadena = trim($cadena);
    $cadena = stripcslashes($cadena);

    $cadena = str_replace("<script>", "", $cadena);
    $cadena = str_ireplace("</script>", "", $cadena);
    $cadena = str_ireplace("<script src", "", $cadena);
    $cadena = str_ireplace("<script type", "", $cadena);
    $cadena = str_ireplace("SELECT * FROM", "", $cadena);
    $cadena = str_ireplace("DELETE FROM", "", $cadena);
    $cadena = str_ireplace("INSERT INTO", "", $cadena);
    $cadena = str_ireplace("DROP TABLE", "", $cadena);
    $cadena = str_ireplace("DROP DATABASES", "", $cadena);
    $cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
    $cadena = str_ireplace("SHOW TABLES", "", $cadena);

    $cadena = str_ireplace("<?php", "", $cadena);
    $cadena = str_ireplace("?>", "", $cadena);
    $cadena = str_ireplace("--", "", $cadena);
    $cadena = str_ireplace(">", "", $cadena);
    $cadena = str_ireplace("[", "", $cadena);
    $cadena = str_ireplace("]", "", $cadena);

    $cadena = str_ireplace("^", "", $cadena);
    $cadena = str_ireplace("==", "", $cadena);
    $cadena = str_ireplace("===", "", $cadena);
    $cadena = str_ireplace(";", "", $cadena);
    $cadena = str_ireplace("::", "", $cadena);
    $cadena = str_ireplace("('", "", $cadena);
    $cadena = str_ireplace("')", "", $cadena);
    $cadena = str_ireplace("", "", $cadena);

    $cadena = stripcslashes($cadena);
    $cadena = trim($cadena);



    return $cadena;
  }

}