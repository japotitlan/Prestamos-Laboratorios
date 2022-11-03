<?php
include("conexionDB.php");
$con=conectar();

session_start();
$nombreUsuario= $_SESSION['usuario'];
$query = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario= '$nombreUsuario'");
$consulta = mysqli_fetch_array($query);
$lab = $consulta['laboratorio'];
$idPrestamo=$_POST['idPrestamo'];
$idHerramienta=$_POST['idHerramienta'];
$nombreHerramienta=$_POST['nombreHerramienta'];
$cantidadHerramienta=$_POST['cantidadHerramienta'];
$nombreMaestro=$_POST['nombreMaestro'];
$carreraMaestro=$_POST['carreraMaestro'];
$telMaestro=$_POST['telMaestro'];
$fechaPrestamo=$_POST['fechaPrestamo'];


$sql2="INSERT INTO `solicitante_docente`(`id_prestamo`,`nombreUsuario`,`lab`, `id_herramienta`, `nombreHerramienta`, `cantidad`, `nombre`,`carrera`,`celular`,`fechaEntrega`) VALUES('$idPrestamo','$nombreUsuario','$lab','$idHerramienta','$nombreHerramienta','$cantidadHerramienta','$nombreMaestro','$carreraMaestro','$telMaestro','$fechaPrestamo')";
$query2= mysqli_query($con,$sql2);

$sql3="UPDATE inventario SET  estado='$cantidadHerramienta' WHERE clave='$idHerramienta'";
$query3=mysqli_query($con,$sql3);
if($query2 and $query3){
    Header("Location: prestamosM2.php");

}else {
}
?>