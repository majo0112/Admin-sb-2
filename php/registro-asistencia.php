<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $id_persona = $_POST["id_persona"];
    $asistencias = $_POST["asistencias"];
    
    date_default_timezone_set('America/Bogota');
    $hora = date('H:i:s');
    $fecha = date('Y-m-d'); 

    require_once "db.php";

   
    $consulta_ficha = "SELECT id_ficha FROM aprendiz WHERE id_persona = ?";
    
    $stmt_ficha = $conn->prepare($consulta_ficha);
    $stmt_ficha->bind_param("i", $id_persona);
    
    if ($stmt_ficha->execute()) {
        $stmt_ficha->bind_result($id_ficha);
        $stmt_ficha->fetch();
        $stmt_ficha->close(); 
        
      
        $sql = "INSERT INTO asistencia (id_persona, id_ficha, hora, fecha, asistencias) VALUES (?, ?, ?, ?, ?)";
    
        $stmt = $conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("iisss", $id_persona, $id_ficha, $hora, $fecha, $asistencias);
    
            if ($stmt->execute()) {
                header("Location: ../views/asistencia.php");
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
    
    $conn->close();
}
?>
