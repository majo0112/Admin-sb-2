<?php

require_once "db.php";

$query = "SELECT id, nombre_programa FROM programa WHERE estado = 5"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<label for='id_programa'>Programa*</label>";
    echo "<select class='form-select' name='id_programa' required>";
    echo "<option value=''>Seleccione</option>";

    while ($row = $result->fetch_assoc()) {
        $id = $row['id']; 
        $programa = $row['nombre_programa'];
        echo "<option value='$id'>$programa</option>"; 
    }

    echo "</select>";
} else {
    echo "No se encontraron programas activos.";
}

?>
