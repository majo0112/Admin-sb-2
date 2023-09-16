<?php
include '../comunes/permisos.php';

$title = "SENA | Editar usuarios";

ob_start(); 
?>
<div class='container-fluid px-4'>
    <div class='title-content mb-4'>
        <h1 class='mt-4 text-center fs-3'>Editar Usuario</h1>
    </div>
    <div class='container-fluid px-3 mb-5'>
        <?php
    
        $id = $_GET['id'];

        require_once "../php/db.php";
        $sql = "SELECT * FROM register WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

  
            echo "<form method='POST' action='../php/actualizar-usuario.php'>";
            echo "<input type='hidden' name='id' value='{$row['id']}'>";
            echo"<div class='row'>";
            echo "<div class='col col-lg-6'>";
            echo "<label for='tipo_documento'>Tipo de documento*</label>";
            echo "<select class='form-select' name='tipo_documento' required>";
            echo"<option value=''>
                        Seleccione 
                    </option>";
                    echo"<option value='3'>";
                    if ($row['rol'] == '3') {
                        echo "";
                    }
                    echo "Cédula de ciudadanía</option>";
                    echo "<option value='4'";
                    if ($row['rol'] == '4') {
                        echo " seleccionado";
                    }
                    echo ">Tarjeta de identidad</option>";
                    echo "</select>";
            echo"</div>";

            echo"<div class='col col-lg-6'>";
            echo"<label for='numero_documento'>
                Número de documento*
                </label>";
            echo"<input
                type='number'
                name='numero_documento'
                class='form-control'
                value='{$row['numero_documento']}'
                required
                />";
            echo"</div>";
            echo"<div class='col col-lg-6'>";
            echo"<label for='nombre'>
                        Nombre*
                    </label>";
            echo"<input
                        type='text'
                        name='nombre'
                        class='form-control'
                        value='{$row['nombre']}'
                        required
                    />";
            echo"</div>";
            echo"<div class='col col-lg-6'>";
            echo"<label for='apellidos'>
                Apellidos*
            </label>";
            echo"<input
                type='text'
                name='apellidos'
                class='form-control'
                value='{$row['apellidos']}'
                required
                />";
            echo"</div>";
            echo"<div class='col col-lg-6'>";
            echo"<label for='correo'>
                    Correo*
                </label>";
            echo"<input
                    type='email'
                    name='correo'
                    class='form-control'
                    value='{$row['correo']}'
                    required
                />";
            echo"</div>";
            echo"<div class='col col-lg-6'>";
            echo"<label for='telefono'>
                    Teléfono*
                </label>";
            echo"<input
                    type='number'
                    name='telefono'
                    class='form-control'
                    value='{$row['telefono']}'
                    required
                />";
            echo"</div>";
            echo"<div class='col col-lg-6'>";
            echo"<label for='rol'>Rol*</label>";
                echo"<select class='form-select' name='rol' required>";
                    echo"<option value=''>
                        Seleccione un rol
                    </option>";
                    echo"<option value='1'>";
                    if ($row['rol'] == '1') {
                        echo "";
                    }
                    echo "Aprendiz</option>";
                    echo "<option value='2'";
                    if ($row['rol'] == '2') {
                        echo " seleccionado";
                    }
                    echo ">Instructor</option>";
                    echo "</select>";
                    echo"</div>";
              echo"</div>";
            echo"<div class='mt-4'>";  
            echo "<button type='submit' class='btn btn-success btn-usuario'>";
            echo"<svg xmlns='http://www.w3.org/2000/svg' style='margin-right: 10px' width='16' height='16' fill='currentColor' class='bi bi-save' viewBox='0 0 16 16'>";
            echo"<path d='M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z'/>";
            echo"</svg>";
            echo "Guardar cambios</button>";
            echo"</div>";
            echo "</form>";
            echo"</div";

        } else {
            echo "No se encontró el usuario.";
        }

        $conn->close();
        ?>
    </div>
</div>

<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>

