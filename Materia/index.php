<?php 
session_start();
  require_once "../Config/crud.php";
  $crud = new Crud();
  $datos = $crud->viewDateMateria();

  $mensaje = '';
  if(isset($_SESSION['mensaje_crud'])){
     $mensaje = $crud->MensajeCrud($_SESSION['mensaje_crud']);
     unset($_SESSION['mensaje_crud']);
  }
?>

<?php
   include "header.php";
?>
<div class="container-fluid">
    <div class="row" style="display:flex; margin:0px auto;  margin-top:1%;">
        <div class="card">
        <div class="card-body">
            <div class="col">
            <a href="../index.php" class="btn  btn-outline-info"><i class="fas fa-home"></i> Home</a>
                <a href="Nueva.php" class="btn  btn-outline-info"><i class="fas fa-book"></i></i> Nueva Materia</a>
                
                <hr>
                <h3><center><i class="fas fa-book"> Gestionar Materias</center></i></h3>
                <hr>
                <table class="table table-responsive table-sm table-hover" id="materia" name="materia">
                    <thead style="background-color:#EEC900; text-align:center; color:white;">
                    <th>Codigo Materia</th>
                    <th>Nombre Materia</th>
                    <th>Docente</th>
                    <th>Numero de Creditos</th>
                    <th>Horario</th>
                    <th>Descripcion</th>
                    <th>Modalidad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <?php
                           foreach($datos as $item){
                        ?>
                        <tr>
                            <td><?php echo $item->_id;?></td>
                            <td><?php echo $item->Nombre_Materia;?></td>
                            <td><?php echo $item->Docente;?></td>
                            <td><?php echo $item->Numero_Creditos;?></td>
                            <td><?php echo $item->Horario;?></td>
                            <td align="justify"><?php echo $item->Descripcion;?></td>
                            <td><?php echo $item->Modalidad;?></td>
                            <td>
                            <form action="Editar.php" method="post">
                                    <input type="hidden"  value="<?php echo $item->_id; ?>"  name="id" id="id"/>
                                    <button class="btn btn-warning">
                                    <i class="fas fa-users"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                            <form action="Eliminar.php" method="post">
                                <input type="hidden"  value="<?php echo $item->_id;?>"  name="id" id="id"/>
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        <?php
                                }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
<?php
 include "Scripts.php";
?>