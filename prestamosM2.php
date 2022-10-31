<?php
    include("conexionDB.php");
    $con=conectar();

    $sql="SELECT *  FROM inventario";
    $query=mysqli_query($con,$sql);

    $slq2="SELECT * FROM solicitante_docente";
    $query2=mysqli_query($con,$sql);
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
        <input required class="form-control mb-3" name="nombreMaestro" placeholder="Nombre del docente">   
        <input required class="form-control mb-3" name="carreraMaestro" placeholder="Carrera del docente">
        <input required class="form-control mb-3" name="telMeastro" type="tel" placeholder="(Código de área) Número">
        <input required class="form-control mb-3" name="idHerramienta" placeholder="Clave de la herramienta">
        <input required class="form-control mb-3" name="nombreHerramienta" placeholder="Nombre de la herramienta">
        <input required class="form-control mb-3" name="cantidadHerramienta" type="number" placeholder="Cantidad a prestar">
        <input required class="form-control mb-3" name="fechaPrestamo" type="date" placeholder="Fecha de prestamo">
        <input required class="form-control mb-3" name="fechaDevolucion" type="date" placeholder="Fecha de devolucion">
                                    
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
                                while($row=mysqli_fetch_array($query2)){     
                                
                                ?>
                                <tr>
                                    <th><?php echo $row['cla']?></th>
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