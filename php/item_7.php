<?php

require_once "db.php";

$query = "SELECT id, nombre, apellidos FROM register WHERE rol = 1"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
   
    echo "<select class='form-select' name='id_persona' required>";
    echo "<option value=''disabled selected>Aprendiz*</option>";

    while ($row = $result->fetch_assoc()) {
        $id = $row['id']; 
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $nombreCompleto = $nombre . ' ' . $apellidos; 

        echo "<option value='$id'>$nombreCompleto</option>"; 
    }

    echo "</select>";
} else {
    echo "No se encontraron aprendices registrados.";
}

?>