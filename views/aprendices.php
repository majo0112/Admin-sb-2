<?php
include '../comunes/permisos.php';

$title = "SENA | Aprendices";

ob_start(); 
?>
    <div class='container-fluid px-4'>
    <div class='title-content mb-4'>
        <h1 class='mt-4 text-center fs-3'>Asignar ficha a aprendices</h1>
    </div>
        <div class='container-fluid px-3 mb-5'>
            <form action="../php/registro-aprendiz.php" method="post">
                <div class='row'>
                    <div class='col col-lg-6'>
                        <?php 
                            include '../php/item_7.php'; 
                        ?>
                    </div>
                    <div class='col col-lg-6'>
                        <?php 
                            include '../php/item_6.php'; 
                        ?>
                    </div>
                    <div class='col col-lg-6'>
                        <?php 
                            include '../php/item_03.php'; 
                        ?>
                    </div>
                </div>
                <div class='mt-4'>
                    <center>
                        <button type='submit' class='btn btn-success btn-usuario'>
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px;" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                            Agregar
                        </button>
                    </center>
                </div>
            </form>
        </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Aprendices 
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre de aprendiz</th>
                        <th>Ficha</th>
                        <th>Estado</th>
                        <th>Acciones</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../php/registro-de-aprendiz.php'; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
                   

<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>