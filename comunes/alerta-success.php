<?php


$successMessages = [
    1 => "¡Programa registrado exitosamente!",
    2 => "¡Usuario registrado exitosamente!",
    3 => "¡Ficha registrada exitosamente!",
    4 => "¡Registro exitoso!",
    5 => "¡Asistencia registrada exitosamente!"
];

if (isset($_SESSION['successMessage']) && isset($_SESSION['successCase'])) {
    $successCase = $_SESSION['successCase'];
    $successMessage = $successMessages[$successCase];
    
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>
            <span class="font-medium">' . $successMessage . '</span> 
          </div>
          </div>';

    unset($_SESSION['successMessage']); 
    unset($_SESSION['successCase']);
}

?>



