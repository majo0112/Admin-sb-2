<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if(isset($_POST["id_ficha"])){
        $id_ficha = $_POST["id_ficha"];

        require_once "db.php";

        $sql = "SELECT 
        r.numero_documento, 
        CONCAT(r.nombre, ' ', r.apellidos) AS nombre_completo, 
        MAX(CASE WHEN a.asistencias = 9 THEN a.hora END) AS entrada,
        MAX(CASE WHEN a.asistencias = 10 THEN a.hora END) AS salida,
        MAX(a.fecha) AS fecha,
        CASE WHEN MAX(a.asistencias) IS NOT NULL THEN 'Asistió' ELSE 'No Asistió' END AS asistencias,
        SUM(CASE WHEN a.asistencias IS NULL THEN 1 ELSE 0 END) AS inasistencias
    FROM register r
    LEFT JOIN asistencia a ON r.id = a.id_persona AND a.id_ficha = '$id_ficha'
    WHERE r.rol = 1
    GROUP BY r.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $contador = 1 ;
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $contador . "</td>";
        echo "<td>" . $row['numero_documento'] . "</td>";
        echo "<td>" . $row['nombre_completo']  . "</td>";
        echo "<td>" . $row['entrada'] . "</td>";
        echo "<td>" . $row['salida'] . "</td>";
        echo "<td>" . $row['fecha'] . "</td>";
        echo "<td>" . $row['asistencias'] . "</td>";
        echo "<td>" . $row['inasistencias'] . "</td>";

        echo "<td>";
        echo "<center>";
        echo "<button type='button' class='btn btn-success btn-sm btn-just fs-7' data-bs-toggle='modal' data-bs-target='#certificadoModal' data-bs-user-id='{$row['numero_documento']}'>Justificar</button>";
        echo "</center>";
        echo "</td>";
        
        echo "</tr>";

        $contador++;
        
            }
        } else {
            echo "<tr><td colspan='7'>No hay registros</td></tr>";
        }

    }
}

?>
