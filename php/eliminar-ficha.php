<?php
require_once "db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $fichaId = $_GET['id'];

    $sql = "DELETE FROM fichas WHERE id = $fichaId";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../views/fichas.php?success=UserDeleted');
        exit;
    } else {
        header('Location: ../views/fichas.php?error=DeleteError');
        exit;
    }
} else {
    
    header('Location: ../views/fichas.php?error=InvalidID');
    exit;
}

$conn->close();
?>