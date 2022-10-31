<?php

include("conexionDB.php");
$con=conectar();

$clave=$_POST['clave'];
$lab=$_POST['lab'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

$sql="UPDATE inventario SET  lab='$lab',descripcion='$descripcion',cantidad='$cantidad' WHERE clave='$clave'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventarios.php");
    }
?>