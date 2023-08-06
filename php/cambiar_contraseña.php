<?php

require_once "db.php";

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $contraseñaActual = $_POST['contraseña_actual'];
    $nuevaContraseña = $_POST['nueva_contraseña'];
    $confirmarContraseña = $_POST['confirmar_contraseña'];

    
    if ($nuevaContraseña !== $confirmarContraseña) {
        header("Location: ../views/contraseña.php?error=3");
        exit();
    }

   
    $email = $_SESSION['email'];

   
    $sql = "SELECT password FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $contraseñaAlmacenada = $row['password'];

    
        if (password_verify($contraseñaActual, $contraseñaAlmacenada)) {
            
            $nuevaContraseñaHash = password_hash($nuevaContraseña, PASSWORD_DEFAULT);

            
            $sqlUpdate = "UPDATE users SET password='$nuevaContraseñaHash' WHERE email='$email'";
            if ($conn->query($sqlUpdate) === TRUE) {
                echo '<div class="alert alert-success" role="alert">Contraseña cambiada exitosamente.</div>';
                header("Location: ../views/index.php?mensaje=contraseña_cambiada");
                exit();
            } else {
                header("Location: ../views/contraseña.php?error=4");
                exit();
            }
        } else {
            
            header("Location: ../views/contraseña.php?error=5");
            exit();
        }
    } else {
        
        header("Location: ../views/contraseña.php?error=2");
        exit();
    }
}
?>
