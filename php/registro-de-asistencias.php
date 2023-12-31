<?php
require_once "db.php";

$sql = "SELECT a.id, a.hora, a.fecha, r.nombre, r.apellidos,
f.alias AS id_ficha, s.descripcion AS asistencias
FROM asistencia a
INNER JOIN register r ON a.id_persona = r.id
INNER JOIN fichas f ON a.id_ficha = f.id
INNER JOIN sub_item s ON a.asistencias = s.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $contador = 1 ;
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $contador . "</td>";
        echo "<td>" . $row['nombre']  . ' ' . $row['apellidos'] . "</td>";
        echo "<td>" . $row['id_ficha'] . "</td>";
        echo "<td>" . $row['asistencias'] . "</td>";
        echo "<td>" . $row['hora'] . "</td>";
        echo "<td>" . $row['fecha'] . "</td>";

        echo "<td>";
        echo '<div class="d-flex justify-content-center">';
        echo "<button type='button' class='btn btn-danger fs-7 w-40 btn-borrar btn-sm mx-1 deleteButtonAsistencia' data-bs-toggle='modal' data-bs-target='#deleteModalAsistencia' data-bs-asistencia-id='{$row['id']}'>Eliminar<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'><path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/></svg></button>";
        echo "</div>";
        echo "</td>";
        
        echo "</tr>";

        $contador++;
        
    }
} else {
    echo "<tr><td colspan='7'>No hay registros</td></tr>";
}

$conn->close();
?>