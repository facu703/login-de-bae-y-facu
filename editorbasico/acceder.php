<?php
session_start();
$usuario_session = $_POST['usuario'];
$password_session = $_POST['pass'];

if($usuario_session=='admin' && $password_session=='admin1234') {
    $_SESSION['administrador'] = $usuario_session;
    header("Location: admin.php#session");
} else {
    header("Location: admin.php?error_s#session");
}
?>