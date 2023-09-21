<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero_documento = $_POST["numero_documento"];
    $asistencias = $_POST["asistencias"];

    date_default_timezone_set('America/Bogota');
    $hora = date('H:i:s');
    $fecha = date('Y-m-d'); 

    require_once "db.php";

   
    $consulta_id_persona = "SELECT id FROM register WHERE numero_documento = ?";
    
    $stmt_id_persona = $conn->prepare($consulta_id_persona);
    $stmt_id_persona->bind_param("s", $numero_documento);
    
    if ($stmt_id_persona->execute()) {
        $stmt_id_persona->bind_result($id_persona);
        $stmt_id_persona->fetch();
        $stmt_id_persona->close(); 

        
        $consulta_ficha = "SELECT id_ficha FROM aprendiz WHERE id_persona = ?";
    
        $stmt_ficha = $conn->prepare($consulta_ficha);
        $stmt_ficha->bind_param("i", $id_persona);
    
        if ($stmt_ficha->execute()) {
            $stmt_ficha->bind_result($id_ficha);
            $stmt_ficha->fetch();
            $stmt_ficha->close(); 
        
            
            $sql = "INSERT INTO asistencia (id_persona, id_ficha, hora, fecha, asistencias) 
            VALUES (?, ?, ?, ?, ?)";
    
            $stmt = $conn->prepare($sql);
    
            if ($stmt) {
                $stmt->bind_param("iisss", $id_persona, $id_ficha, $hora, $fecha, $asistencias);
    
                if ($stmt->execute()) {
                    header("Location: ../views/asistencia.php?success=5");
                    exit();
                } else {
                    echo "Error al registrar: " . $stmt->error;
                }
    
                $stmt->close(); 
                
            } else {
                echo "Error en la preparación de la consulta: " . $conn->error;
            }
        } else {
            echo "Error al obtener la ficha del aprendiz: " . $stmt_ficha->error;
        }
    } else {
        echo "Error al obtener el ID de la persona: " . $stmt_id_persona->error;
    }
    
    $conn->close();
}
?>

