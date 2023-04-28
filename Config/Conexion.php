<?php

require_once $_SERVER['DOCUMENT_ROOT']."/MONGO/vendor/autoload.php";
  class Conexion{
    public function conectar()
    {
      try{
        $server ="cluster0.osqgxlw.mongodb.net";
        $usuario ="emanja2";
        $password="Manja2024";
        $bd="CentroUniversitario";
        $port="27017";
        $cadena ="mongodb+srv://". $usuario.":".$password."@".$server."/".$bd;
        $Cliente = new MongoDB\Client($cadena);
        return $Cliente->selectDatabase($bd);

        }catch(\Throwable $t){
          return $t->getMessage();
        }
        
    }
  }
 /*  $objeto = new Conexion();
  var_dump($objeto->conectar());*/
?>