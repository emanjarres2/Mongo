<?php include "public/web/header.php";?>
<div class="container" >
            <div class="row">
              <div class="card mt-4"  style="display:flex; margin:0px auto; width:650px; ">
                 <div class="card-body">
                <div class="col">
                    <a href="index.php" class="btn btn-outline-info"> <i class="fas fa-arrow-circle-left"></i> Regresar</i> </a>
                    <hr>
                   
                    <h3 align="center" class="mt-3"> <font color="#FF8C00">  <i class="fas fa-school"></i> <b> Estudiantes</b></font> </h3>
                    <hr>
                    
                    <form action="Config/Insertar.php" method="post">
                        <div class="row mt-2">
                            <div class="col">
                            <label>Nombre</label>
                            <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Digite Nombre">
                            </div>
                            <div class="col">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="Apellido" id="Apellido" class="form-control" placeholder="Digite Apellido">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="telefono">Telefono</label>
                                <input type="tel" name="Telefono" id="Telefono" class="form-control" placeholder="Digite Telefono">
                            </div>
                            <div class="col">
                                <label for="direcionn">Direccion</label>
                                <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Digite Direccion">
                            </div>
                            <div class="col">
                                    <label for="correo"> Correo Electronico</label>
                                    <input type="email" name="Correo" id="Correo" class="form-control" placeholder="Digite su correo ">
                                </div>
                        </div>
                        <div class="row mt-2">
                               
                                <div class="col">
                                    <label for="fecha">Fecha Nacimiento</label>
                                    <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="fecha">Genero</label>
                                    <select name="Genero" id="Genero" class="form-control">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                        <option>Otro</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="fecha">Estado Civil</label>
                                    <select name="Estado_Civil" id="Estado_Civil" class="form-control">
                                        <option>Soltero</option>
                                        <option>Casado</option>
                                        <option>Divorciado</option>
                                    </select>
                                </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col">
                            <label for="departamento">Departamento</label>
                            <input type="text" name="Departamento" id="Departamento" class="form-control" placeholder="Digite su Departamento">
                           </div>    
                           <div class="col">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" name="Ciudad" id="Ciudad" class="form-control" placeholder="Digite su Ciudad">
                           </div>                                      
                        </div>
                        <div class="row mt-3">
                           <div class="col">
                           <button class="btn btn-primary btn-block" type="submit">Nuevo</button>
                           </div>
                        </div>
                    </form>
                    
                </div>
            </div>
            </div>
            </div>
        </div>
<?php include "public/web/scripts.php";?>