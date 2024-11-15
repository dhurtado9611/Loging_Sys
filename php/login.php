<?php
session_start();
include 'conexion.php';

// Obtener los datos del formulario
$email = $_POST['email'];
$password_hash = $_POST['password_hash'];

// Consulta para verificar el usuario
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password_hash = '$password_hash'";
$result = $conn->query(query: $sql);

if ($result->num_rows > 0) {
    // Usuario encontrado
    $_SESSION['usuario'] = $email;
    // Redirigir a otra página después del inicio de sesión
    header(header: "Location: mostrar_datos.php");
    exit();

} else {
    // Usuario no encontrado
    echo "Nombre de usuario o contraseña incorrectos.";
}
$conn->close();
?>
