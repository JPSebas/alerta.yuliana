<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Establece la codificación de caracteres a UTF-8 -->
    <meta charset="UTF-8">
    <!-- Configura la vista para dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlaza el archivo de estilos CSS -->
    <link rel="stylesheet" href="../public/css/stiles.css">
    <!-- Enlaza el favicon que se muestra en la pestaña del navegador -->
    <link rel="shortcut icon" href="../public/img/acceso.png" type="image/x-icon">
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Registro</title>
    <!-- Enlaza el archivo JavaScript para validaciones del formulario -->
    <script type="text/javascript" src="../public/js/validaciones1.js"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Enlaza la hoja de estilos de Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body id="fondo" style="background-image: url('../public/images/Salvando.png')">
    <br>
    <!-- Formulario de registro -->
    <form id="form2" name="miniformulario" class="formulario" method="post"  onsubmit="return validarDatos()"  action="../app/controladores/UsuarioControlador.php">
        <!-- Título del formulario -->
        <h2>POR FAVOR REGISTRESE PARA INGRESAR</h2>
        <div class="register-container">
            <!-- Mensaje que invita al usuario a iniciar sesión si ya tiene cuenta -->
            <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
        </div>
        <!-- Campo de entrada para el nombre -->
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" /><br>
        <span id="error-nombre" class="error"></span>

        <!-- Campo de entrada para el apellido -->
        <input type="text" id="apellido" name="apellido" placeholder="Apellidos" /><br>
        <span id="error-apellido" class="error"></span>
        
        <!-- Campo de entrada para el número de teléfono -->
        <input type="text" id="telefono" name="telefono" placeholder="Teléfono" /><br>
        <span id="error-telefono" class="error"></span>
        <!-- Campo de entrada para la dirección -->
        <input type="text" id="direccion" name="direccion" placeholder="Dirección" /><br>
        <span id="error-direccion" class="error"></span>
        <!-- Campo de entrada para el correo electrónico -->
        <input type="email" id="email" name="email" placeholder="E-mail" /><br>
        <span id="error-email" class="error"></span>

        <!-- Campo de entrada para la cedula -->
        <input type="text" id="cedula" name="cedula" placeholder="Cedula" /><br>

        <!-- Campo de entrada para la contraseña -->
        <input type="password" id="password" name="password" placeholder="Contraseña" /><br>
        <span id="error-password" class="error"></span>
        

        <br>
        <br><br>
        <!-- Botón para enviar el formulario -->
        <button type="submit" id="botones">Registrarse</button>
    </form>
</body>

</html>