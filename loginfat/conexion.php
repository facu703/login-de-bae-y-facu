<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];

$conexion = mysqli_connect("localhost","root","","travelmanatan") or exit("no s pudo conectar...");

$insertar = "INSERT INTO travelmanatan1 VALUES (NULL,'$nombre','$apellido','$telefono','$email')";

mysqli_query($conexion,$insertar) or exit ("nose si guarda");
echo "consulta envianda";
header("welcome.php");
?>