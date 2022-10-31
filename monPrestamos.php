<?php
    include("conexionDB.php");
    $con=conectar();

    $sql="SELECT *  FROM inventario";
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
    <title>Inventario</title>
  </head>
  <body>
    <header style="color: white; font-size: 36px; text-align: center; font-family: monospace; background-color: rgb(26, 26, 123); ">
    TECNM PRESTAMO DE HERRAMIENTA/EQUIPO</header>
    <div class="container at-5" style="text-align: center; margin-top:5%">
        <div class="row">
           <div class="col-md-3">
            <h1>Ingresar datos</h1>
            <form action="insertar.php" method="POST">
            <input type="text" class="form-control mb-3" name="tool_id" placeholder="id_prestamo">
            <input type="date" class="form-control mb-3" name="des" placeholder="fecha de devolucion">
                                    
            <button style="background-color: rgb(13, 110, 253); color:white; border-radius: 5px; border: 1px solid white; font-size: 20px;" type="submit">Actualizar</button>
            </form>

           </div>
           <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>matricula</th>
                                        <th>nombreAlumno</th>
                                        <th>semestre</th>
                                        <th>carrera</th>
                                        <th>celular</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row=mysqli_fetch_array($query)){     
                                
                                ?>
                                <tr>
                                    <th><?php echo $row['clave']?></th>
                                    <th><?php echo $row['nombreHerramienta']?></th>
                                    <th><?php echo $row['lab']?></th>
                                    <th><?php echo $row['descripcion']?></th>
                                    <th><?php echo $row['cantidad']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['clave'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['clave'] ?>" class="btn btn-danger">Eliminar</a></th> 
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