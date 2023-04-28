<?php
  include "../../Config/Conexion.php";
  include "../../Config/crud.php";
  $crud = new Crud();
  $datos = array (
    "Nombre"=>$_POST['Nombre'],
    "Apellido"=>$_POST['Apellido'],
    "Telefono"=>$_POST['Telefono'],
    "Direccion"=>$_POST['Direccion'],
    "Correo"=>$_POST['Correo'],
    "Fecha_Nacimiento" =>$_POST['Fecha_Nacimiento'],
    "Genero" =>$_POST['Genero'],
    "Tipo_Documento"=>$_POST['Tipo_Documento'],
    "Numero_Documento"=>$_POST['Numero_Documento'],
    "Especialidad"=>$_POST['Especialidad'],
    "Experiencia"=>$_POST['Experiencia']
  );
  $resultado = $crud->InsertarRegistroDocente($datos);
  
  // validacion
  if($resultado->getInsertedId()>0){
    header("Location:../index.php");
  }else{
    print_r($resultado);
  }
?>