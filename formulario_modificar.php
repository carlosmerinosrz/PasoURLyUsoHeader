<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Jesuitas</title>
</head>
<body>
    <h1>CRUD de Jesuitas</h1>
    <!-- Formulario para Actualizar Jesuita -->
    <h2>Actualizar Jesuita</h2>
    <?php $ip = $_GET['ip']; 
        $nombre = $_GET['nombre'];
        $descripcion = $_GET['descripcion'];
    ?>
    <form action="modificar.php" method="GET">
        <input type="text" name="ip" value="<?php echo $ip; ?>"> 
        <label for="nuevoNombre">Nuevo Nombre</label>
        <input type="text" name="lugar" value="<?php echo $nombre; ?>" required>
        <label for="nuevaDescripcion">Nueva Descripcion:</label>
        <input type="text" name="descripcion" value="<?php echo $descripcion; ?>">
        <input type="submit" name="enviar" value="Actualizar Lugar">
    </form>
</body>
</html>
