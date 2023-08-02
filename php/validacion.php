<?php

require_once "db.php";

$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];


$sql = "SELECT * FROM users WHERE email='$email' AND rol='$rol'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
  
    if (password_verify($password, $row['password'])) {
        
    
        header("Location: ../views/index.php");
        exit();
    } else {
        header("Location: ../views/login.php?error=1");
        exit();
    }
} else {
    header("Location: ../views/login.php?error=2");
    exit();
}

$conn->close();
?>

