<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Menu</title>
</head>
<body>
    <header>
        <h1>Sistema De Encargados</h1>
    </header>
    
    <main class="contenedor">
        <form class="unidad" action="prestamomain.php">
            <button class="contenedorB">Prestar Herramineta/Equipo</button>
        </form>
    
        <form class="unidad" action="monPrestamos.php" >
            <button class="contenedorB">Revisar prestamos</button>
        </form>
        
        <form class="unidad" action="inventarios.php" >
            <button class="contenedorB">Inventario</button>
        </form>

        <form class="unidad" action="index.php">
            <button class="contenedorB">Cerrar sesion</button>
        </form>
    </main>
</body>
</html>