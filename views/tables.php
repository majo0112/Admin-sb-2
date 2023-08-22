<?php
include '../comunes/permisos.php';

$title = "SENA | Administrar usuarios";

ob_start(); 
?>
    <div class='container-fluid px-4'>
        <div class='title-content mb-4'>
            <h1 class='mt-4 text-center fs-3'>Administrar usuarios</h1>
        </div>
            <div class='container-fluid px-3 mb-5'>
                <form action="../php/registro.php" method="post">
                    <div class='row'>
                        <div class='col col-lg-6'>
                            <label for='tipoDocumento'>Tipo de documento*</label>
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
                                Número de documento*
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
                                Nombre*
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
                                Apellidos*
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
                                Correo*
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
                                Teléfono*
                            </label>
                            <input
                                type='number'
                                name='telefono'
                                class='form-control'
                                required
                            />
                        </div>
                        <div class='col col-lg-6'>
                            <label for='rol'>Rol*</label>
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
                                Contraseña*
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
                Usuarios registrados
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Tipo de documento</th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Rol</th>
                            <th>Opciones</th> 
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
           
<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>

        