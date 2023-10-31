<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitas de Jesuitas</title>
    <style>
        body {
            font-family: arial;
        }
        table {
            border: 2px solid black;
            border-collapse: collapse;
            margin: auto;
        }
        tr, td, th {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
        require 'configdb.php';

        $conexion = new mysqli(SERVIDOR, USUARIO, CONTRASENIA, BBDD);
        if ($conexion->connect_error) {
            die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
        }

        $sql = "SELECT ip, lugar, descripcion FROM lugar";
        $resultado = $conexion->query($sql);
    ?>
    <table>
        <tr>
            <!--<th>IP</th>-->
            <th>NOMBRE DEL LUGAR</th>
            <th>BORRAR</th>
            <th>MODIFICAR</th>
        </tr>
        <?php
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                    /*echo "<td>" . $fila['ip'] . "</td>";*/
                    echo "<td>" . $fila['lugar'] . "</td>";
                    echo "<td><a href='procesos.php?opc=borrar&ip=" . $fila['ip'] . "' target='_blank'>BORRAR</a></td>";
                    echo "<td><a href='procesos.php?opc=modificar&ip=" . $fila['ip'] . "&nombre=" . $fila['lugar'] . "&descripcion=" . $fila['descripcion'] . "' target='_blank'>MODIFICAR</a></td>";

                echo "</tr>";
            }
        ?>
    </table>
    <a href="../crear_lugar.html" target="_blank">CREAR UN LUGAR</a>
    <?php
        $conexion->close();
    ?>
</body>
</html>
