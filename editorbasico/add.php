<?php
	include('conn.php');

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$imagen=$_POST['imagen'];

	mysqli_query($conn,"insert into `user` (nombre,apellido,telefono,imagen) values ('$nombre','$apellido','$telefono','$imagen')");
	header('location:princ.php');

?>