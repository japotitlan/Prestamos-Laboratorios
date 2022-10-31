<!<?php
include("conexionDB.php");
$con=conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>PRESTAMO DE HERRAMIENTA/EQUIPO A DOCENTES</h1>
    <div>
        <form>
        <h2>INGRESE LOS DATOS</h2><br>
        <p>Ingresa correctamente los datos solicitados</p><br>
        <input required name="nombreMaestro" placeholder="Nombre del docente">
        <input required name="carreraMaestro" placeholder="Carrera del docente">
        <input required name="telMeastro" type="tel" placeholder="(Código de área) Número">
        <input required name="idHerramienta" placeholder="Clave de la herramienta">
        <input required name="nombreHerramienta" placeholder="Nombre de la herramienta">
        <input required name="cantidadHerramienta" type="number" placeholder="Cantidad a prestar">
        <input required name="fechaPrestamo" type="date" placeholder="Fecha de prestamo">
        <input required name="fechaDevolucion" type="date" placeholder="Fecha de devolucion">
        <input type="submit" name="enviarDatos">
        </form>
    </div>

    <div>
        <table>
            <br><br><br>
          <!--Esta es una fila--> 
          <tr>
            <th>idHerramienta</th>
            <th>nombreHerramienta</th>
            <th>cantidadHerramienta</th>
            
          </tr>
            <tr>
                <!--Esto es una columna-->
                <td>columna1</td>
                <td>columna2</td>
                <td>fechaDevolucion</td>
            </tr>

        </table>
    </div>

    <div>
        <br><br>
    <button>Regresar al menu</button>
    </div>
  
</body>
</html>-->