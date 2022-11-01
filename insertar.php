<?php
session_start();
include("conexionDB.php");
$con=conectar();

$nombreUsuario= $_SESSION['usuario'];
$query = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario= '$nombreUsuario'");
$consulta = mysqli_fetch_array($query);
$lab = $consulta['laboratorio'];
$clave=$_POST['tool_id'];
$nmH=$_POST['nameH'];
$des=$_POST['des'];
$cantidad=$_POST['cantidad'];



$sql="INSERT INTO `inventario`(`clave`, `nombreHerramienta`,  `lab`, `descripcion`, `cantidad`) VALUES('$clave','$nmH','$lab','$des','$cantidad')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: inventarios.php");

}else {
}
?>