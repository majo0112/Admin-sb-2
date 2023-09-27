<?php

require_once "db.php";

$query = "SELECT id, descripcion FROM sub_item WHERE id_item = 2"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<select class='form-select form-select-sm' aria-label='Small select example' name='tipo_documento' required>";
    echo "<option value=''disabled selected>Tipo de Documento*</option>";

    while ($row = $result->fetch_assoc()) {
        $id = $row['id']; 
        $descripcion = $row['descripcion'];
        echo "<option value='$id'>$descripcion</option>"; 
    }

    echo "</select>";
} else {
    echo "No se encontraron tipos de documento.";
}

?>
