<?php
require_once "db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $aprendizId = $_GET['id'];

    $sql = "DELETE FROM aprendiz WHERE id = $aprendizId";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../views/aprendices.php?success=UserDeleted');
        exit;
    } else {
        header('Location: ../views/aprendices.php?error=DeleteError');
        exit;
    }
} else {
    header('Location: ../views/aprendices.php?error=InvalidID');
    exit;
}

$conn->close();
?>
