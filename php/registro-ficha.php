<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $id_programa = $_POST["id_programa"];
    $ficha = $_POST["ficha"]; 
    $alias = $_POST["alias"];
    $id_estado = $_POST["estado"];

    require_once "db.php";

    $sql = "INSERT INTO fichas (id_programa, ficha, alias, estado) 
    VALUES ('$id_programa', '$ficha', '$alias', '$id_estado')"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/fichas.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>  