<?php
include 'conexion.php'; // Incluye el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];

    // Inserta los datos en la base de datos
    $query = "INSERT INTO Mensajes (nombre, mensaje) VALUES (?, ?)";
    $params = array($nombre, $mensaje);
    $stmt = sqlsrv_query($conn, $query, $params);

    // Verifica si la inserción fue exitosa
    if ($stmt) {
        echo "✅ Mensaje enviado con éxito.";
    } else {
        echo "❌ Error al guardar el mensaje: " . print_r(sqlsrv_errors(), true);
    }
}
?>
