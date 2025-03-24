<?php
include 'conexion.php';

// Consulta para obtener los mensajes
$query = "SELECT nombre, mensaje, fecha FROM Mensajes ORDER BY fecha DESC";
$stmt = sqlsrv_query($conn, $query);

if ($stmt) {
    echo "<div class='list-group'>";
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<div class='list-group-item'>";
        echo "<h5>" . htmlspecialchars($row['nombre']) . "</h5>";
        echo "<p>" . htmlspecialchars($row['mensaje']) . "</p>";
        echo "<small>" . $row['fecha']->format('Y-m-d H:i:s') . "</small>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "❌ Error al cargar los mensajes: " . print_r(sqlsrv_errors(), true);
}
?>
