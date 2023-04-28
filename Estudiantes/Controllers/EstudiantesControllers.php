<?php
 include "../../Config/Conexion.php";
 include "../../Config/crud.php";
 $crud = new Crud();
 $datos = array(
    "Nombre" => $_POST['Nombre'],
    "Apellido"=>$_POST['Apellido'],
    "Telefono"=> $_POST['Telefono'],
    "Direccion"=> $_POST['Direccion'],
    "Correo"=> $_POST['Correo'],
    "Fecha_Nacimiento"=> $_POST['Fecha_Nacimiento'],
    "Estado_Civil"=> $_POST['Estado_Civil'],
    "Genero"=> $_POST['Genero'],
    "Departamento"=> $_POST['Departamento'],
    "Ciudad"=> $_POST['Ciudad']
 );
 $resultado = $crud->InsertarDatos($datos);
 if($resultado->getInsertedId()>0){
    header("Location:../index.php");
 }else{
    alert("Error");
 }
?>