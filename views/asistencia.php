<?php
include '../comunes/permisos.php';

$title = "SENA | Asistencia";

ob_start(); 
?>
    <div class='container-fluid px-4'>
    <div class='title-content mb-4'>
        <h1 class='mt-4 text-center fs-3'>Asistencias</h1>
    </div>
        <div class='container-fluid px-3 mb-5'>
            <form action="../php/registro-asistencia.php" method="post">
                <div class='row'>
                    <div class='col col-lg-6'>
                        <?php 
                            include '../php/item_07.php'; 
                        ?>
                    </div>
                 
                    <div class='col col-lg-6'>
                        <?php 
                            include '../php/item_8.php'; 
                        ?>
                    </div>
                </div>
                <div class='mt-4'>
                    <center>
                        <button type='submit' class='btn btn-success btn-usuario'>
                            Registrar
                        </button>
                    </center>
                </div>
            </form>
        </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Regristro de Asistencias
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre de aprendiz</th>
                        <th>Ficha</th> 
                        <th>Entrada/Salida</th>
                        <th>hora</th>   
                        <th>Fecha</th>
                        <th>Acciones</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../php/registro-de-asistencias.php'; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
                   

<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>