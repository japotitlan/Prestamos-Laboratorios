<?php
session_start();
include("conexionDB.php");
$con=conectar();


$nombreUsuario= $_SESSION['usuario'];
$query = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario= '$nombreUsuario'");
$consulta = mysqli_fetch_array($query);
$lab = $consulta['laboratorio'];
$idP=$_POST['id_prestamo'];
$idH=$_POST['id_herramienta'];
$nomH=$_POST['nombreHerramienta'];
$cantidad=$_POST['cantidad'];
$mat=$_POST['matricula'];
$nmA=$_POST['nombreAlumno'];
$sem=$_POST['semestre'];
$carr=$_POST['carrera'];
$cel=$_POST['celular'];
$fchE=$_POST['fechaEntrega'];


$sql1="INSERT INTO `solicitantes_alumnos`(`id_prestamo`, `lab`, `id_herramienta`, `nombreHerramienta`, `cantidad`, `matricula`, `nombreAlumno`, `semestre`, `carrera`, `celular`, `fechaEntrega`) 
VALUES ('$idP','$lab','$idH','$nomH','$cantidad','$mat','$nmA','$sem','$carr','$cel','$fchE')";
$query1= mysqli_query($con,$sql1);
$sql3="UPDATE inventario SET  estado='$cantidadHerramienta' WHERE clave='$idHerramienta'";
$query3=mysqli_query($con,$sql3);
if($query1 and $query3){
    Header("Location: prestamosAl.php");

}else {
}
?>