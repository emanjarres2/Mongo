<?php

 //require_once "Config/crud.php";
 //$crud = new Crud();
 //$datos = $crud->viewDate();
?>

<?php include "public/web/header.php";?>

        <div class="container">
            <div class="row ">
              <div class="card" style="display:flex; margin:0px auto; margin-top:6%; ">
                 <div class="card-body" >
                <div class="col" style="padding:5px; text-align:center;">
                    <a href="Estudiantes/index.php" class="btn btn-info"><i class="fas fa-user-plus"></i> Gestión de Estudiante</a> 
                    <a href="Materia/index.php" class="btn btn-info"><i class="fas fa-address-book"></i> Gestión de Materia</a> 
                    <a href="Docentes/index.php" class="btn btn-info"><i class="fas fa-chalkboard-teacher"></i> Gestión de Docentes</a> 
                    <a href="Notas/index.php" class="btn btn-info"><i class="fas fa-check"></i> Gestión de Notas</a>
                    <hr>
                    <h2 align="center"> <font color="#E3A869"> <b>SISTEMA INFORMACIÓN ESTUDIANTIL CON MONGO DB</b></font> </h2>
                    <hr>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-sm-4">
                        <div class="card" style="width:18rem;">
                            <img src="public/img/book.jpg" alt="" class="img-circle" style="width:286px; height:190px;">
                            <div class="card-body">
                                <div class="card-title">
                                    <font color="#E3A869"><b><center>LISTADO DE MATERIAS</center></b></font>
                                </div>
                                <p class="card-text text-justify">
                                    Se podra encontrar la información detallada de las Materias registradas en el sistemas
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
                            <img src="public/img/teacher.jpg" alt="" class="img-circle" style="width:286px; height:190px;">
                            <div class="card-body">
                                <div class="card-title">
                                <font color="#E3A869"><b><center>LITADO DE DOCENTES</center></b></font>
                                </div>
                                <p class="card-text text-justify">
                                    Podra encontrar la información detallada de los docentes registrados en el sistema al dar clic en

                                </p>
                                <a class="btn btn-outline-info btn-block" href="./Consulta.php">
                                Docentes <i class="fas fa-chalkboard-teacher"></i>
                                    </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="width:18rem;">
                            <img src="public/img/course.jpg" alt="" class="img-circle" style="width:286px; height:190px;">
                            <div class="card-body">
                                <div class="card-title">
                                <font color="#E3A869"><b><center>LISTADO DE PROGRAMAS</center></b></font>
                                </div>
                                <p class="card-text text-justify">
                                    Podra consultar la información  de manera mas detallada sobre todos  los programas listados en nuestra base de datos
                                </p>
                                <a class="btn btn-outline-info btn-block" href="./ListadoProgramas.php">
                                  <i class="fas fa-school"></i> Programas de Formacion
                                    </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
 

<?php include "public/web/scripts.php";?>