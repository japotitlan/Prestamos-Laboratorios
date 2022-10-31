<?php
include("conexionDB.php");
$con=conectar();
echo "Conexion Exitosa Papirri";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrestamosA</title>
</head>
<body style="background-color: white;">
    <div>
        <header style="color: white; font-size: 36px; text-align: center; font-family: monospace; background-color: rgb(26, 26, 123); ">
            TECNM PRESTAMO DE HERRAMIENTA/EQUIPO
        </header>
    </div>

    <div style="font-family: monospace; ">
        <form style="margin:0px auto; " action="encargadosmain.html" >
            <div style="background-color: rgb(148, 28, 28); color: white;">
                <h2 style="background-color: black;  text-align: center;">Filtros</h2>
                <div style="padding: 20px; padding-top: 5px; text-align: center;">
                    <label style="font-size: 16px;">Buscar: </label>
                    <input name="buscador" placeholder="Buscar">
                    <button style="border: 1px solid #d1d5db; border-radius: 2px; position: relative;">Buscar</button>
                    <br><br>
                    <button style="border: 1px solid #d1d5db; border-radius: 2px; position: relative;">Home</button>
         
                    
                </div>
            </div>
        </form>
    </div>
    
    <div style="display: flex;">
        <!-- Left content -->
        <div style="flex: 1; font-family: monospace; ">
            <form style="margin:0px auto; padding-left: 100px;">
                <div style="background-color: rgb(19, 19, 19); color: white; width: 325px; height:  325px; padding-left: 30px;">
                    <h2 style="background-color: #000;">Solicitud de Prestamo de Alumnos</h2>
                    <label style="font-size: 20px;">Datos del Alumno:</label><br>
                    <label style=" padding-right: 10px; ">Matricula:</label>
                    <input style="margin-bottom: 5px;border: 1px solid #d1d5db; border-radius: 0.25rem; position: relative;" type="number" name="Matricula" placeholder="Matricula del Alumno" required><br>
                    <label style=" padding-right: 10px; ">Nombre:</label>
                    <input style="margin-bottom: 5px; border: 1px solid #d1d5db; border-radius: 0.25rem; position: relative;" type="text" name="Alumno" placeholder="Nombre completo" required><br>
                    <label>Carrera:</label>
                    <input style="margin-bottom: 5px; border: 1px solid #d1d5db; border-radius: 0.25rem; position: relative;" type="text" name="Carrera" placeholder="Carrera" required><br>
                    <label>Semestre:</label>
                    <input style="margin-bottom: 5px; border: 1px solid #d1d5db; border-radius: 0.25rem; position: relative;" type="text" name="Semestre" placeholder="Semestre" required><br>
                    <label>Telefono:</label>
                    <input style="margin-bottom: 5px; border: 1px solid #d1d5db; border-radius: 0.25rem; position: relative;" type="tel" name="Tel."placeholder="638-xxx" required><br>
                    <label>Datos de herramienta:</label><br>
                    <input style="margin-bottom: 5px; border: 1px solid #d1d5db; border-radius: 0.25rem; position: relative;" name="idHerramienta" placeholder="Clave de la herramienta" required>
                    <input style="margin-bottom: 5px; border: 1px solid #d1d5db; border-radius: 0.25rem; position: relative;" type = "number"name="cantidad" placeholder="cantidad" required><br>
    
                     <button style="border: 1px solid #d1d5db; border-radius: 0.25rem; position: relative;">Solicitar</button>
      
                </div>
                              </form>
        </div>
    
        <!-- Right content -->
        <div style="flex: 1;" style=" text-align: center; ">
        <div style="background-color: rgb(19, 19, 19); color: white; width: 380px; height:  325px; margin-left: 125px;">
            <h2 style="text-align: center; font-family: monospace; background-color: #000; ">Inventario Disponible</h2><br>
            <table style="text-align: center; margin:0px auto; font-family: monospace;">
              <!--Esta es una fila--> 
              <tr style="padding: 8px; border: 1px solid #000; background-color: rgb(26, 26, 123); color:white">
                
                
                <th style="padding: 8px; border: 1px solid #000;">Clave</th>
                <th style="padding: 8px; border: 1px solid #000;">Laboratorio</th>
                <th style="padding: 8px; border: 1px solid #000;">Nombre</th>
                <th style="padding: 8px; border: 1px solid #000;">Cantidad</th>
                <th style="padding: 8px; border: 1px solid #000;">Estado</th>
                
              </tr style="padding: 8px; border: 1px solid #000;">
              
              <?php
              $sql="SELECT * from invetario"; 
              $result =mysqli_query($con,$sql);
              while($mostrar=mysqli_fetch_array($result)){
              ?>
                <tr style="padding: 8px; border: 1px solid #000;">
                    <!--Esto es una columna-->
                    <td style="padding: 8px; border: 1px solid #000;"><?php echo $mostrar['clave'] ?></td>
                    <td style="padding: 8px; border: 1px solid #000;"><?php echo $mostrar['lab'] ?></td>
                    <td style="padding: 8px; border: 1px solid #000;"><?php echo $mostrar['descripcion'] ?></td>
                    <td style="padding: 8px; border: 1px solid #000;"><?php echo $mostrar['cantidad'] ?></td>
                    <td style="padding: 8px; border: 1px solid #000;"><?php echo $mostrar['estado'] ?></td>

                </tr>
                <?php
            }
            ?>
    
            </table>
        </div>
            
        </div>
    </div>


  
</body>
</html>