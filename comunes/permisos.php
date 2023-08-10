<?php

session_start();


if (!isset($_SESSION['correo']) || empty($_SESSION['correo'])) {
   
    header('Location: ../views/login.php');
    exit;
}
?>









