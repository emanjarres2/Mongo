<?php 
include "Conexion.php";
include "crud.php";
include "../public/web/header.php";
$crud = new Crud();
$id = $_POST['_id'];
$resultado = $crud->obtenerDocumento($id);
echo $id;


?>

<div class="container-fluid">
    
    <div class="row">
        <div class="card mt-5" style="display:flex; margin:0px auto; ">
       
        
        <div class="card-body">
            <div class="col">
            <hr>
            <h3 align="center"><i class="fas fa-trash"></i> <font color="#FF8C00"> Eliminar Registro </font></h3>
            <hr>
            <a href="../index.php" class="btn btn-outline-info"> <i class="fas fa-arrow-circle-left"></i> Regresar</i> </a>
                <table class="table table-responsive table-sm table-hover mt-3">
                <thead style="background-color:#EEC900; text-align:center; color:white;">
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Estado</th>
                        <th>Genero</th>
                        <th>Departamento</th>
                        <th>Ciudad</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot style="background-color:#CDAD00; text-align:center; color:white;">
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Estado</th>
                        <th>Genero</th>
                        <th>Departamento</th>
                        <th>Ciudad</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
<?php include "../public/web/scripts.php";?>