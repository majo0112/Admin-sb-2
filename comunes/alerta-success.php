<?php
if (isset($_GET['success'])) {
    $successMessage = "";
    switch ($_GET['success']) {
        case 1:
            $successMessage = "¡Programa registrado exitosamente!";
            break;
        case 2:
            $successMessage = "¡Usuario registrado exitosamente!";
            break;
        case 3:
            $successMessage = "¡Ficha registrada exitosamente!";
            break;
        case 4:
            $successMessage = "¡Registro exitoso!";
            break;
        case 5:
            $successMessage = "¡Asistencia registrada exitosamente!";
            break;

    }

    if ($successMessage !== "") {
        echo '<div id="successAlert" class="p-4 mb-4 text-sm text-center text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">' . $successMessage . '</span> 
        </div>';
    }
}

?>

<script>
if (window.location.search.indexOf('success=') > -1) {
    setTimeout(function() {
        window.location.href = window.location.href.split("?")[0]; 
    }, 2000);
}
</script>



