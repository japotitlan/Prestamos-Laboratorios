<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>PrestamosP</title>
</head>
<body>

    <header>
        <h1>PRESTAMO DE HERRAMIENTA/EQUIPO DE ITSPP</h1>
    </header>
    
    <main class="container at-5">
        <div class="row">
            <div class="col-md-3">
                <h2>Ingresar Datos</h2>
                <form action="" method="POST">
                    
                    <input class="form-control mb-3" type="text" name="idPrestamo" placeholder="Id del prestamo" required>
                    <input class="form-control mb-3" type="text" name="idHerramienta" placeholder="Clave de la herramienta" required>
                    <input class="form-control mb-3" type="text" name="nombreHerramienta" placeholder="Nombre de la herramienta" required>
                    <input class="form-control mb-3" type="number" name="cantidadHerramienta" placeholder="Cantidad a prestar" min ="1" required>
                    <input class="form-control mb-3" type="text" name="nombrePersonal" placeholder="Nombre del personal" required>
                    <label>Selecciona Un Area</label>
                    <select name="areaPersonal">
                        <option>Seguridad</option>
                        <option>Mantenimiento</option>
                        <option>Limpieza</option>
                    </select><br><br>
                    <input class="form-control mb-3" type="tel"  name="telPersonal" placeholder="Número del personal" pattern="[0-9]{10}" required>
                    <label>Fecha De Prestamo:</label>
                    <input class="form-control mb-3" type="date" name="fechaPrestamo"  placeholder="Fecha de prestamo" required>
                    <input class="btn btn-primary" type="submit" name="boton" value="Solicitar">

                </form>
            </div>
            <div class="col-md-8">

            </div>
            
        </div>
        
    </main>
    
</body>
</html>