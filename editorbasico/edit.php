<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Nombre:</label><input type="text" value="<?php echo $row['nombre']; ?>" name="nombre">
		<label>Apellido:</label><input type="text" value="<?php echo $row['apellido']; ?>" name="apellido">
		<label>Telefono:</label><input type="int" value="<?php echo $row['telefono']; ?>" name="telefono">
		<label>Imagen:</label><input type="text" value="<?php echo $row['imagen']; ?>" name="imagen">
		<input type="submit" name="submit">
		<a href="princ.php">Back</a>
	</form>
</body>
</html>