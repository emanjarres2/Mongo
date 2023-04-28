<?php
  include "../public/web/header.php";
?>
<div class="container">
    <div class="row mt-4">
        
            <div class="card" style="display:flex; margin:0px auto;">
                <div class="card-body">
                   <div class="col">
                   <a href="./index.php" class="btn btn-outline-info"> <i class="fas fa-arrow-circle-left"></i> Regresar</i> </a>
                    <hr>
                       <h3><b><center><i class="fas fa-id-card"></i> <font color="#E3A869"> Sistema de Gestion Estudiantil<b/font></center></b></h3>
                    <hr>
                   </div>

                   <div class="row">
                    <div class="col">
                    <table class="table table-bordered border-danger ">
	<tbody>
		<tr>
			<td colspan="8">Mis datos</td>
		</tr>
		<tr>
			<td colspan="4" rowspan="6">
                <img src="../public/img/book.jpg" alt="" width="270px" height="450px">
            </td>
			<td colspan="2"><b>Nombre Completo</b></td>
			<td colspan="2">Pedro Rojas Guerra</td>
		</tr>
		<tr>
			<td colspan="2">Telefono</td>
			<td colspan="2">385612</td>
		</tr>
		<tr>
			<td colspan="2">Direccion</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="2">Correo</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="2">Documento</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="2">Genero</td>
			<td colspan="2"></td>
		</tr>
	</tbody>
</table>
                    </div>
                   </div>
                </div>
            </div>
        
    </div>
</div>
<?
  include "../public/web/scripts.php";
?>