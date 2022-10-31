<?php
include("conexionDB.php");
$con=conectar();

$idP=$_POST['id_prestamo'];
$lab=$_POST['lab'];
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
VALUES ('$idP','$lab','$id_H','$nomH','$cantidad','$mat','$nmA','$sem','$carr','$cel','$fchE')";
$query1= mysqli_query($con,$sql1);

if($query1){
    Header("Location: prestamosAl.php");

}else {
}
?>