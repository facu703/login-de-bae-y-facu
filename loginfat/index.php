<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur vero voluptatum aliquid dicta, ullam aliquam tempore, temporibus fuga sequi sunt eligendi odit reiciendis iste velit? Perspiciatis quaerat dolorum non culpa.</p>
        <p><a href="salir.php">salir</a></p>
        <p><a href="welcome.php">ingresar a su base de datos</a></p>
    </div>
    <?php } ?>
</section>

</body>
</html>
