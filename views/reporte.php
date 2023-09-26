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
        <h1 class='mt-4 text-center fs-3'>Reportes</h1>
    </div>
        <div class='container-fluid px-3 mb-5'>
            <form action="" method="post">
                <div class='row'>

                    <div class='col col-lg-6 mb-4'>
                        <?php 
                            include '../php/item_6.php'; 
                        ?>
                    </div>
                </div>
                <div class='mt-4'>
                    <center>
                        <button type='submit' class='btn btn-success btn-usuario'>
                            Obtener reporte
                        </button>
                    </center>
                </div>
            </form>
        </div>
        <?php
            include '../comunes/alerta-success.php';
        ?>
    <div class="card mb-4">
        <div class="card-header text-center ">
            Reporte de asistencias
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
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