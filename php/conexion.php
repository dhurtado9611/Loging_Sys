<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "usuarios_db";

// Crear la conexión
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
?>
