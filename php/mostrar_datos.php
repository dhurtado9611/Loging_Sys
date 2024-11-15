<?php
// Incluir la conexión a la base de datos
include 'conexion.php';

// Realizar la consulta
$sql = "SELECT * FROM usuarios";
$result = $conn->query(query: $sql);

// Comprobar si se obtuvieron resultados
if ($result->num_rows > 0) {
    echo "Base de datos MySql";
    // Crear una tabla HTML para mostrar los datos
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>NOMBRE</th><th>CORREO</th><th>CONTRASENA</th><th>FECHA</th></tr>"; // Encabezados de la tabla

    // Mostrar los datos en la tabla
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre_usuario"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password_hash"] . "</td>";
        echo "<td>" . $row["fecha_creacion"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

} else {
    echo "No se encontraron registros.";
}

// Botón para volver al índice
echo "<br><a href='http://localhost/login_system/index.html'><button>Cerrar Sesion</button></a>";
// Botón para editar
echo "<br><a href=''><button>Editar</button></a>";
// Cerrar la conexión
$conn->close();
?>
