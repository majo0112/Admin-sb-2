<?php

require_once "db.php";

$query = "SELECT id, descripcion FROM sub_item WHERE id_item = 2"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<label for='tipo_documento'>Tipo de documento*</label>";
    echo "<select class='form-select' name='tipo_documento' required>";
    echo "<option value=''>Seleccione</option>";

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
