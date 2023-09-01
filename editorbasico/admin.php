<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section>
    <h2>SESSION</h2>
    <form action="acceder.php" method="POST">
        <input type="text" name="usuario" placeholder="usuario">
        <input type="password" name="pass" placeholder="contraseña">
        <input type="submit" value="Acceder">
    </form>
    <?php if(isset($_SESSION['administrador'])) { ?>
    <div id="contenido_admin">
        <h2>contenido para Administrador</h2>
        <p>Se aseguran de que los datos están disponibles para la empresa pero no son accesibles a personas no autorizadas. <br>
            Puede añadir o modificar usuarios en cada nivel en el que tenga permiso. Para eliminar usuarios, debe tener el rol Administrador a nivel de cuenta.
            <p><a href="princ.php">Acceder</a></p>
        </p>
        
        <p><a href="salir.php">salir</a></p>
    </div>
    <?php } ?>
</section>

</body>
</html>
