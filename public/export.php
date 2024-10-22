<?php
include("../app/config/config.php");

$tipo = $_GET['tipo'];
$estado = ($tipo === 'encontrados') ? 'Encontrado' : 'Desaparecido';

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=' . $tipo . '_reporte.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['Nombre', 'Apellido', 'Fecha Nacimiento', 'Fecha Desaparición', 'Lugar', 'Descripción', 'Teléfono', 'Correo']);

$query = "SELECT * FROM nino_desaparecido WHERE estado = ? ORDER BY fecha_desaparicion DESC";
$stmt = $conexion->prepare($query);
$stmt->bind_param('s', $estado);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    fputcsv($output, [
        $row['nombre'], $row['apellido'], $row['fecha_nacimiento'], 
        $row['fecha_desaparicion'], $row['lugar_desaparicion'], 
        $row['descripcion'], $row['telefono'], $row['correo']
    ]);
}

fclose($output);
$stmt->close();
$conexion->close();
?>
