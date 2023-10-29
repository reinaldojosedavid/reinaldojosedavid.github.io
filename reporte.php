<?php
require('fpdf/fpdf.php');

// Conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_la_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos para el reporte
$sql = "SELECT fecha, llenado_botellon, cantidad_botellas FROM movimientos ORDER BY fecha DESC";
$result = $conn->query($sql);

// Crear un nuevo PDF
$pdf = new (0);
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Reporte de Movimientos', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'Fecha', 1, 0, 'C');
$pdf->Cell(60, 10, 'Llenado de botellón', 1, 0, 'C');
$pdf->Cell(40, 10, 'Cantidad de botellas', 1, 1, 'C');

$pdf->SetFont('Arial', '', 12);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(40, 10, $row["fecha"], 1, 0, 'C');
    $pdf->Cell(60, 10, $row["llenado_botellon"], 1, 0, 'C');
    $pdf->Cell(40, 10, $row["cantidad_botellas"], 1, 1, 'C');
}

$conn->close();

// Guardar el archivo PDF
$pdf->Output('pdf/reporte.pdf', 'F');
?>