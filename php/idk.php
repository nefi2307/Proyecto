<?php
require 'conexion.php';

// Obtener el valor de numAsiento desde el formulario
$numAsiento = $_POST['numAsiento'];

// Consulta SQL para insertar el valor en la base de datos (ajusta la consulta según tu esquema)
$sql = "INSERT INTO nombre_de_tabla (nombre_de_columna) VALUES ('$numAsiento')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
