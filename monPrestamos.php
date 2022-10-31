<?php
    include("conexionDB.php");
    $con=conectar();
    $sql1="SELECT *  FROM solicitantes_alumnos";
    $sql2="SELECT *  FROM solicitantes_docente";
    $sql3="SELECT *  FROM solicitantes_personal";
    $query1=mysqli_query($con,$sql1);
    $query2=mysqli_query($con,$sql2);
    $query3=mysqli_query($con,$sql3);
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <script language="Javascript">
	function imprSelec(nombre) {
	  var ficha = document.getElementById(nombre);
	  var ventimp = window.open(' ', 'popimpr');
	  ventimp.document.write( ficha.innerHTML );
	  ventimp.document.close();
	  ventimp.print( );
	  ventimp.close();
	}
	</script>
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
    <div class="divi">
        <button class="contenedorB"; href="javascript:imprSelec('seleccion')"; >Imprimir texto</button>
        <button class="contenedorB">Regresar</button>
    </div>
    <div class="container at-5" style="text-align: center; margin-top:5%">
        <div class="row">
           <div class="col-md-8" id="seleccion">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_prestamo</th>
                                        <th>id_usuario</th>
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
                                        <th>fechaDevolucion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row=mysqli_fetch_array($query1)){     
                                
                                ?>
                                <tr>
                                    <th><?php echo $row['id_prestamo']?></th>
                                    <th><?php echo $row['id_usuario']?></th>
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
                                    <th><?php echo $row['fechaDevolucion']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['clave'] ?>" class="btn btn-info">Devolver</a></th>
                               
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>

                            </table>
/*segunda tabla docente*/
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_prestamo</th>
                                        <th>id_usuario</th>
                                        <th>lab</th>
                                        <th>id_herramienta</th>
                                        <th>nombreHerramienta</th>
                                        <th>cantidad</th>
                                        <th>nombre</th>
                                        <th>carrera</th>
                                        <th>celular</th>
                                        <th>fechaEntrega</th>
                                        <th>fechaDevolucion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row=mysqli_fetch_array($query2)){     
                                
                                ?>
                                <tr>
                                    <th><?php echo $row['id_prestamo']?></th>
                                    <th><?php echo $row['id_usuario']?></th>
                                    <th><?php echo $row['lab']?></th>
                                    <th><?php echo $row['id_herramienta']?></th>
                                    <th><?php echo $row['nombreHerramienta']?></th>
                                    <th><?php echo $row['cantidad']?></th>
                                    <th><?php echo $row['nombre']?></th>
                                    <th><?php echo $row['carrera']?></th>
                                    <th><?php echo $row['celular']?></th>
                                    <th><?php echo $row['fechaEntrega']?></th>
                                    <th><?php echo $row['fechaDevolucion']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['clave'] ?>" class="btn btn-info">Devolver</a></th>
                               
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>

                            </table>

                            /*segunda tabla personal*/
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_prestamo</th>
                                        <th>id_usuario</th>
                                        <th>lab</th>
                                        <th>id_herramienta</th>
                                        <th>nombreHerramienta</th>
                                        <th>cantidad</th>
                                        <th>area</th>
                                        <th>nombre</th>
                                        <th>celular</th>
                                        <th>fechaEntrega</th>
                                        <th>fechaDevolucion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row=mysqli_fetch_array($query3)){     
                                
                                ?>
                                <tr>
                                    <th><?php echo $row['id_prestamo']?></th>
                                    <th><?php echo $row['id_usuario']?></th>
                                    <th><?php echo $row['lab']?></th>
                                    <th><?php echo $row['id_herramienta']?></th>
                                    <th><?php echo $row['nombreHerramienta']?></th>
                                    <th><?php echo $row['cantidad']?></th>
                                    <th><?php echo $row['area']?></th>
                                    <th><?php echo $row['nombre']?></th>
                                    <th><?php echo $row['celular']?></th>
                                    <th><?php echo $row['fechaEntrega']?></th>
                                    <th><?php echo $row['fechaDevolucion']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['clave'] ?>" class="btn btn-info">Devolver</a></th>
                               
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