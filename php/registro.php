<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["contraseña"];


   


    require_once "db.php";


    $sql = "INSERT INTO register (nombre, apellido, email, contraseña) VALUES ('$nombre', '$apellido', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
  
        header("Location: /views/tables.php");
        exit();
    } else {
      
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
