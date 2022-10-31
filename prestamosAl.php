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
            <input type="text" class="form-control mb-3" name="tool_id" placeholder="clave">
            <input type="text" class="form-control mb-3" name="nameH" placeholder="nombre">
            <input type="text" class="form-control mb-3" name="des" placeholder="descripcion">
            <input type="text" class="form-control mb-3" name="lab" placeholder="laboratorio">
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