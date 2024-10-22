<?php
include("../app/config/config.php");

$id = $_GET['id'];
$nuevoEstado = $_GET['estado'];

$query = "UPDATE nino_desaparecido SET estado = ? WHERE id = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param('si', $nuevoEstado, $id);

if ($stmt->execute()) {
    echo "<script>alert('Estado actualizado correctamente.'); window.location.href = 'clien_admi.php';</script>";
} else {
    echo "<script>alert('Error al actualizar el estado.'); window.location.href = 'clien_admi.php';</script>";
}

$stmt->close();
$conexion->close();
?>
