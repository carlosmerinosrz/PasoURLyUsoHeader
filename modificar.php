<?php
require 'configdb.php';

$conexion = new mysqli(SERVIDOR, USUARIO, CONTRASENIA, BBDD);
if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
}
$ip = $_GET['ip'];
$nombre = $_GET['nombre'];
echo "SE VA A MODIFICAR LA CIUDAD " .$nombre. " CON LA IP " .$ip;
$conexion->close();
?>
