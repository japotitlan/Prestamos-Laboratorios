<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Prestamos Sistema</title>
</head>
<body>
    <header>
        <h1>Sistema De Prestamos De Herramienta ITSPP</h1>
    </header>

    <form class="contenedor" action="controlador_login.php" method="post">
        <img src="logos/logo-tecnm.png" alt="Logo Tecnm">
        <div class="unidad">
            <label>Usuario</label><br>
            <input type="text" name="usuario" required>
        </div>
        <div class="unidad">
            <label>Contraseña</label><br>
            <input type="password" name="contraseña" required>
        </div>
        <input class="contenedorB" type="submit" name="btningresar" value="Iniciar Sesión">
    </form>
</body>
</html>