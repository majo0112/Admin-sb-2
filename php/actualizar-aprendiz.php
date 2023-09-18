<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $id = $_POST["id"];
    $id_persona = $_POST["id_persona"];
    $id_ficha = $_POST["id_ficha"]; 
    $id_estado = $_POST["estado"]; 

    require_once "db.php";

    
    $sql = "UPDATE aprendiz SET id_persona = ?, id_ficha = ?, estado = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);
    

    if ($stmt) {
       
        $stmt->bind_param("iiii", $id_persona, $id_ficha, $id_estado, $id);

      
        if ($stmt->execute()) {
            header("Location: ../views/aprendices.php");
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


