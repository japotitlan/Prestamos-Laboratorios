<?php
include("conexionDB.php");
$con=conectar();



$idPrestamo=$_POST['idPrestamo'];
$idUsuario=$_POST['idUsuario'];
$lab=$_POST['lab'];
$idHerramienta=$_POST['idHerramienta'];
$nombreHerramienta=$_POST['nombreHerramienta'];
$cantidadHerramienta=$_POST['cantidadHerramienta'];
$nombreMaestro=$_POST['nombreMaestro'];
$carreraMaestro=$_POST['carreraMaestro'];
$telMaestro=$_POST['telMaestro'];
$fechaPrestamo=$_POST['fechaPrestamo'];


$sql2="INSERT INTO `solicitante_docente`(`id_prestamo`,`id_usuario`,`lab`, `id_herramienta`, `nombreHerramienta`, `cantidad`, `nombre`,`carrera`,`celular`,`fechaEntrega`) VALUES('$idPrestamo','$idUsuario','$lab','$idHerramienta','$nombreHerramienta','$cantidadHerramienta','$nombreMaestro','$carreraMaestro','$telMaestro','$fechaPrestamo')";
$query2= mysqli_query($con,$sql2);


if($query2){
    Header("Location: prestamosM2.php");

}else {
}
?>