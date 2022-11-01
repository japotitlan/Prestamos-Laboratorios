<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$laboratorio = $_POST['laboratorio'];
session_start();
$_SESSION['usuario'] = $usuario;

include("conexionDB.php");
$con = conectar();

$sql = "select * from usuarios where usuario='$usuario' and contraseña='$contraseña'";
$query = mysqli_query($con,$sql);

$filas = mysqli_num_rows($query);

if($filas){
    Header("Location: encargadosmain.php");
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h3 style="text-align: center; padding: 20px;">Error en la autenticacion</h3>
    <?php
}
mysqli_free_result($query);
mysqli_close($con);