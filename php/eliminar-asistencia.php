<?php
require_once "db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $asistenciaId = $_GET['id'];

    $sql = "DELETE FROM asistencia WHERE id = $asistenciaId";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../views/asistencia.php?success=UserDeleted');
        exit;
    } else {
        header('Location: ../views/asistencia.php?error=DeleteError');
        exit;
    }
} else {
    
    header('Location: ../views/asistencia.php?error=InvalidID');
    exit;
}

$conn->close();
?>