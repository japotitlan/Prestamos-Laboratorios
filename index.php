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
    <div>
        <h1>Sistema De Prestamos De Herramienta ITSPP</h1>
    </div>

    <form class="contenedor" action="controlador_login.php" method="post">
        <div class="texto">
            <label>Usuario</label><br>
            <input type="text" name="usuario" required>
        </div>
        <div class="texto">
            <label>Contraseña</label><br>
            <input type="password" name="contraseña" required>
        </div>
        <input type="submit" name="btningresar" value="Iniciar Sesión">
    </form>
</body>
</html>