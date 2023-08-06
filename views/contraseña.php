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
<body class="sb-nav-fixed">
                <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-3" href="../views/index.php"></a>
               
                <!-- Navbar Search-->
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#" id="logoutButton">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

              <!-- Modal -->
              <div class="modal" id="logoutModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirmar Cierre de Sesión</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>¿Estás seguro de que deseas cerrar sesión?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="logoutConfirmButton">Cerrar sesión</button>
                        </div>
                    </div>
                </div>
            </div>

    <div id='layoutSidenav'>
        <div id='layoutSidenav_nav'>
            <nav class='sb-sidenav accordion sb-sidenav-dark' id='sidenavAccordion'>
                <div class='sb-sidenav-menu'>
                    <nav class='nav'>
                        <a class='nav-link' href='../views/index.php'>
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
            </main>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' crossorigin='anonymous'></script>
    <script src='../js/scripts.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js' crossorigin='anonymous'></script>
    <script src='../js/datatables-simple-demo.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="../comunes/modal.js"></script>
</body>
</html>