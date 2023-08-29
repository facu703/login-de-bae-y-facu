<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <form action="welcome.php">
        <button type=´submit´>ATRAS</button>
    </form>
    <h1>ingrese el id de la fila que quiera borrar</h1>
    <form action="vaciar.php" method ="POST" class="row g-3"
    <label for="id">id</label>
    <input name ="id" type = "text" placeholder="Ingrese un id" maxlength="30"
    required>
    <button type="submit" class="btn btn-primary col-md-9 mx-auto" data-bs-toggle="modal"
    data-bs-target="·staticBackdrop">eliminar</button>
</form>

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
<h1>ingrese el id de la fila que quiera borrar</h1>
    <form action="vaciarfoto.php" method ="POST" class="row g-3"
    <label for="id">id</label>
    <input name ="id" type = "text" placeholder="Ingrese un id" maxlength="30"
    required>
    <button type="submit" class="btn btn-primary col-md-9 mx-auto" data-bs-toggle="modal"
    data-bs-target="·staticBackdrop">eliminar</button>
</form>
</body>
</html>