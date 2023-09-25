<?php
include '../comunes/permisos.php';

$title = "SENA | Editar ficha";

ob_start(); 
?>
<?php 
        include '../comunes/preloader.php'; 
?>
<div class='container-fluid px-4'>
    <div class='title-content mb-4'>
        <h1 class='mt-4 text-center fs-3'>Editar Ficha</h1>
    </div>
    <div class='container-fluid px-3 mb-5'>
        <?php
    
        $id = $_GET['id'];

        require_once "../php/db.php";
        $sql = "SELECT * FROM fichas WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

  
            echo "<form method='POST' action='../php/actualizar-ficha.php'>";
            echo "<input type='hidden' name='id' value='{$row['id']}'>";
            echo"<div class='row'>";
            

            echo"<div class='col col-lg-6'>";
            echo"<label for='ficha'>
                Número de ficha*
                </label>";
            echo"<input
                type='number'
                name='ficha'
                class='form-control'
                value='{$row['ficha']}'
                required
                />";
            echo"</div>";
            echo"<div class='col col-lg-6'>";
            echo"<label for='alias'>
                        Nombre*
                    </label>";
            echo"<input
                        type='text'
                        name='alias'
                        class='form-control'
                        value='{$row['alias']}'
                        required
                    />";
            echo"</div>";
            echo"<div class='col col-lg-6'>";
            echo "<label for='estado'>Estado*</label>";
            echo "<select class='form-select' name='estado' required>";
            echo "<option value=''>Seleccione</option>";

            $estados = array(
                5 => "Activo",
                8 => "Inactivo"
            );

            foreach ($estados as $valor => $texto) {
                echo "<option value='{$valor}'";
                if ($row['estado'] == $valor) {
                    echo " selected";
                }
                echo ">{$texto}</option>";
            }

            echo "</select>";
            echo "</div>";

            echo"</div>";
            echo"<div class='mt-4'>"; 
            echo"<center>"; 
            echo "<button type='submit' class='btn btn-success btn-editar'>";
            echo"<svg xmlns='http://www.w3.org/2000/svg' style='margin-right: 10px' width='16' height='16' fill='currentColor' class='bi bi-save' viewBox='0 0 16 16'>";
            echo"<path d='M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z'/>";
            echo"</svg>";
            echo "Guardar cambios</button>";
            echo"</center>";
            echo"</div>";
            echo "</form>";
            echo"</div";

        } else {
            echo "No se encontró la ficha.";
        }

        $conn->close();
        ?>
    </div>
</div>

<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>