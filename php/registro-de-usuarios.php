<?php
require_once "db.php";

$sql = "SELECT r.id, s.descripcion AS tipo_documento, r.numero_documento, r.nombre, 
r.apellidos, r.correo, r.telefono, s2.descripcion AS rol
FROM register r
JOIN sub_item s ON r.tipo_documento = s.id
JOIN sub_item s2 ON r.rol = s2.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $contador = 1 ;

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $contador . "</td>";
        echo "<td>" . $row['tipo_documento'] . "</td>";
        echo "<td>" . $row['numero_documento'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellidos'] . "</td>";
        echo "<td>" . $row['correo'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['rol'] . "</td>";

        echo "<td>";
        echo '<div class="d-flex justify-content-center">';
        echo "<a href='../php/editar-usuario.php?id=" . $row['id'] . "' class='btn btn-success btn-edit w-40  fs-7 btn-sm mx-1'>Editar<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'><path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/><path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/></svg></a>";
        echo "<button type='button' class='btn btn-danger fs-7 w-40 btn-borrar btn-sm mx-1 deleteButton' data-bs-toggle='modal' data-bs-target='#deleteModal' data-bs-user-id='{$row['id']}'>Eliminar<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'><path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/></svg></button>";
        echo '</div>';

        echo "</td>";

        

        echo "</tr>";

        $contador++;
        
    }
} else {
    echo "<tr><td colspan='7'>No hay registros</td></tr>";
}

$conn->close();
?>





