<?php
include '../comunes/permisos.php';

$title = "ASISPLUS | Instructores";

ob_start(); 
?>
     <?php 
        include '../comunes/preloader.php'; 
    ?>
    <div class='container-fluid px-4'>
    <div class='title-content mb-4'>
        <h1 class='mt-4 text-left fs-4'>Asignar instructor</h1>
    </div>
        <div class='container-fluid px-3 mb-5 cont-instructor'>
            <form action="../php/registro-instructor.php" method="post">
                <div class='row'>
                    <div class='col col-lg-6 mt-4'>
                        <?php 
                            include '../php/item_5.php'; 
                        ?>
                    </div>
                    <div class='col col-lg-6 mt-4'>
                        <?php 
                            include '../php/item_6.php'; 
                        ?>
                    </div>
                </div>
                <div class='mt-4'>
                    <center>
                        <button type='submit' class='btn btn-success btn-usuario btn-sm fs-7'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="margin-right: 10px;" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                            Registrar
                        </button>
                    </center>
                </div>
            </form>
        </div>
        <?php
            include '../comunes/alerta-success.php';
        ?>
    <div class="cont-table mb-4">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre de instructor</th>
                    <th>Ficha</th> 
                    <th>Acciones</th> 
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '../php/registro-de-instructor.php'; 
                ?>
            </tbody>
        </table>   
    </div>
                   

<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>