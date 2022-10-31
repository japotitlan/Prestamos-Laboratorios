<?php
    include("conexionDB.php");
    $con=conectar();
    $sql1="SELECT *  FROM solicitantes_alumnos";
    $query1=mysqli_query($con,$sql1);
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Inventario</title>
  </head>
  <body>
  <header>
    TECNM PRESTAMO DE HERRAMIENTA/EQUIPO</header>
    <div style="text-align: center; margin-top:2%">
        <div class="row" style="margin-left: 0%;">
           <div class="col-md-3">
            <h1>Ingresar datos</h1>
            <form action="insertAL.php" method="POST">
            <input type="number" class="form-control mb-3" name="id_prestamo" placeholder="ID">
            <input type="text" class="form-control mb-3" name="lab" placeholder="Laboratorio">
            <input type="number" class="form-control mb-3" name="id_herramienta" placeholder="ID Herramienta">
            <input type="text" class="form-control mb-3" name="nombreHerramienta" placeholder="Nombre Herramienta">
            <input type="number" class="form-control mb-3" name="cantidad" placeholder="cantidad">
            <input type="number" class="form-control mb-3" name="matricula" placeholder="matricula">
            <input type="text" class="form-control mb-3" name="nombreAlumno" placeholder="nombreAlumno">
            <input type="text" class="form-control mb-3" name="semestre" placeholder="semestre">
            <input type="text" class="form-control mb-3" name="carrera" placeholder="carrera">
            <input type="number" class="form-control mb-3" name="celular" placeholder="celular">
            <input type="date" class="form-control mb-3" name="fechaEntrega">
            <input type="submit" class="btn btn-primary">
            </form>

           </div>
           <div class="col-md-8">
           <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_prestamo</th>
                                        <th>lab</th>
                                        <th>id_herramienta</th>
                                        <th>nombreHerramienta</th>
                                        <th>cantidad</th>
                                        <th>matricula</th>
                                        <th>nombreAlumno</th>
                                        <th>semestre</th>
                                        <th>carrera</th>
                                        <th>celular</th>
                                        <th>fechaEntrega</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row=mysqli_fetch_array($query1)){     
                                
                                ?>
                                <tr>
                                    <th><?php echo $row['id_prestamo']?></th>
                                    <th><?php echo $row['lab']?></th>
                                    <th><?php echo $row['id_herramienta']?></th>
                                    <th><?php echo $row['nombreHerramienta']?></th>
                                    <th><?php echo $row['cantidad']?></th>
                                    <th><?php echo $row['matricula']?></th>
                                    <th><?php echo $row['nombreAlumno']?></th>
                                    <th><?php echo $row['semestre']?></th>
                                    <th><?php echo $row['carrera']?></th>
                                    <th><?php echo $row['celular']?></th>
                                    <th><?php echo $row['fechaEntrega']?></th> 
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>

                            </table>
                        </div>
        </div>

    </div>
    
  </body>
  </html>