<?php
include '../comunes/permisos.php';

$title = "ASISPLUS | Reportes";

ob_start(); 
?>
     <?php 
        include '../comunes/preloader.php'; 
    ?>
    <div class='container-fluid px-4'>
    <div class='title-content mb-4'>
        <h1 class='mt-4 text-left fs-4'>Reportes</h1>
    </div>
        <div class='container-fluid px-3 mb-5 cont-form'>
            <form action="" method="post">
                <div class='row'>

                    <div class='col col-lg-6 mb-4 mx-auto text-center'>
                        <?php 
                            include '../php/item_6.php'; 
                        ?>
                    </div>
                </div>
                <div class='mt-2'>
                    <center>
                        <button type='submit' class='btn btn-success btn-sm btn-reporte fs-7'>
                            Obtener reporte
                        </button>
                    </center>
                </div>
            </form>
        </div>
        <?php
            include '../comunes/alerta-success.php';
        ?>
    <div class="cont-table mb-4">
        <div>
            <table id="datatablesSimple"  class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Número documento</th>
                        <th>Nombre de aprendiz</th>
                        <th>Entrada</th>
                        <th>Salida</th>   
                        <th>Fecha</th>
                        <th>Asitencias</th>
                        <th>Inasistencias</th>
                        <th>Acciones</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../php/registro-de-reporte.php'; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    
    <?php
   
    include '../comunes/exportar-excel.php'; 
    
    ?>
  
<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>