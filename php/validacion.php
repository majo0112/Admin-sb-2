<?php
require_once "db.php";

$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];

// Asegurarse de que las variables no estén vacías y escaparlas para evitar inyección de SQL
$email = $conn->real_escape_string($email);
$rol = $conn->real_escape_string($rol);

$sql = "SELECT * FROM users WHERE email='$email' AND rol='$rol'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
  
    if (password_verify($password, $row['password'])) {
        // Iniciar sesión y establecer la variable de sesión 'email'
        session_start();
        $_SESSION['email'] = $email;
    
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


