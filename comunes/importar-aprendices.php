<?php
require_once "../php/db.php"; 
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["fileInput"]) && is_uploaded_file($_FILES["fileInput"]["tmp_name"])) {
        $file = $_FILES["fileInput"]["tmp_name"];
        $id_ficha = $_POST["id_ficha"];
        $id_estado = $_POST["estado"];

        $spreadsheet = IOFactory::load($file);
        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();

        for ($row = 2; $row <= $highestRow; ++$row) {
            $nombreCompleto = $worksheet->getCell('A' . $row)->getValue();
            $ficha = $worksheet->getCell('B' . $row)->getValue();
            $estado = $worksheet->getCell('C' . $row)->getValue();

            
            $sqlPersona = "SELECT id FROM register WHERE CONCAT(nombre, ' ', apellidos) = ?";
            $stmtPersona = $conn->prepare($sqlPersona);
            $stmtPersona->bind_param("s", $nombreCompleto);
            $stmtPersona->execute();
            $stmtPersona->bind_result($id_persona);
            $stmtPersona->fetch();
            $stmtPersona->close();

            
            $sqlFicha = "SELECT id FROM fichas WHERE alias = ?";
            $stmtFicha = $conn->prepare($sqlFicha);
            $stmtFicha->bind_param("s", $ficha);
            $stmtFicha->execute();
            $stmtFicha->bind_result($id_ficha);
            $stmtFicha->fetch();
            $stmtFicha->close();

           
            $sqlEstado = "SELECT id FROM sub_item WHERE descripcion = ?";
            $stmtEstado = $conn->prepare($sqlEstado);
            $stmtEstado->bind_param("s", $estado);
            $stmtEstado->execute();
            $stmtEstado->bind_result($id_estado);
            $stmtEstado->fetch();
            $stmtEstado->close();

            
            $sqlInsert = "INSERT INTO aprendiz (id_persona, id_ficha, estado) 
                          VALUES (?, ?, ?)";
            $stmtInsert = $conn->prepare($sqlInsert);
            $stmtInsert->bind_param("iii", $id_persona, $id_ficha, $id_estado);

            if ($stmtInsert->execute() !== TRUE) {
                echo "Error al insertar aprendiz: " . $conn->error;
                break;
            }

            $stmtInsert->close();
        }

        $conn->close();

        header("Location: ../views/aprendices.php?success=4");
        exit();
    } else {
        echo "Por favor, seleccione un archivo Excel válido.";
    }
}
?>


