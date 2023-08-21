<?php
include '../comunes/permisos.php';

$title = "SENA | Cursos";

ob_start(); 
?>
                <div class='container-fluid px-4'>
                    <div class='title-content'>
                        <h1 class='mt-4 text-center'>Administrar cursos</h1>
                    </div>
                   
           
<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>