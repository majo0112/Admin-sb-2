<?php

require_once "db.php";

$query = "SELECT id, descripcion FROM sub_item WHERE id = 6 OR id = 7"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<label for='estado'>Estado*</label>";
    echo "<select class='form-select' name='estado' required>";
    echo "<option value=''>Seleccione</option>";

    while ($row = $result->fetch_assoc()) {
        $id = $row['id']; 
        $descripcion = $row['descripcion'];
        echo "<option value='$id'>$descripcion</option>"; 
    }

    echo "</select>";
} else {
    echo "No se encontraron estados.";
}

?>