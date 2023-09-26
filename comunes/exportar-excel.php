<?php
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();


if (isset($id_ficha)) {
    $sheet->setCellValue('A1', '#');
    $sheet->setCellValue('B1', 'Número de Documento');
    $sheet->setCellValue('C1', 'Nombre Completo');
    $sheet->setCellValue('D1', 'Entrada');
    $sheet->setCellValue('E1', 'Salida');
    $sheet->setCellValue('F1', 'Fecha');
    $sheet->setCellValue('G1', 'Asistencias');
    $sheet->setCellValue('H1', 'Inasistencias');

 
    $sql = "SELECT 
        r.numero_documento, 
        CONCAT(r.nombre, ' ', r.apellidos) AS nombre_completo, 
        MAX(CASE WHEN a.asistencias = 9 THEN a.hora END) AS entrada,
        MAX(CASE WHEN a.asistencias = 10 THEN a.hora END) AS salida,
        MAX(a.fecha) AS fecha,
        CASE WHEN MAX(a.asistencias) IS NOT NULL THEN 'Asistió' ELSE 'No Asistió' END AS asistencias,     
        (SELECT COUNT(DISTINCT fecha) FROM asistencia WHERE id_persona = r.id AND id_ficha = '$id_ficha' AND asistencias NOT IN (9, 10)) AS inasistencias
        FROM register r
        LEFT JOIN asistencia a ON r.id = a.id_persona
        WHERE r.rol = 1 AND a.id_ficha = '$id_ficha'
        GROUP BY r.id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $contador = 1;
        $rowIndex = 2; 
        while ($row = $result->fetch_assoc()) {
            $sheet->setCellValue('A' . $rowIndex, $contador);
            $sheet->setCellValue('B' . $rowIndex, $row['numero_documento']);
            $sheet->setCellValue('C' . $rowIndex, $row['nombre_completo']);
            $sheet->setCellValue('D' . $rowIndex, $row['entrada']);
            $sheet->setCellValue('E' . $rowIndex, $row['salida']);
            $sheet->setCellValue('F' . $rowIndex, $row['fecha']);
            $sheet->setCellValue('G' . $rowIndex, $row['asistencias']);
            $sheet->setCellValue('H' . $rowIndex, $row['inasistencias']);

            $contador++;
            $rowIndex++;
        }
    }
}

$writer = new Xlsx($spreadsheet);
$filename ='../exports/reporte_aprendices.xlsx';

$writer->save($filename);

$conn->close();

if (isset($id_ficha)) {
    echo '<a href="' . $filename . '" download>Descargar Reporte Excel</a>';
}
?>
