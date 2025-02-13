<?php
include "../conexion.php";
$query = $conn->query("SELECT * FROM areas ORDER BY nombre ASC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Áreas de la Entidad</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Áreas Funcionales</h2>
    <a href="agregar.php">Agregar nueva área</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Fecha de creación</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['fecha_creacion'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar esta área?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
