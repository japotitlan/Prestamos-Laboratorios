<?php
    session_start();
    include("conexionDB.php");
    $con=conectar();

    $nombreUsuario= $_SESSION['usuario'];
    $query = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario= '$nombreUsuario'");
    $consulta = mysqli_fetch_array($query);
    $lab = $consulta['laboratorio'];
    
    $sql="SELECT *  FROM inventario where lab = '$lab'";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Prestamos Maestros</title>
</head>
<body>
    <header>
        <h1>PRESTAMO DE HERRAMIENTA/EQUIPO A MAESTROS</h1>
    </header>

    <main class="container at-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresar datos</h1>
            
                <form action="insertarM.php" method="POST">
                    <input class="form-control mb-3" type="text" name="idPrestamo" placeholder="Id del prestamo" required>
                    <input class="form-control mb-3" type="text" name="idHerramienta" placeholder="Clave de la herramienta" required>
                    <input class="form-control mb-3" type="text" name="nombreHerramienta" placeholder="Nombre de la herramienta" required>
                    <input class="form-control mb-3" type="number" name="cantidadHerramienta"  placeholder="Cantidad a prestar" required>
                    <input class="form-control mb-3" type="text" name="nombreMaestro" placeholder="Nombre del docente" required>   
                    <label>Selecciona una carrera</label>
                    <select name="carreraMaestro">
                        <option>ISC</option>
                        <option>Civil</option>
                        <option>Industrial</option>
                        <option>Administración</option>
                    </select>
                    <br><br>
                    <input class="form-control mb-3" type="number" name="telMaestro" placeholder="Número del docente" pattern="[0-9]{10}" required>
                    <label>FECHA DE PRESTAMO</label>
                    <input class="form-control mb-3" type="date" name="fechaPrestamo" placeholder="Fecha de prestamo" required>                         
                    <input class="btn btn-primary" type="submit">
                </form>
           </div>
           <div class="col-md-8">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Clave</th>
                            <th>nombreHerramienta</th>
                            <th>descripcion</th>
                            <th>laboratorio</th>
                            <th>cantidad</th>
                            <th>Prestados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){     
                        ?>
                            <tr>
                                <th><?php echo $row['clave']?></th>
                                <th><?php echo $row['nombreHerramienta']?></th>
                                <th><?php echo $row['descripcion']?></th>
                                <th><?php echo $row['lab']?></th>
                                <th><?php echo $row['cantidad']?></th>
                                <th><?php echo $row['estado']?></th>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <form class="unidad" action="prestamomain.php">  
        <button class="boton">Regresar</button>
    </form>
</body>
</html>