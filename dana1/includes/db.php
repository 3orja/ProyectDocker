<?php
$host = 'db';
$user = 'user';
$password = 'password';
$database = 'dana';
$port = 3306;

$conexion = new mysqli($host, $user, $password, $database, $port);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>