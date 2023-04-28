<?php
 include "../../Config/Conexion.php";
 include "../../Config/crud.php";
 $crud = new Crud();
 $datos = array(
    "Nombre_Materia" =>$_POST['nombre'],
    "Docente" =>$_POST['docente'],
    "Numero_Creditos" =>$_POST['Numero_Creditos'],
    "Horario"=>$_POST['horario'],
    "Descripcion" =>$_POST['Descripcion'],
    "Modalidad" =>$_POST['Modalidad']
 );
 $resultado = $crud->InsertarRegistroMateria($datos);
 //validacion 
 if($resultado->getInsertedId()>0){
    header("Location:../index.php");
 }else{
    alert("Error");
 }
?>