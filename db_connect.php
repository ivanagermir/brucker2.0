<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "bd_de_prueba";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

