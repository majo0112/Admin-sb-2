<?php
include '../comunes/permisos.php';

$title = "SENA | Cursos";

ob_start(); 
?>
                <div class='container-fluid px-4'>
                    <div class='title-content'>
                        <h1 class='mt-4 text-center'>Administrar cursos</h1>
                    </div>
                    <div class='card mb-4 row'>
                        <div class='card-body'>
                            <form action="../php/registro-curso.php" method="post">
                                <div class='row'>
                                    <div class='col col-lg-6'>
                                        <label for='tipoDocumento'>Ficha de caracterización</label>
                                        <input
                                            type='number'
                                            name='ficha'
                                            class='form-control'
                                            required
                                        />
                                    </div>
                                    <div class='col col-lg-6'>
                                        <label for='numero_documento'>
                                            Programa de formación
                                        </label>
                                        <input
                                            type='text'
                                            name='nombre_programa'
                                            class='form-control'
                                            required
                                        />
                                    </div>
                                    <div class='col col-lg-6'>
                                        <label for='nombre'>
                                            Aprendiz
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
                                            Instructor
                                        </label>
                                        <input
                                            type='text'
                                            name='nombre'
                                            class='form-control'
                                            required
                                        />
                                    </div>
                                    <div class='col col-lg-6'>
                                        <label for='estado'>Estado</label>
                                        <select class='form-select' name='estado' required>
                                            <option value=''>
                                                Seleccione estado
                                            </option>
                                            <option value='Matriculado'>
                                               Matriculado
                                            </option>
                                            <option value='Retiro voluntario'>
                                                Retiro voluntario
                                            </option>
                                            <option value='Cancelado'>
                                                Cancelado 
                                            </option>
                                            <option value='En proceso'>
                                                En proceso
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class='mt-4'>
                                    <center>
                                        <button type='submit' class='btn btn-success'>Registrar</button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class='card mb-4'>
                        <div class='card-header'>
                            <i class='fas fa-table me-1'></i>
                            Cursos registrados
                        </div>
                        <div class='card-body'>
                            <table id='datatablesSimple'>
                                <thead>
                                    <tr>
                                        <th>Ficha de caracterización</th>
                                        <th>Programa de formación</th>
                                        <th>Aprendiz</th>
                                        <th>Instructor</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                        
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