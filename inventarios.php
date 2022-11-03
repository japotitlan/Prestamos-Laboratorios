<?php
    include("conexionDB.php");
    $con=conectar();
    

    session_start();
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
    <title>Inventario</title>
  </head>
  <body>
    <div class="container at-5">
        <div class="row">
           <div class="col-md-3">
            <h1>Ingresar datos</h1>
            <form action="insertar.php" method="POST">
            <input type="text" class="form-control mb-3" name="tool_id" placeholder="clave">
            <input type="text" class="form-control mb-3" name="nameH" placeholder="nombre">
            <input type="text" class="form-control mb-3" name="des" placeholder="descripcion">
            <input type="number" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                                    
            <input type="submit" class="btn btn-primary">
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
                                    <th><?php echo $row['descripcion']?></th>
                                    <th><?php echo $row['lab']?></th>
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
    <div class="divi" >
    <form action="encargadosmain.php">  
        <button class="contenedorB" >Regresar</button>
        </form>
        
    </div>
    
  </body>
  </html>