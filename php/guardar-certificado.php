<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
    if (!empty($_FILES["certificado"])) {

        $aprendiz = $_POST["aprendiz"];
        $descripcion = $_POST["descripcion"];

       
        $carpetaDestino = "../certificados/"; 

       
        $file = $_FILES["certificado"];
        $nombreArchivo = $file["name"];
        $archivoTemporal = $file["tmp_name"];

        
        if (move_uploaded_file($archivoTemporal, $carpetaDestino . $nombreArchivo)) {
           
            echo json_encode(["success" => true]);
           
            exit;

        } else {
            
            echo json_encode(["success" => false, "error" => "Error al subir el archivo"]);
            exit;
        }
    }
}

?>
