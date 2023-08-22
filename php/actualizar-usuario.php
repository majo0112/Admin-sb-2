<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $id = $_POST["id"];
    $tipo_documento = $_POST["tipo_documento"];
    $numero_documento = $_POST["numero_documento"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $rol = $_POST["rol"];

    require_once "db.php";
    $sql = "UPDATE register SET tipo_documento = '$tipo_documento', numero_documento = '$numero_documento', nombre = '$nombre', apellidos = '$apellidos', correo = '$correo', telefono = '$telefono', rol = '$rol' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/tables.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
