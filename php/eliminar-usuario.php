
<?php
session_start();


if (!isset($_SESSION['correo']) || empty($_SESSION['correo'])) {
    header('Location: ../views/login.php');
    exit;
}

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: ../views/tables.php?error=InvalidID');
    exit;
}

require_once "db.php";


$userId = $_GET['id'];

$sql = "DELETE FROM register WHERE id = $userId";

if ($conn->query($sql) === TRUE) {

    header('Location: ../views/tables.php?success=UserDeleted');
    exit;
} else {

    header('Location: ../views/tables.php?error=DeleteError');
    exit;
}
?>
