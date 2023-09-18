<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $id = $_POST["id"];
    $nombre_programa = $_POST["nombre_programa"];
    $estado_id = $_POST["estado"]; 
    
    require_once "db.php";
    $sql = "UPDATE programa SET nombre_programa = '$nombre_programa', estado = '$estado_id' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/curso.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>