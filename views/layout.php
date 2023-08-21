
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title><?php echo $title; ?></title>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="../css/estilos-layout.css" rel="stylesheet" />
<link href="../css/styles.css" rel="stylesheet" />
<link href="../css/estilos.css" rel="stylesheet" />
<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&family=Roboto:wght@300;200;100&display=swap" rel="stylesheet">
<link rel="manifest" href="../assets/img/site.webmanifest">
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">

   

    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand ps-3" href="../views/index.php">
        <img src="../assets/img/logo.png" alt="Logo" width="100" height="auto" class="ms-5">
        </a>  
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <!-- Navbar Search-->
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                    </div>
                </form>
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span  class="fw-normal fs-5" style="margin-left: 20px;"><?php echo $_SESSION ['nombre']; ?></span>
                        <i class="fas fa-user fa-fw"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="../views/contraseña.php">
                                 <i class="fas fa-lock"></i>    
                                 <span style="margin-left: 10px;">Cambiar Clave</span>      
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" id="logoutButton">
                                <span style="margin-right: 10px;">Cerrar sesión</span>  
                                <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </li>
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

            <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link text-secondary mt-5" href="../views/curso.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Cursos
                            </a>
                            <a class="nav-link  text-secondary mt-1" href="../views/tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                               Usuarios
                            </a>
                        </div>
                    </div>                  
                </nav>
            </div>
        
        <div id="layoutSidenav_content">
            <main>

            <?php echo $content; ?>

            </main>
            
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src='../js/scripts.js'></script>
    <script src='../js/nava-link.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src='../js/datatables-simple-demo.js'></script>
    <script src="../comunes/modal.js"></script>
</body>
</html>



    
 