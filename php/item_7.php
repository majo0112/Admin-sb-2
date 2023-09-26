<?php
require_once "db.php";

$query = "SELECT id, nombre, apellidos FROM register WHERE rol = 1"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo"<div class='card mb-4'>";
    echo"<div class='card-header text-center'>";
    echo"Listado de aprendices"; 
    echo"</div>";
    echo "<div class='card-body'>";
    echo "<table id='datatablesSimple1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>Seleccionar</th>";
    echo "<th scope='col'>Nombre Aprendiz</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        $id = $row['id']; 
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $nombreCompleto = $nombre . ' ' . $apellidos; 

        echo "<tr>";
        echo "<td><input type='checkbox' name='id_persona[]' value='$id'></td>";
        echo "<td>$nombreCompleto</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "No se encontraron aprendices registrados.";
}
?>
