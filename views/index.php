<?php
include '../comunes/permisos.php';

$title = "ASISPLUS | Sistema de asistencias";

ob_start(); 
?>
     <?php 
        include '../comunes/preloader.php'; 
    ?>
   <div class="container-fluid px-4 text-center d-flex flex-column align-items-center justify-content-center mt-5">
        <h1 class="fw-bold">Hola, <?php echo $_SESSION['nombre']; ?>.</h1>
        <h2>Bienvenido(a) a </h2>
        <img src="../assets/img/logo-app.png" alt="Logo" class="logo-app mt-5" style="width: 210px;">
    </div>

<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>

