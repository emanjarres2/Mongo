
<?php
  include "../public/web/header.php";
  include "../Config/Conexion.php";
  include "../Config/crud.php";
  $crud = new Crud();
  $datos = $crud->viewDocentes();
?>

<div class="container">
    <div class="row">
        <div class="card" style="display:flex; margin:0px auto; margin-top:2%;">
            <div class="card-body">
                <div class="col">
                <a href="./index.php" class="btn btn-outline-info"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                <hr>
                <h3><center><b><font color="#E3A869">DOCENTES REGISTRADOS EN EL SISTEMA</font></b></center></h3>
                <hr>
                <table class="table table-responsive table-sm table-hover table-bordered" id="docentes" name="docentes">
                  <thead style="background-color:#EEC900; text-align:center; color:white;">
                      <tr>
                        <th>N°</th>
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Genero</th>
                        <th>Documento</th>
                        <th>Especialidad</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach($datos as $docentes){
                    ?>
                    <tr>
                      <td><?php echo $docentes->_id;?></td>
                      <td><?php echo $docentes->Nombre ." ".$docentes->Apellido;?></td>
                      <td><?php echo $docentes->Telefono;?></td>
                      <td><?php echo $docentes->Direccion;?></td>
                      <td><?php echo $docentes->Correo;?></td>
                      <td><?php echo $docentes->Fecha_Nacimiento;?></td>
                      <td><?php echo $docentes->Genero;?></td>
                      <td><?php echo $docentes->Numero_Documento;?></td>
                      <td><?php echo $docentes->Especialidad;?></td>
                    </tr>
                    <?php
                        }
                    ?>
                  </tbody>
                  <tfoot style="background-color:#CDAD00; text-align:center; color:white;">
                  <tr>
                        <th>N°</th>
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Genero</th>
                        <th>Documento</th>
                        <th>Especialidad</th>
                      </tr>
                  </tfoot>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 include "../public/web/scripts.php";
?>