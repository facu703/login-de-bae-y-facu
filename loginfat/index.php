<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>TravelManatan</title>
</head>
<body>

    <h1>Travel Manatan</h1>
    <div id="header">
        <ul class="nav">
            <li><a href="formulario.php">FORMULARIO</a></li>
            <li><a href="borrar.php">BORRAR</a></li>
            <li><a href="login.php">LOGIN</a></li>
        </ul>
    </div>

    


    <!--conexcion de datos-->
<?php
$conexion = mysqli_connect("localhost", "root","", "travelmanatan")or exit ("no se puedo conectar...");
$consulta = mysqli_query($conexion, "SELECT * FROM travelmanatan1");
while ($lista = mysqli_fetch_assoc($consulta)){
?>
<div class="lista">
	<h4> <?php echo $lista["nombre"];?> </h4>
	<h4> <?php echo $lista["apellido"];?> </h4>
	<h4> <?php echo $lista["telefono"];?> </h4>
	<h4> <?php echo $lista["email"];?> </h4>
</div>
<?php };
?>

<?php
$consulta_foto = mysqli_query($conexion, "SELECT * FROM fotostravel");
while ($lista_foto = mysqli_fetch_assoc($consulta_foto)){
?>
<div>
	<h4> <?php echo $lista["descripcion"];?> </h4>
	<img class="foto" style="width:500px" src="<?php echo $lista_foto["url_foto"];?>">
</div>
<?php };
?>


</body>
</html>