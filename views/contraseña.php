<?php
include '../comunes/permisos.php';

$title = "SENA | Servicio Nacional de Aprendizaje";

ob_start(); 
?> 
     <?php 
        include '../comunes/preloader.php'; 
    ?>
    <div class='container-fluid px-4'>
        <div class='title-content'>
            <h1 class='mt-4 password-center text-center mb-4'>Cambiar Contraseña</h1>
        </div>
        <div class='card mb-4 row'>
            <div class='card-body'>
                    <?php

                    include '../comunes/alertas.php';
                    ?>
                <form action="../php/cambiar_contraseña.php" method="post">
                    <div class='row'>
                        <div class='col col-lg-6 mb-4'>
                            <input
                                type='password'
                                name='contraseña_actual'
                                class='form-control'
                                placeholder='Contraseña actual'
                                required
                            />
                        </div>
                        <div class='col col-lg-6 mb-4'>
                            <input
                                type='password'
                                name='nueva_contraseña'
                                class='form-control'
                                placeholder='Nueva contraseña'
                                required
                            />
                        </div>
                        <div class='col col-lg-6 mb-4'>
                            <input
                                type='password'
                                name='confirmar_contraseña'
                                class='form-control'
                                placeholder='Confirmar nueva contraseña'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>     
                            <button type='submit' class='btn btn-success btn-usuario'>Cambiar</button>                                    
                        </div>
                    </div>             
                </form>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>  