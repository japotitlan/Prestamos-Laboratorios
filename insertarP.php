<?php
session_start();
include("conexionDB.php");
$con=conectar();


$nombreUsuario= $_SESSION['usuario'];

$query = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario= '$nombreUsuario'");
$consulta = mysqli_fetch_array($query);
$lab = $consulta['laboratorio'];

$idPrestamo=$_POST['idPrestamo'];
$idHerramienta=$_POST['idHerramienta'];
$nombreHerramienta=$_POST['nombreHerramienta'];
$cantidadHerramienta=$_POST['cantidadHerramienta'];
$nombrePersonal=$_POST['nombrePersonal'];
$areaPersonal=$_POST['areaPersonal'];
$telPersonal=$_POST['telPersonal'];
$fechaPrestamo=$_POST['fechaPrestamo'];


$sql2="INSERT INTO `solicitante_personal`(`id_prestamo`, `nombreUsuario`, `lab`, `id_herramienta`, `nombreHerramienta`, `cantidad`, `area`, `nombre`, `celular`, `fechaEntrega`) VALUES('$idPrestamo','$nombreUsuario','$lab','$idHerramienta','$nombreHerramienta','$cantidadHerramienta','$areaPersonal','$nombrePersonal','$telPersonal','$fechaPrestamo')";
$query2= mysqli_query($con,$sql2);


if($query2){
    Header("Location: prestamosP.php");
}else {

}
?>