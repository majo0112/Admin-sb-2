<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $nombre_programa = $_POST["nombre_programa"];
    $estado_id = $_POST["estado"]; 

    require_once "db.php";

    $sql = "INSERT INTO programa (nombre_programa, estado) 
    VALUES ('$nombre_programa', '$estado_id')"; 

    if ($conn->query($sql) === TRUE) {

        $_SESSION['successMessage'] = "¡Registro exitoso!";
        $_SESSION['successCase'] = 1; 
        header("Location: ../views/curso.php");
        
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

