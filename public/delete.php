<?php
include("../app/config/config.php");

if (isset($_GET['id'])) {
    $id = $conexion->real_escape_string($_GET['id']);
    $query = "DELETE FROM nino_desaparecido WHERE id = '$id'";
    if ($conexion->query($query) === TRUE) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
} else {
    echo "ID no especificado.";
}

$conexion->close();
header('Location: clien_admi.php');
exit();
