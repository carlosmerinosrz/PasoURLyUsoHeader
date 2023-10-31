<?php
if (isset($_GET['opc'])) {
    $opcion = $_GET['opc'];
    
    if ($opcion === 'borrar') {
        echo "ESTOY EN LA OPCION BORRAR";
        header('location:borrar.php?ip=' . $_GET['ip']);
    } elseif ($opcion === 'modificar') {
        echo "ESTOY EN LA OPCION MODIFICAR";
        $ip = $_GET['ip'];
        $nombre = $_GET['nombre'];
        $descripcion = $_GET['descripcion'];
        echo $ip;
        echo $nombre;
        echo $descripcion;
        header('location:modificar.php?ip=' . $ip. "&nombre=" . $nombre. "&descripcion=" . $descripcion);
    }
}
?>
