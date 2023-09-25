<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["id_persona"]) && is_array($_POST["id_persona"])) {
      
        $id_ficha = $_POST["id_ficha"];
        $id_estado = $_POST["estado"];

        require_once "db.php";

        foreach ($_POST["id_persona"] as $id_persona) {
            $sql = "INSERT INTO aprendiz (id_persona, id_ficha, estado) 
                    VALUES ('$id_persona', '$id_ficha', '$id_estado')";

            if ($conn->query($sql) !== TRUE) {
                echo "Error al insertar aprendiz: " . $conn->error;
                break; 
            }
        }

        $conn->close();

        header("Location: ../views/aprendices.php?success=4");
        exit();
    } else {
        echo "Por favor, seleccione al menos un aprendiz.";
    }
}
?>  