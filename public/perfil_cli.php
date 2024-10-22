<?php
// Inicia una nueva sesión o reanuda la sesión existente.
session_start();

// Comprueba si las variables de sesión no están definidas.
if (!isset($_SESSION['nombre']) || !isset($_SESSION['apellido'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="images/logo.jpeg" type="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <link rel="shortcut icon" href="img/.png">

  <title>Perfil Cliente</title>

  <!-- Estilos -->
  <link href="css/bootstrap.mnn.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/styll.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/st.css">
  <link rel="stylesheet" href="css/styl.css">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet" />



</head>
<!-- header section strats -->
<div class="hero_area">
  <header class="header_sectionn">

    <nav class="navbar navbar-expand-lg custom_nav-container" id="nav_es">
      <a class="navbar-brand" href="index.html">
        <span>
          Alerta Yuliana
        </span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mx-auto ">
          <li class="nav-item ">
            <a class="nav-link" href="index_cli.php">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonios.php">Testimonios</a>
          </li>
        </ul>



        <div class="user_option">


          <form class="form-inline">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
          <a class="order_online" class=nav-item>
            REPORTAR CASO
          </a>
        </div>
      </div>
    </nav>
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-logo d-flex align-items-center justify-content-between py-2">
        <div class="header-images d-flex align-items-center text-white">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: none; border: none; color: white;">
              <i class="fa fa-bars"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size: 13px">
              <a class="dropdown-item" href="logout.php" style="color: grey; font-weight: bold;">
                <i class="fa fa-sign-out-alt"></i> Cerrar Sesión
              </a>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <i class="fas fa-user-circle" style="font-size: 28px; margin-right: 18px;"></i>
            <span class="font-weight-bold text-white" style="font-size: 21px;">
              <?php echo htmlspecialchars($_SESSION['nombre'] . ' ' . $_SESSION['apellido']); ?>
            </span>
          </div>

        </div>
    </nav>





  </header>
  <!-- end header section -->


  <body>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <div class="container-xxl py-5 bg-dark hero-header mb-5" style="background-image: url('img/REPORTe.png');background-size: cover; background-repeat: no-repeat; background-position: center;">
      <div class="container text-center my-5 pt-5 pb-4">
      </div>
    </div>
    <br>


    <style>
      .form-title {
        position: relative;
        background-color: #aa7a3648;
        ;
        text-align: center;
        color: #754901;
        ;
        font-size: 20px;
        font-weight: bold;
        padding: 5px;
        border-radius: 40px;
        overflow: hidden;
        height: 42px;
      }
    </style>
    </head>

    <body>
      <div class="container">
        <div class="form-title">
          <!-- Ruta de la imagen de fondo -->
          <div class="form-title-text">Formulario para Reportar un Menor Desaparecido</div>
        </div>
        <br>
        <br>
        <form action="agregar_productos.php" enctype="multipart/form-data" method="post">
          <table class="table table-bordered" style="text-align: center; border-radius: 10px; overflow: hidden; background-color: #f8f9fa;">
            <thead class="thead-dark" style="color: #754901;">
              <tr>
                <th style="text-align: center; font-size: 18px; font-weight: bold;">Campo</th>
                <th style="text-align: center; font-size: 18px; font-weight: bold;">Entrada</th>
              </tr>
            </thead>
            <tbody>
              <tr style="background-color: #ffff;;">
                <td style="text-align: center; font-size: 18px;">Fotografía del Menor</td>
                <td style="text-align: center; font-size: 18px;">
                  <label for="file-upload" class="btn btn-success">Subir Imagen</label>
                  <input id="file-upload" type="file" name="imagen" required style="display:none;" onchange="mostrarImagen(event);" />
                  <center><img id="imagen-preview" src="#" alt="Imagen del menor" style="display: none; margin-top: 10px; max-width: 200px;" /></center>
                </td>
              </tr>
              <tr style="background-color:  #f5f5f5;">
                <td style="text-align: center; font-size: 18px;">Nombre</td>
                <td style="text-align: center; font-size: 18px;"><input type="text" name="nombre" required class="form-control" /></td>
              </tr>
              <tr style="background-color: #ffff;">
                <td style="text-align: center; font-size: 18px;">Apellido</td>
                <td style="text-align: center; font-size: 18px;"><input type="text" name="apellido" required class="form-control" /></td>
              </tr>
              <tr style="background-color: #f5f5f5;">
                <td style="text-align: center; font-size: 18px;">Fecha de Nacimiento</td>
                <td style="text-align: center; font-size: 18px;"><input type="date" name="fecha_nacimiento" required class="form-control" /></td>
              </tr>
              <tr style="background-color: #ffff;">
                <td style="text-align: center; font-size: 18px;">Fecha Desaparición</td>
                <td style="text-align: center; font-size: 18px;"><input type="date" name="fecha_desaparicion" required class="form-control" /></td>
              </tr>
              <tr style="background-color: f5f5f5;">
                <td style="text-align: center; font-size: 18px;">Lugar Desaparición</td>
                <td style="text-align: center; font-size: 18px;"><input type="text" name="lugar_desaparicion" required class="form-control" /></td>
              </tr>
              <tr style="background-color: #ffff;">
                <td style="text-align: center; font-size: 18px;">Descripción</td>
                <td style="text-align: center; font-size: 18px;"><textarea name="descripcion" required class="form-control"></textarea></td>
              </tr>
              <tr style="background-color: f5f5f5;">
                <td style="text-align: center; font-size: 18px;">Teléfono</td>
                <td style="text-align: center; font-size: 18px;"><input type="number" name="telefono" required class="form-control" /></td>
              </tr>
              <tr style="background-color: #ffff;">
                <td style="text-align: center; font-size: 18px;">Correo Electrónico</td>
                <td style="text-align: center; font-size: 18px;"><input type="email" name="correo" required class="form-control" /></td>
              </tr>
              <tr style="background-color: #f8f9fa;">
                <td colspan="2" style="text-align: center; font-size: 18px;">
                  <button type="submit" class="btn btn-primary btn-lg">Enviar Reporte</button>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>


      <script>
        function mostrarImagen(event) {
          var input = event.target;
          var reader = new FileReader();

          reader.onload = function() {
            var dataURL = reader.result;
            var output = document.getElementById('imagen-preview');
            output.src = dataURL;
            output.style.display = 'block';
          };

          reader.readAsDataURL(input.files[0]);
        }
      </script>



      <script>
        function eliminarProducto(id) {
          if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
            window.location.href = '../app/vistas/productos/eliminar.php?id=' + id;
          }
        }
      </script>





      <!-- footer section -->
      <footer class="footer_section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-col">
              <div class="footer_contact">
                <h4>
                  Contact Us
                </h4>
                <div class="contact_link_box">
                  <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>

                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>

                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 footer-col">
              <div class="footer_detail">
                <a href="" class="footer-logo">
                  Alerta Yuliana
                </a>
                <p>
                  La implementación de una página de Alerta Amber contribuye significativamente a la seguridad de la comunidad,
                  facilitando la difusión rápida y efectiva de información crucial para la localización de menores desaparecidos.

                </p>
                <div class="footer_social">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 footer-col">
              <h4>
                Horario de apertura
              </h4>
              <p>
                Todos los dias
              </p>
              <p>
                24/7
              </p>
            </div>
          </div>

        </div>
      </footer>
      <!-- footer section -->



      <!-- Template Javascript -->
      <script src="js/ma.js"></script>
    </body>

</html>