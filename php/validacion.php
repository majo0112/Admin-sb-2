<?php

require_once "db.php";

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
  
    if (password_verify($password, $row['password'])) {
        
    
        header("Location: /views/index.html");
        exit();
    } else {
        header("Location: /views/login.php?error=1");
        exit();
    }
} else {
    header("Location: /views/login.php?error=2");
    exit();
}

$conn->close();
?>

