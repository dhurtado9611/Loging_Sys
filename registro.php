<?php
// Asegúrate de que este archivo esté en la misma carpeta o ajusta la ruta
include 'php/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtén los datos del formulario
    $nombre_usuario = $_POST['nombre_usuario'];
    $email = $_POST['email'];
    $password_hash = $_POST['password_hash'];

    // Encriptar la contraseña
    //$contrasena_hash = password_hash(password: $password_hash, algo: PASSWORD_DEFAULT);

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre_usuario, email, password_hash) 
            VALUES ('$nombre_usuario', '$email', '$password_hash')";

    if ($conn->query(query: $sql) === TRUE) {
        echo "Nuevo usuario registrado correctamente";
        header(header: "Location: php/mostrar_datos.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
// Cerrar la conexión
$conn->close();
?>
