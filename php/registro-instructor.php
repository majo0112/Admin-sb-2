<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $id_persona = $_POST["id_persona"];
    $id_ficha = $_POST["id_ficha"]; 

    require_once "db.php";

    $sql = "INSERT INTO instructor (id_persona, id_ficha) 
    VALUES ('$id_persona', '$id_ficha')"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/instructores.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>  

