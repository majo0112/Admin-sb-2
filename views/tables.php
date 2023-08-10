<?php
include '../comunes/permisos.php';

$title = "SENA | Administrar de usuarios";

ob_start(); 
?>
    <div class='container-fluid px-4'>
        <div class='title-content'>
            <h1 class='mt-4 text-center'>Administrar usuarios</h1>
        </div>
        <div class='card mb-4 row'>
            <div class='card-body'>
                <form action="../php/registro.php" method="post">
                    <div class='row'>
                        <div class='col col-lg-6'>
                            <label for='tipoDocumento'>Tipo de documento</label>
                            <select class='form-select' name='tipo_documento' required>
                                <option value=''>
                                    Seleccione
                                </option>
                                <option value='Tarjeta de identidad'>
                                    Tarjeta de identidad
                                </option>
                                <option value='Cedula de cuidadania'>
                                    Cedula de cuidadania
                                </option>
                            </select>
                        </div>
                        <div class='col col-lg-6'>
                            <label for='numero_documento'>
                                Número de documento
                            </label>
                            <input
                                type='number'
                                name='numero_documento'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>
                            <label for='nombre'>
                                Nombre
                            </label>
                            <input
                                type='text'
                                name='nombre'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>
                            <label for='apellidos'>
                                Apellidos
                            </label>
                            <input
                                type='text'
                                name='apellidos'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>
                            <label for='correo'>
                                Correo
                            </label>
                            <input
                                type='email'
                                name='correo'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>
                            <label for='telefono'>
                                Teléfono
                            </label>
                            <input
                                type='number'
                                name='telefono'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>
                            <label for='rol'>Rol</label>
                            <select class='form-select' name='rol' required>
                                <option value=''>
                                    Seleccione un rol
                                </option>
                                <option value='Aprendiz'>
                                    Aprendiz
                                </option>
                                <option value='Instructor'>
                                    Instructor
                                </option>
                            </select>
                        </div>
                        <div class='col col-lg-6'>
                            <label for='password'>
                                Contraseña
                            </label>
                            <input
                                type='password'
                                name='password'
                                class='form-control'
                                required
                            />
                        </div>
                    </div>
                    <div class='mt-4'>
                        <center>
                            <button type='submit' class='btn btn-success'>Registrar usuario</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
        <div class='card mb-4'>
            <div class='card-header'>
                <i class='fas fa-table me-1'></i>
                Usuarios registrados
            </div>
            <div class='card-body'>
                <table id='datatablesSimple'>
                    <thead>
                        <tr>
                            <th>Tipo de documento</th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            include '../php/registro-de-usuarios.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>

        