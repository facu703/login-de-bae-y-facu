<?php
	include('conn.php');
	$id=$_GET['id'];

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$imagen=$_POST['imagen'];

	mysqli_query($conn,"update `user` set nombre='$nombre', apellido='$apellido', telefono='$telefono', imagen='$imagen' where userid='$id'");
	header('location:princ.php');
?>