<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $id = $_POST["id"];
    $id_ficha = $_POST["id_ficha"];
    $id_persona = $_POST["id_persona"];

    require_once "db.php";

    
    $sql = "UPDATE instructor SET id_ficha = ?, id_persona = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);
    

    if ($stmt) {
       
        $stmt->bind_param("iii", $id_ficha, $id_persona, $id);

      
        if ($stmt->execute()) {
            header("Location: ../views/instructores.php");
            exit();
        } else {
            echo "Error al ejecutar la consulta: " . $stmt->error;
        }

       
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

    $conn->close();
}
?>
