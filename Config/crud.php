<?php
  require_once "Conexion.php";
  class Crud extends Conexion{
    public function viewDateMateria(){
      try
      {
        $conexion = parent::conectar();
        $coleccion = $conexion->Materias;
        $datos = $coleccion->find();
        return $datos;
      }catch(\Throwable $t){
        return $t->getMessage();
      }
    }
    public function CountMateria()
    {
      try 
      {
        $conexion = parent::conectar();
        $coleccion = $conexion->Materias;
        $datos = $coleccion->count();
        return $datos;
      }catch(\Throwable $t)
      {
        return $t->getMessage();
      }
    }

    public function CountDocente(){
      $conexion =parent::conectar();
      $coleccion = $conexion->Docentes;
      $datos = $coleccion->count();
      return $datos;
    }
    public function CountProgramas(){
      $conexion = Conexion::conectar();
      $coleccion = $conexion->Programas;
      $datos = $coleccion->count();
      return $datos;
    }
    public function viewProgramas(){
      try{
          $conexion = Conexion::conectar();
          $coleccion = $conexion->Programas;
          $datos = $coleccion->find();
          return $datos;
      }catch(\Throwable $t){
        return $t->getMessage();
      }
    }
    public function viewDocentes()
    {
      try
      {
        $conexion = parent::conectar();
        $coleccion = $conexion->Docentes;
        $datos = $coleccion->find();
        return $datos;
      }catch(\Throwable $t){
        return $t->getMessage();
      }
    }
    public function viewDate()
    {
        try
        {
            $conexion = parent::conectar();
            $coleccion = $conexion->Estudiantes;
            $datos = $coleccion->find();
            return $datos;

        }catch(\Throwable $t){
            return $t->getMessage();
        }
    }
    public function ObtenerMateria($id){
      try
      {
        
        $conexion = Conexion::conectar();
        $coleccion = $conexion->Materias;
        $datos = $coleccion->findOne(
          array('_id' => new \MongoDB\BSON\ObjectId($id))
        );
        return $datos;
      }catch(\Throwable $t)
      {
        return $t->getMessage();
      }
    }
    public function obtenerDocumento($id) {
      try {
          $llave=$id = $_GET['id'];
          $conexion = Conexion::conectar();
          $coleccion = $conexion->Estudiantes;
          $datos = $coleccion->findOne(
                                  array(
                                      '_id' => new \MongoDB\BSON\ObjectId($llave)
                                  )
                              );
          
          return $datos;
      } catch (\Throwable $th) {
          return $th->getMessage();
      }
  }
  // eliminar materia
    public function EliminarMateria($id){
      try
      {
        $conexion = Conexion::conectar();
        $coleccion = $conexion->Materias;
        $respuesta = $coleccion->deleteOne(
          array(
             "_id" => new \MongoDB\BSON\ObjectId($id)
          )
          );
          return $respuesta;

      }catch(\Throwable $t){
        return t->getMessage();
      }
    }
    public function InsertarRegistroDocente(array $datos){
      try
      {
          $conexion = Conexion::conectar();
          $coleccion = $conexion->Docentes;
          $resultado = $coleccion->insertOne($datos);
          return $resultado;
      }catch(\Throwable $t){
        return $t->getMessage();
      }
    }

    // materias
    public function InsertarRegistroMateria(array $datos){
      try
      {
        $conexion = Conexion::conectar();
        $coleccion = $conexion->Materias;
        $resultado = $coleccion->insertOne($datos);
        return $resultado;

      }catch(\Throwable $t)
      {

      }
    }
    public function Login ($nombre , $clave){
      try
      {
        $conexion = Conexion::conectar();
        $coleccion = $conexion->Usuarios;
        $resultado = $coleccion->find(array (
            "Usuario" => $nombre
          )
        );
      }catch(\Throwable $t){
        return $t->getMessage();
      }
    }
    public function InsertarDatos(array $datos)
    {
      try
      {
        $conexion = Conexion::conectar();
        $coleccion = $conexion->Estudiantes;
        $resultado = $coleccion ->insertOne($datos);
        return $resultado;

      }catch(\Throwable $t){
        return $t->getMessage();
      }
    }

    public function MensajeCrud($mensaje){
      $msg = '';
      if($mensaje == 'insert'){
        $msg = 'Swal("Excelente!","Agregado con Exito","succes")';
      }else if ($mensaje == 'update') {
        $msg = 'swal("Excelente!", "Actualizado con exito!", "info")';
    } else if ($mensaje == 'delete') {
        $msg = 'swal("Excelente!", "Eliminado con exito!", "warning")';
    }

    return $msg;
    }
  }
?>