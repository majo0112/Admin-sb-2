<?php
include '../comunes/permisos.php';

$title = "ASISPLUS | Aprendices";

ob_start(); 
?>
     <?php 
        include '../comunes/preloader.php'; 
    ?>
    <div class='container-fluid px-4'>
    <div class='title-content mb-4'>
        <h1 class='mt-4 text-left fs-4'>Ingresar Aprendiz</h1>
    </div>
        <div class='container-fluid px-3 mb-5'>
            <form action="../php/registro-aprendiz.php" method="post">
                    <div class='mb-4'>
                        <?php 
                            include '../php/item_7.php'; 
                        ?>
                    </div>
                <div class='row'>
                    <div class='col col-lg-6 mt-2'>
                        <?php 
                            include '../php/item_6.php'; 
                        ?>
                    </div>
                    <div class='col col-lg-6 mt-2'>
                        <?php 
                            include '../php/item_03.php'; 
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
                            Agregar
                        </button>
                    </center> 
                </div>
            </form>
        </div>
        <?php
            include '../comunes/alerta-success.php';
        ?>
    <div class="cont-table mt-5">
        <table id="datatablesSimple2">
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

    <form action="../comunes/importar-aprendices.php" method="POST" enctype="multipart/form-data">
    <div class="mt-5">
        <label for="fileInput" class="form-label">Seleccionar archivo Excel:</label>
        <input type="file" class="form-control" id="fileInput" name="fileInput" accept=".xlsx">
    </div>
        <button id="importButton" class="btn btn-success btn-importar mt-3 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="margin-right: 10px" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/>
            </svg>
                Importar aprendices desde Excel
        </button>
    </form>


<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>