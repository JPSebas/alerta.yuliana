<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmación</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('img/exito.jpg'); /* Ruta de la imagen de fondo */
      background-size: cover;
      background-position: center;
      font-family: 'Arial', sans-serif;
    }
    .confirmation-message {
      margin-top: 50px;
      text-align: center;
      background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente */
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }
    .confirmation-message h1 {
      color: #754901;
      font-size: 30px;
      font-weight: bold;
    }
    .confirmation-message p {
      margin-top: 20px;
    }
    .btn-custom {
      background-color: #754901;
      border-color: #754901;
      color: white;
    }
    .verification-icon {
      width: 100px;
      height: 100px;
      display: block;
      margin: 20px auto;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="confirmation-message">
      <img src="img/comprobado.png" alt="Verificado" class="verification-icon"> <!-- Ruta de la imagen de verificado -->
      <h1>El Reporte ha sido cargado con Éxito,</h1>
      <p><a href="index_cli.php" class="btn btn-custom">Volver a la página principal</a></p>
    </div>
  </div>
</body>
</html>
