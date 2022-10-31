<?php 
    include("conexionDB.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM inventario WHERE clave='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="clave" value="<?php echo $row['clave']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="lab" placeholder="laboratorio" value="<?php echo $row['lab']  ?>">
                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="herramienta" value="<?php echo $row['descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad" value="<?php echo $row['cantidad']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>