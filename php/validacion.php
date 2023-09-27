<?php
require_once "db.php";

$correo = $_POST['correo'];
$password = $_POST['password'];

$correo = $conn->real_escape_string($correo);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM register WHERE correo='$correo' AND rol = 2";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
  
    if (password_verify($password, $row['password'])) {
      
        session_start();
        $_SESSION['correo'] = $correo;
        $_SESSION['nombre'] = $row['nombre'];
        
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



