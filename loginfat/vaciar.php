<?php
$id= $_POST["id"];
$conexion= mysqli_connect("localhost","root","","travelmanatan") or exit ("no se puede conectar.....");
$eliminar = "DELETE FROM travelmanatan1 WHERE id=$id";
mysqli_query($conexion,$eliminar);

?>