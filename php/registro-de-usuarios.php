<?php

require_once "../php/db.php";

$sql = "SELECT * FROM register ORDER BY nombre DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['tipo_documento'] . "</td>";
        echo "<td>" . $row['numero_documento'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellidos'] . "</td>";
        echo "<td>" . $row['correo'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['rol'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay registros</td></tr>";
}

$conn->close();
?>

