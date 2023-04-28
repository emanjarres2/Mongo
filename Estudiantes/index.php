<?php
  include "../public/web/header.php";
?>
<div class="container">
    <div class="row mt-3">
        <div class="card" style="display:flex; margin:0px auto; margin-top:4%;">
            <div class="card-body">
                <div class="col p-2 text-center ">
                    <a href="../index.php" class="btn btn-outline-info"><i class="fas fa-home"></i> Home</a>
                    <a href="Views/Nuevo.php" class="btn btn-outline-info"><i class="fas fa-user-plus"></i> Nuevo Estudiante</a>
                    <a href="#" class="btn btn-outline-info"><i class="fas fa-search"></i> Busqueda Estudiante</a>
                    <a href="perfil.php" class="btn btn-outline-info"><i class="fas fa-address-card"></i> Mi Perfil</a>
                    <a href="#" class="btn btn-outline-info"><i class="fas fa-window-close"></i> Cerrar Session</a>
                    <hr>
                    <h2 align="center"><font color="#E3A869"><b>SISTEMA DE INFORMACION GESTION ESTUDIANTES</b></font></h2>
                    <hr>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">
                        <div class="card" style="width:18rem;">
                            <img src="../public/img/pexels.jpg" alt="" class="img-circle" style="width:286px; height:190px;">
                            <div class="card-body">
                                <div class="card-title">
                                    <font color="#E3A869"><b><center>MATERIAS MATRICULADAS</center></b></font>
                                </div>
                                <p class="card-text text-justify">
                                    Se podra encontrar la información  de las Materias registradas en el sistemas
                                    al dar clic en

                                </p>
                                <button class="btn btn-outline-info btn-block">
                                 Asignaturas <i class="fas fa-book"></i>
                                </button>
                                 
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-4">
                    <div class="card" style="width:18rem;">
                            <img src="../public/img/teacher.jpg" alt="" class="img-circle" style="width:286px; height:190px;">
                            <div class="card-body">
                                <div class="card-title">
                                <font color="#E3A869"><b><center>NOTAS DEL ESTUDIANTE</center></b></font>
                                </div>
                                <p class="card-text text-justify">
                                    Podra econtrar la información de los docentes registrados en el sistema al dar clic en

                                </p>
                                <a class="btn btn-outline-info btn-block" href="#">
                                 Calificaciones  <i class="fas fa-check"></i></i>
                                    </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="width:18rem;">
                            <img src="../public/img/course.jpg" alt="" class="img-circle" style="width:286px; height:190px;">
                            <div class="card-body">
                                <div class="card-title">
                                <font color="#E3A869"><b><center>HORARIO</center></b></font>
                                </div>
                                <p class="card-text text-justify">
                                    Podra consultar la información de los programas listados en nuestra base de datos
                                </p>
                                <a class="btn btn-outline-info btn-block" href="#">
                                <i class="fas fa-clock"></i> Mi Horario de Clases
                                    </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
  include "../public/web/scripts.php";
?>