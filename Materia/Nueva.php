<?php
 include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="card" style="display:flex; margin:0px auto;  ">
            <div class="card-body">
            <a href="./index.php" class="btn btn-outline-info"> <i class="fas fa-arrow-circle-left"></i> Regresar</i> </a>
             <hr>
             <h3 align="center" class="mt-1"> <font color="#FF8C00"><i class="fas fa-book-reader"></i><b> Registro de Materia</b></font> </h3>
             <hr>
             <form action="./Controllers/MateriaController.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="nombre">Nombre Materia</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Digite nombre Materia" required>
                    </div>
                    <div class="col">
                        <label for="docente">Nombre del docente</label>
                        <input type="text" name="docente" id="docente" class="form-control" placeholder="Digite el nombre del docente">
                    </div>
                    
                </div>
                <div class="row">
                <div class="col">
                    <label for="creditos">Creditos</label>
                    <input type="text" name="Numero_Creditos" id="Numero_Creditos" class="form-control" placeholder="Digite numero de creditos">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="horario">Horario</label>
                        <select name="horario" id="horario" class="form-control">
                            <option>Diurno</option>
                            <option>Tarde</option>
                            <option>Noche</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="Descripcion" id="Descripcion" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="modalidad">Modalidad de Formacion</label>
                        <select name="Modalidad" id="" class="form-control">
                            <option>Presencial</option>
                            <option>Virtual</option>
                            <option>Semi Presencial</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-1 ">
                    <div class="col">
                    <button class="btn btn-info btn-block "><i class="fas fa-book-reader" ></i> Nuevo</button>
                    </div>
                </div>
             </form>
            </div>
        </div>
    </div>
</div>
<?php
 include "Scripts.php"
?>