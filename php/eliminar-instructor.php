<?php
require_once "db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $instructorId = $_GET['id'];

    $sql = "DELETE FROM instructor WHERE id = $instructorId";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../views/instructores.php?success=UserDeleted');
        exit;
    } else {
        header('Location: ../views/instructores.php?error=DeleteError');
        exit;
    }
} else {
    header('Location: ../views/instructores.php?error=InvalidID');
    exit;
}

$conn->close();
?>