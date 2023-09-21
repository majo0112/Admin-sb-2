<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $id_persona = $_POST["id_persona"];
    $id_ficha = $_POST["id_ficha"]; 
    $id_estado = $_POST["estado"]; 

    require_once "db.php";

    $sql = "INSERT INTO aprendiz (id_persona, id_ficha, estado) 
    VALUES ('$id_persona', '$id_ficha', '$id_estado')"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/aprendices.php?success=4");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>  