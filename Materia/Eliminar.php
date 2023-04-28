<?php
   include "../Config/Conexion.php";
   include "../Config/crud.php";
   include "./header.php";
   $crud = new Crud();
   $id =$_POST['id'];
   //echo $id;
   $datos = $crud->ObtenerMateria($id);
   //echo $datos->Nombre_Materia;
?>
<div class="container">
    <div class="row">
    
        <div class="card mt-5" style="display:flex; margin:0px auto; ">
            <div class="card-body">
            <div class="col">
             <a href="./index.php" class="btn btn-outline-info"> <i class="fas fa-arrow-circle-left"></i> Regresar</i> </a>
                <hr>
                <h3 align="center"><font color="#FF8C00"><i class="fas fa-trash"></i> Eliminar Registro </font></h3>
                <hr>
                <table class="table table-responsive table-sm table-hover">
                <thead style="background-color:#EEC900; text-align:center; color:white;">
                <th>N°</th>
                <th>Nombre Materia</th>
                <th>Docente</th>
                <th>Numero de Creditos</th>
                <th>Horario</th>
                <th>Descripcion</th>
                <th>Modalidad</th>
                </thead>
                <tbody>
                 <tr>
                    <td align="center"><?php echo $datos->_id;?></td>
                    <td align="center"><?php echo $datos->Nombre_Materia;?></td>
                    <td align="center"><?php echo $datos->Docente;?></td>
                    <td align="center"><?php echo $datos->Numero_Creditos;?></td>
                    <td align="center"><?php echo $datos->Horario;?></td>
                    <td align="justify"><?php echo $datos->Descripcion;?></td>
                    <td align="center"><?php echo $datos->Modalidad;?></td>
                </td>
                 </tr>
                </tbody>
                <tfoot>
                <th>N°</th>
                <th>Nombre Materia</th>
                <th>Docente</th>
                <th>Numero de Creditos</th>
                <th>Horario</th>
                <th>Descripcion</th>
                <th>Modalidad</th>
                </tfoot>
                </table>
                <hr>
                <div class="alert alert-danger" role="alert">
                    <p>¿Esta seguro de eliminar este registro?</p>
                     <p>Una vez Eliminado no podra ser recuperado!</p>
                </div>
                <form action="./Controllers/EliminarController.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $datos->_id;?>">
                    <button class="btn btn-danger btn-block">
                    <i class="fa-solid fa-user-xmark"></i> Eliminar
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
   include "./Scripts.php";
?>