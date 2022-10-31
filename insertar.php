<?php
include("conexionDB.php");
$con=conectar();

$clave=$_POST['tool_id'];
$nmH=$_POST['nameH'];
$des=$_POST['des'];
$lab=$_POST['lab'];
$cantidad=$_POST['cantidad'];


$sql="INSERT INTO `inventario`(`clave`, `nombreHerramienta`, `lab`, `descripcion`, `cantidad`) VALUES('$clave','$nmH','$des','$lab','$cantidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inventarios.php");

}else {
}
?>