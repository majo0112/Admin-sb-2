<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/estilo-views.css" rel="stylesheet" />
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favico-16x16.png">
        <link rel="manifest" href="../assets/img/site.webmanifest">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="login-page background-container">
    
            <main>
    <div class="container">
        <div class="row justify-content-between align-items-center" style="height: 100vh;">
            <div class="col-lg-5">
         
                    <div class="card-body">
                        <?php
                        include '../comunes/alertas.php';
                        ?>
                        <form action="../php/validacion.php" method="post">
                            <div class="form-floating mb-3 text-secondary fs-6">
                                <input class="form-control" id="inputEmail" type="email" name="correo" placeholder="name@example.com" />
                                <label for="inputEmail">Correo*</label>
                            </div>
                            <div class="form-floating mb-3  text-secondary fs-6">
                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                <label for="inputPassword">Contraseña*</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0 ">
                            <button type="submit" class="btn btn-success btn-login fs-6 w-100">Ingresar</button>
                            </div>
                            <div class="alert alert-warning alert-dismissible fade show mt-4 fs-6" role="alert">
                            <strong>¿Problemas con tu usuario?</strong> Por favor contactanos en mail@gmail.com
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </form>
                    </div>
                
            </div>
            <div class="col-lg-6 mb-5" id="color-titulo">
                <h2 class="text-center mb-3 fw-lighter fs-1">Bienvenido(a)</h2>
                <h2 class="text-center mb-3 fw-lighter fs-1">al sistema</h2>
                <h2 class="text-center fw-bold mb-3 fs-1 bold-font ">DE ASISTENCIAS</h2>
                <div class="card-header text-center mt-5">
                <img src="../assets/img/logo-api.png" alt="Logo" class="logo-app" style="width: 200px;">   
                </div>
            </div>
        </div>
    </div>
</main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>   
        <script src='../js/nav.js'></script>         
    </body>
</html>


