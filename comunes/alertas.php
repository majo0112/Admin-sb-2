<?php

if (isset($_GET['error'])) {
    $errorMessage = "";
    switch ($_GET['error']) {
        case 1:
            $errorMessage = "¡Contraseña incorrecta!";
            break;
        case 2:
            $errorMessage = "¡Usuario no encontrado!";
            break;
        case 3:
            $errorMessage = "¡Las contraseñas no coinciden!";
            break;
        case 4:
            $errorMessage = "¡Error al cambiar la contraseña!";
            break;
        case 5:
            $errorMessage = "¡Contraseña actual incorrecta!";
            break;            
            
        default:
            $errorMessage = "¡Error desconocido!";
            break;
    }

    if ($errorMessage !== "") {
        echo '<div class="alert alert-danger" role="alert">
             '. $errorMessage .'
             </div>';
    }
}

?>

<script>
if (window.location.search.indexOf('error=') > -1) {
    setTimeout(function() {
        window.location.href = window.location.href.split("?")[0]; 
    }, 1000);
}
</script>

