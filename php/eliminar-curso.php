<?php
require_once "db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $userId = $_GET['id'];

    $sql = "DELETE FROM programa WHERE id = $userId";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../views/curso.php?success=UserDeleted');
        exit;
    } else {
        header('Location: ../views/curso.php?error=DeleteError');
        exit;
    }
} else {
    
    header('Location: ../views/curso.php?error=InvalidID');
    exit;
}

$conn->close();
?>