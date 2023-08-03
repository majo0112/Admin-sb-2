<?php
// Iniciar sesión
session_start();

// Verificar si no existe la variable de sesión 'email' o está vacía
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Si no ha iniciado sesión, redirigir al formulario de inicio de sesión o a la página de inicio
    header('Location: ../views/login.php');
    exit;
}
?>








