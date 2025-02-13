<?php
$host = "localhost"; // Servidor
$dbname = "pc_care"; // Nombre de tu base de datos
$username = "root"; // Usuario por defecto en XAMPP
$password = "1234"; // Contraseña vacía en XAMPP

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
