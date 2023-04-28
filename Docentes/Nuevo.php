

<?php
  include "../public/web/header.php";
?>
<div class="container">
    <div class="row mt-3" >
    
        <div class="card"style="display:flex; margin:0px auto; margin-top:2%;  width:650px; height:615px;">
            
        
            <div class="card-body">
              <div class="col">
              <a href="index.php" class="btn btn-outline-info"><i class="fas fa-backspace"></i> Regresar</a>
              <hr>
            <h2><center><b><font color="#CD8500"> <i class="fas fa-address-book"></i> Registro de docentes</font></b></center></h2>
            <hr>
              <form action="./Controllers/DocenteController.php" method="post">
                   <div class="row mt-2">
                    <div class="col-4 mt-2">
                    <label for="">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Digite nombre" required>
                   
                    </div>
                    <div class="col-4 mt-2">
                    <label for="">Apellido</label>
                    <input type="text" name="Apellido" id="Apellido" class="form-control" placeholder="Digite apellido" required>
                    </div>
                    <div class="col mt-2">
                    <label for="">Telefono</label>
                    <input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Digte telefono" required>
                    </div>
                   </div>
                   <div class="row mt-2">
                    <div class="col-6">
                    <label for="">Direccion</label>
                    <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Digite direccion" required>
                    </div>
                    <div class="col-6">
                    <label for="">Correo Electronico</label>
                    <input type="email" name="Correo" id="Correo" class="form-control" placeholder="Digite Correo Electronico" required>
                    </div>
                   </div>
                   <div class="row mt-2">
                    <div class="col-6">
                        <label for="fecha">Fecha Nacimiento</label>
                        <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="Genero">Genero</label>
                        <select name="Genero" id="Genero" class="form-control">
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option>
                        </select>
                    </div>
                   </div>
                   <div class="row mt-2">
                    <div class="col-6">
                        <label for="tipo">Tipo documento</label>
                        <select name="Tipo_Documento" id="Tipo_Documento" class="form-control">
                            <option>C.C.</option>
                            <option>Pasaporte</option>
                            <option>C.E.</option>
                            <option>T.I.</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="documento">Numero de documento</label>
                        <input type="text" name="Numero_Documento" id="Numero_Documento" class="form-control" placeholder="Digite documento">
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-6">
                        <label for="especialidad">Especialidad</label>
                        <input type="text" name="Especialidad" id="Especialidad" class="form-control" placeholder="Digite especialidad">
                    </div>
                    <div class="col-6">
                        <label for="experiencia">Experiencia</label>
                        <input type="text" name="Experiencia" id="Experiencia" class="form-control" placeholder="Experiencia">
                    </div>
                   </div>
                   <div class="row mt-3">
                    <div class="col">
                        <button class="btn btn-primary btn-block" type="scripts">Nuevo</button>
                    </div>
                   </div>
                </form>
              </div>          
            </div>
        </div>
    </div>
</div>
<?
 include "../public/web/scripts.php";
?>