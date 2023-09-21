<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $tipo_documento = $_POST["tipo_documento"];
    $numero_documento = $_POST["numero_documento"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $rol = $_POST["rol"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    require_once "db.php";

    $sql = "INSERT INTO register (tipo_documento, numero_documento, nombre, apellidos, correo, telefono, rol, password) 
    VALUES ('$tipo_documento', '$numero_documento','$nombre','$apellidos','$correo','$telefono','$rol', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/tables.php?success=2");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

