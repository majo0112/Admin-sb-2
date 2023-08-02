
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <meta name='description' content='' />
    <meta name='author' content='' />
    <title>Administrar Usuarios</title>
    <link href='https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css' rel='stylesheet' />
    <link href='../css/styles.css' rel='stylesheet' />
    <script src='https://use.fontawesome.com/releases/v6.3.0/js/all.js' crossorigin='anonymous'></script>
</head>

<body class='sb-nav-fixed'>
    <nav class='sb-topnav navbar navbar-expand navbar-dark bg-dark'>
        <button class='btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0' id='sidebarToggle' href='#!'>
            <i class='fas fa-bars'></i>
        </button>
        <div class='d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0'></div>
        <ul class='navbar-nav ms-auto ms-md-0 me-3 me-lg-4'>
            <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' id='navbarDropdown' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                    <i class='fas fa-user fa-fw'></i>
                </a>
                <ul class='dropdown-menu dropdown-menu-end' aria-labelledby='navbarDropdown'>
                    <li>
                        <a class='dropdown-item' href='php/logout.php'>Cerrar sesión</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id='layoutSidenav'>
        <div id='layoutSidenav_nav'>
            <nav class='sb-sidenav accordion sb-sidenav-dark' id='sidenavAccordion'>
                <div class='sb-sidenav-menu'>
                    <nav class='nav'>
                        <a class='nav-link' href='../views/index.html'>
                            <div class='sb-nav-link-icon'><i class='fas fa-tachometer-alt'></i></div>
                            Inicio
                        </a>
                    </nav>
                </div>
            </nav>
        </div>
        <div id='layoutSidenav_content'>
            <main>
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
                                    <div class='col'>
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

                                        require_once "../php/db.php";

                                        $sql = "SELECT * FROM register ORDER BY nombre DESC";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['tipo_documento'] . "</td>";
                                                echo "<td>" . $row['numero_documento'] . "</td>";
                                                echo "<td>" . $row['nombre'] . "</td>";
                                                echo "<td>" . $row['apellidos'] . "</td>";
                                                echo "<td>" . $row['correo'] . "</td>";
                                                echo "<td>" . $row['telefono'] . "</td>";
                                                echo "<td>" . $row['rol'] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'>No hay registros</td></tr>";
                                        }

                                        $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' crossorigin='anonymous'></script>
    <script src='../js/scripts.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js' crossorigin='anonymous'></script>
    <script src='../js/datatables-simple-demo.js'></script>
</body>
</html>

        