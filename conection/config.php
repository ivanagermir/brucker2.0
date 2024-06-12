<?php
$servername = "localhost"; // Cambia esto si tu servidor no está en localhost
$username = "root";
$password = "admin";
$dbname = "bd_de_prueba";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
