<?php

require_once "db.php";

$query = "SELECT descripcion FROM sub_item WHERE id_item = 1"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<label for='rol'>Rol*</label>";
    echo "<select class='form-select' name='rol' required>";
    echo "<option value=''>Seleccion un rol</option>";

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