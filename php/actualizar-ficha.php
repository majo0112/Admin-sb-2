<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $id = $_POST["id"];
    $ficha = $_POST["ficha"]; 
    $alias = $_POST["alias"];
    $id_estado = $_POST["estado"];

    require_once "db.php";
    $sql = "UPDATE fichas SET ficha = '$ficha', alias = '$alias', estado = '$id_estado' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/fichas.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>