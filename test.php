<?php
 include "Config/Conexion.php";
 include "Config/crud.php";
 $crud = new Crud();
 $datos=$crud->CountMateria();
?>
<?php include "public/web/header.php";?>
<div class="container">
    <div class="row mt-4" style="display:flex; margin:0px auto; margin-top:5%;">
        <div class="card">
            <div class="card-body">
                <h4><b><center>Materias</center></b></h4>
                <hr>
                <div class="col">
                    <img src="public/img/books.png" alt="" class="img img-responsive" style="width:125px; display:flex; margin:0px auto;">
                    <p align="justify">El total de Materias registradas en nuestro sistema de información hasta el momento  es de</p>
                    <?php echo $datos;?>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php include "public/web/scripts.php";?>