<?php
include '../comunes/permisos.php';

$title = "SENA | Servicio Nacional de Aprendizaje";

ob_start(); 
?>
    <div class='container-fluid px-4'>
        <div class='title-content'>
            <h1 class='mt-4 password-center'>Cambiar contraseña</h1>
        </div>
        <div class='card mb-4 row'>
            <div class='card-body'>
                    <?php

                    include '../comunes/alertas.php';
                    ?>
                <form action="../php/cambiar_contraseña.php" method="post">
                    <div class='row'>
                        <div class='col col-lg-6'>
                            <label for='contraseña_actual'>
                                Contraseña actual
                            </label>
                            <input
                                type='password'
                                name='contraseña_actual'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>
                            <label for='nueva_contraseña'>
                                Nueva contraseña
                            </label>
                            <input
                                type='password'
                                name='nueva_contraseña'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>
                            <label for='confirmar_contraseña'>
                                Confirmar nueva contraseña
                            </label>
                            <input
                                type='password'
                                name='confirmar_contraseña'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6 mt-4'>     
                            <button type='submit' class='btn btn-success'>Cambiar contraseña</button>                                    
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