<?php

include("conexionDB.php");
$con=conectar();

$clave=$_GET['id'];

$sql="DELETE FROM inventario WHERE `inventario`.`clave` = $clave";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventarios.php");
    }
?>