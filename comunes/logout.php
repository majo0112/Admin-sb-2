<?php
// Iniciar sesión
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir al formulario de inicio de sesión o a la página de inicio
header('Location: ../views/login.php');
exit;
?>



