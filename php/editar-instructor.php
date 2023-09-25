<?php
include '../comunes/permisos.php';

$title = "SENA | Editar Instructor";

ob_start(); 
?>
<?php 
    include '../comunes/preloader.php'; 
?>
<div class='container-fluid px-4'>
    <div class='title-content mb-4'>
        <h1 class='mt-4 text-center fs-3'>Editar instructor</h1>
    </div>
    <div class='container-fluid px-3 mb-5'>
        <?php
        $id = $_GET['id'];

        require_once "../php/db.php";
        $sql = "SELECT * FROM Instructor WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $fichaId = $row['id_ficha'];
            $personaId = $row['id_persona'];
        }
        ?>

        <form action='../php/actualizar-instructor.php' method='post'>
            <input type='hidden' name='id' value='<?php echo $id; ?>'>
            <div class='row'>
                <div class='col col-lg-6'>
                    <?php
                    $queryFicha = "SELECT id, alias FROM fichas";
                    $resultFicha = $conn->query($queryFicha);

                    if ($resultFicha->num_rows > 0) {
                        echo "<label for='id_ficha'>Ficha*</label>";
                        echo "<select class='form-select' name='id_ficha' required>";
                        echo "<option value=''>Seleccione</option>";

                        while ($rowFicha = $resultFicha->fetch_assoc()) {
                            $idFicha = $rowFicha['id'];
                            $aliasFicha = $rowFicha['alias'];
                            echo "<option value='$idFicha'";
                            if ($idFicha == $fichaId) {
                                echo " selected";
                            }
                            echo ">$aliasFicha</option>";
                        }

                        echo "</select>";
                    } else {
                        echo "No se encontraron fichas.";
                    }
                    ?>
                </div>
                <div class='col col-lg-6'>
                    <?php
                    $queryInstructor = "SELECT id, nombre, apellidos FROM register WHERE rol = 2";
                    $resultInstructor = $conn->query($queryInstructor);

                    if ($resultInstructor->num_rows > 0) {
                        echo "<label for='id_persona'>Instructor*</label>";
                        echo "<select class='form-select' name='id_persona' required>";
                        echo "<option value=''>Seleccione</option>";

                        while ($rowInstructor = $resultInstructor->fetch_assoc()) {
                            $idInstructor = $rowInstructor['id'];
                            $nombreInstructor = $rowInstructor['nombre'];
                            $apellidosInstructor = $rowInstructor['apellidos'];
                            $nombreCompletoInstructor = $nombreInstructor . ' ' . $apellidosInstructor;
                            echo "<option value='$idInstructor'";
                            if ($idInstructor == $personaId) {
                                echo " selected";
                            }
                            echo ">$nombreCompletoInstructor</option>";
                        }

                        echo "</select>";
                    } else {
                        echo "No se encontraron instructores registrados.";
                    }
                    ?>
                </div>
            </div>
            <div class='mt-4'>
                <center>
                <button type='submit' class='btn btn-success btn-editar'>
                    <svg xmlns='http://www.w3.org/2000/svg' style='margin-right: 10px' width='16' height='16' fill='currentColor' class='bi bi-save' viewBox='0 0 16 16'>
                        <path d='M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z'/>
                    </svg>
                    Guardar cambios
                </button>
                </center>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>