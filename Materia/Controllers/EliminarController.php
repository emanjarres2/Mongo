<?php
 include "../../Config/Conexion.php";
 include "../../Config/crud.php";
 $crud = new Crud();
 $id =$_POST['id'];
 $respuesta = $crud->EliminarMateria($id);
 // validacion
 if($respuesta->getDeletedCount()>0){
    $_SESSION['mensaje_crud'] = 'delete';
    header('location:../index.php');
 }else{
    print_r($respuesta);
 }
?>