<?php

require_once "db.php";

$query = "SELECT id, nombre_programa FROM programa WHERE estado = 5"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
    
    echo "<select class='form-select form-select-sm' aria-label='Small select example' name='id_programa' required id='select-programa'>";
    echo "<option value=''disabled selected>Programa*</option>";

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

