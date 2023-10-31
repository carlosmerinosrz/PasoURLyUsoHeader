<?php
require 'configdb.php';

$conexion = new mysqli(SERVIDOR, USUARIO, CONTRASENIA, BBDD);
if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
}
$ip = $_GET['ip'];
echo "SE VA A BORRAR LA FILA CON LA IP " .$ip;
$conexion->close();
?>
