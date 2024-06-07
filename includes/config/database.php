<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "brucker_crud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
