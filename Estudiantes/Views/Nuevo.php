<?php
  include "../../public/web/header.php";
?>
 <div class="container">
  <div class="row mt-4">
      <div class="card" style="display:flex; margin:0px auto;  ">
        <div class="card-body">
        <a href="../index.php" class="btn btn-outline-info"> <i class="fas fa-arrow-circle-left"></i> Regresar</i> </a>
        <hr>
             <h3 align="center" class="mt-1"> <font color="#FF8C00"><i class="fas fa-user"></i><b> Registro de Estudiantes</b></font> </h3>
             <hr>
             <form action="../Controllers/EstudiantesControllers.php" method="post">
              <div class="row">
                <div class="col">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Digite Nombre">
                </div>
                <div class="col">
                  <label for="Apellido">Apellido</label>
                  <input type="text" name="Apellido" id="Apellido" class="form-control" placeholder="Digite Apellido">
                </div>
                <div class="col">
                  <label for="Telefono">Telefono</label>
                  <input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Digite Telefono">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <label for="direccion">Direccion</label>
                  <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Digite Direccion">
                </div>
                 <div class="col">
                  <label for="correo"> Correo Electronico</label>
                  <input type="email" name="Correo" id="Correo" class="form-control" placeholder="Digite Correo">
                 </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="fecha">Fecha Nacimiento</label>
                  <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" class="form-control">
                </div>
                <div class="col">
                  <label for="estado">Estado Civil</label>
                  <select name="Estado_Civil" id="Estado_Civil" class="form-control">
                    <option>Soltero(a)</option>
                    <option>Casado(a)</option>
                    <option>Divorciado(a)</option>
                    <option>Viudo(a)</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="genero">Genero</label>
                  <select name="Genero" id="Genero" class="form-control">
                    <option>Masculino</option>
                    <option>Femenino</option>
                    <option>Otro</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="departamento">Departamento</label>
                  <select name="Departamento" id="Departamento" class="form-control">
                    <option>Amazonas</option>
                    <option>Antioquia</option>
                    <option>Arauca</option>
                    <option>Atlantico</option>
                    <option>Bolivar</option>
                    <option>Boyaca</option>
                    <option>Caldas</option>
                    <option>Caqueta</option>
                    <option>Casanare</option>
                    <option>Cauca</option>
                  </select>
                </div>
                <div class="col">
                  <label for="ciudad">Ciudad</label>
                  <select name="Ciudad" id="Ciudad" class="form-control">
                    <option>Leticia</option>
                    <option>Medellin</option>
                    <option>Arauca</option>
                    <option>Barranquilla</option>
                    <option>Cartagena de indias</option>
                    <option>Tunja</option>
                    <option>Manizales</option>
                    <option>Florencia</option>
                    <option>Yopal</option>
                    <option>Popayan</option>

                  </select>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <button class="btn btn-success btn-block" type="submit">Registrar</button>
                </div>
              </div>
             </form>
        </div>
      </div>
  </div>
 </div>
 
<?php
  include "../../public/web/scripts.php";
?>