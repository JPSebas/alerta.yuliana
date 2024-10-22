<?php

// Incluye el archivo de configuración que contiene los datos de conexión a la base de datos.
require_once '../config/config.php';

// Define la clase Usuario.
class Usuario
{
    // Declara una propiedad privada para la conexión a la base de datos.
    private $conexion;

    // Constructor de la clase Usuario.
    public function __construct()
    {
        // Establece la conexión a la base de datos utilizando la función conectar().
        $this->conexion = conectar();
    }

    // Método para registrar un nuevo usuario.
    public function registrar($nombre, $apellido, $telefono, $direccion, $cedula, $email, $passwordEncriptado)
    {
        // Define la consulta SQL para insertar un nuevo registro en la tabla usuarios.
        $sql = "INSERT INTO usuarios (nombre, apellido, telefono, direccion, cedula, email, password) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        // Prepara la consulta SQL.
        $stmt = $this->conexion->prepare($sql);
        
        // Verifica si la preparación fue exitosa.
        if (!$stmt) {
            die("Error en la preparación: " . $this->conexion->error);
        }

        // Vincula los parámetros a la consulta preparada.
        $stmt->bind_param("sssssss", $nombre, $apellido, $telefono, $direccion, $cedula, $email, $passwordEncriptado);

        // Ejecuta la consulta y devuelve true si tiene éxito, de lo contrario, devuelve false.
        if ($stmt->execute()) {
            return true;
        } else {
            // Muestra el error si la ejecución falla.
            echo "Error en la ejecución: " . $stmt->error;
            return false;
        }
    }

    
}
