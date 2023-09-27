<?php

require_once "db.php";

$query = "SELECT id, alias FROM fichas"; 

$result = $conn->query($query);

if ($result->num_rows > 0) {
   
    echo "<select class='form-select form-select-sm' aria-label='Small select example' name='id_ficha' required>";
    echo "<option value=''disabled selected>Ficha*</option>";

    while ($row = $result->fetch_assoc()) {
        $id = $row['id']; 
        $alias = $row['alias'];
        echo "<option value='$id'>$alias</option>"; 
    }

    echo "</select>";
} else {
    echo "No se encontraron programas activos.";
}

?>