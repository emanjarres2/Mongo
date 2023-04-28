<?php
  include "../public/web/header.php";
  include "../Config/Conexion.php";
  include "../Config/crud.php";
  $crud = new Crud();
  $datos = $crud->ViewProgramas();
?>
 <div class="container">
    <div class="row">
        <div class="card" style="display:flex; margin:0px auto; margin-top:2%;">
            <div class="card-body">
                <div class="col">
                <a href="./index.php" class="btn btn-outline-info"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                <hr>
                <h3><center><b><font color="#E3A869"><i class="fas fa-clipboard-list"></i> LISTADO DE PROGRAMAS REGISTRADOS</font></b></center></h3>
                <hr>
                <table class="table table-responsive table-sm table-hover" id="programas" name="programas">
                    <thead style="background-color:#EEC900; text-align:center; color:white;">
                        <tr>
                            <th>N°</th>
                            <th>Nombre Programa</th>
                            <th>Duracion</th>
                            <th>Codigo Programa</th>
                            <th>Modalidad</th>
                            <th>Descripcion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                              foreach($datos as $programa){
                            ?>
                            <tr>
                                <td><?php echo $programa->_id;?></td>
                                <td><?php echo $programa->Nombre_Programa;?></td>
                                <td><?php echo $programa->Duracion;?></td>
                                <td><?php echo $programa->Codigo_Programa;?></td>
                                <td><?php echo $programa->Modalidad;?></td>
                                <td align="justify"><?php echo $programa->Descripcion;?></td>
                                <td align="center">
                                <form action="#" method="POST">
                                    <input type="hidden"  value="<?php echo $programa->_id; ?>"  name="id" id="id"/>
                                    <button class="btn btn-warning">
                                    <i class="fas fa-users"></i>
                                    </button>
                                </form>
                                </td>
                                <td align="center">
                                <form action="#" method="POST">
                                <input type="hidden"  value="<?php echo $programa->_id;?>"  name="_id" id="_id"/>
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
                    <tfoot style="background-color:#CDAD00; text-align:center; color:white;">
                    <tr>
                            <th>N°</th>
                            <th>Nombre Programa</th>
                            <th>Duracion</th>
                            <th>Codigo Programa</th>
                            <th>Modalidad</th>
                            <th>Descripcion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
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