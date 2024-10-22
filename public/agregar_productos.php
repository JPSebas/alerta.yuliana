<?php
include("../app/config/config.php");

// Verifica si se ha enviado un archivo en el campo 'imagen'.
if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
    $imagen = $_FILES["imagen"]["tmp_name"];
    $Nombre_imagen = $_FILES["imagen"]["name"];
    $tipoImagen = strtolower(pathinfo($Nombre_imagen, PATHINFO_EXTENSION));
    $carpeta = "imagenes_productos/";

    if (in_array($tipoImagen, ["jpg", "jpeg", "png"])) {
        $nombre = trim($_POST["nombre"]);
        $apellido = $_POST["apellido"];
        $fecha_na = $_POST["fecha_nacimiento"];
        $fecha_de = $_POST["fecha_desaparicion"];
        $lugar_de = $_POST["lugar_desaparicion"];
        $telefono = $_POST["telefono"];
        $emaill = $_POST["correo"];
        $descripcion = $_POST["descripcion"]; // Obtener la descripción del formulario

        include "../app/config/config.php";

        if ($conexion->connect_error) {
            die("La conexión falló: " . $conexion->connect_error);
        }

        // Incluir la descripción en la consulta SQL
        $sql = "INSERT INTO nino_desaparecido
                (nombre, apellido, fecha_nacimiento, fecha_desaparicion, lugar_desaparicion, telefono, correo, descripcion)
                VALUES ('$nombre', '$apellido', '$fecha_na', '$fecha_de', '$lugar_de', '$telefono', '$emaill', '$descripcion')";

        if ($conexion->query($sql) === true) {
            $idregistro = $conexion->insert_id;
            $ruta = $carpeta . $idregistro . "." . $tipoImagen;

            $actualizarImagenes = $conexion->query("UPDATE nino_desaparecido SET imagen = '$ruta' WHERE id = $idregistro");

            if ($actualizarImagenes === true) {
                if (move_uploaded_file($imagen, $ruta)) {
                    header("Location: confirmacion.php");
                    exit();
                } else {
                    echo "Error al mover la imagen.";
                }
            } else {
                echo "Error al actualizar la imagen en la base de datos.";
            }
        } else {
            echo "Error al insertar el registro: " . $conexion->error;
        }

        $conexion->close();
    } else {
        echo "Tipo de imagen no soportado. Solo se permiten archivos JPG, JPEG y PNG.";
    }
} else {
    echo "No se ha subido ninguna imagen o ocurrió un error al subirla.";
}

// Redirigir a la página de confirmación
header("Location: confirmacion.php");
exit();
?>
