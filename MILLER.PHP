<?php
$serverName = "LAPTOP-45J7ACNQ\SQLEXPRESS"; // Nombre de tu servidor
$connectionOptions = array(
    "Database" => "Star Miller", // Nombre de la base de datos
    "CharacterSet" => "UTF-8"
);

// Usar autenticación de Windows, por lo que no es necesario incluir usuario y contraseña
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("❌ Error en la conexión: " . print_r(sqlsrv_errors(), true));
}
?>
