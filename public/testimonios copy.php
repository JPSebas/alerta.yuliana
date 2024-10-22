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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <link rel="shortcut icon" href="img/.png">

  <title>Perfil Cliente</title>

  <!-- Estilos -->
  <link href="css/bootstrap.minn.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/styl.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/st.css">
  <link rel="stylesheet" href="css/styl.css">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

</head>
<!-- header section strats -->
<header class="header_sectionn">
  <nav class="navbar navbar-expand-lg custom_nav-container" id="nav_es">
    <a class="navbar-brand" href="index.html">
      <span>
        Alerta Samboni
      </span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mx-auto ">
        <li class="nav-item ">
          <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.html">Recursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">Testimonios</a>
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
  <n class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-logo d-flex align-items-center justify-content-between py-2">
      <div class="header-images d-flex align-items-center text-white">
        <i class="fas fa-user-circle" style="font-size: 24px; margin-right: 10px;"></i>
        <span class="font-weight-bold" style="font-size: 17px; margin-right: 10px;">
          <?php echo htmlspecialchars($_SESSION['nombre'] . ' ' . $_SESSION['apellido']); ?>
        </span>
      </div>
      <div>
        <a href="logout.php" class="btn btn-outline-danger btn-sm">Cerrar Sesión</a>
      </div>
    </div>



    </div>
</header>
<!-- end header section -->




<body>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>





  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Acerca de la PANELA</h5>
        <h1 class="mb-5">Importancia!!!</h1>
      </div>
      <div class="owl-carousel testimonial-carousel">
        <div class="testimonial-item bg-transparent border rounded p-4">
          <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
          <p class="card-text" style="font-size: 16px">¿Sabías que la panela se produce de manera artesanal en muchas comunidades rurales? El proceso de producción de la panela incluye la extracción del jugo de caña, su cocción y moldeado en formas típicas.</p>
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/produ.jpg" style="width: 50px; height: 50px;">
            <div class="ps-3">
              <h5 class="mb-1">Curiosidades</h5>
              <small>Producción</small>
            </div>
          </div>
        </div>
        <div class="testimonial-item bg-transparent border rounded p-4">
          <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
          <p class="card-text" style="font-size: 16px">Aguapanela con limón, flan de panela y galletas de panela son algunas recetas populares que utilizan panela como ingrediente principal. Son deliciosas y fáciles de preparar.</p>
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/bene.jpg" style="width: 50px; height: 50px;">
            <div class="ps-3">
              <h5 class="mb-1">Recetas </h5>
              <small>Populares</small>
            </div>
          </div>
        </div>
        <div class="testimonial-item bg-transparent border rounded p-4">
          <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
          <p class="card-text" style="font-size: 16px">La producción de panela apoya a miles de familias rurales, proporcionando empleo y mejorando la calidad de vida. Comprar panela ayuda a conservar tradiciones ancestrales y promueve prácticas agrícolas sostenibles.</p>
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/comu.jpg" style="width: 50px; height: 50px;">
            <div class="ps-3">
              <h5 class="mb-1">Impacto Positivo</h5>
              <small>Comunidades</small>
            </div>
          </div>
        </div>
        <div class="testimonial-item bg-transparent border rounded p-4">
          <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
          <p class="card-text" style="font-size: 16px">La producción de panela suele ser más sostenible comparada con el azúcar refinado, ya que utiliza menos químicos y procesos industriales. Apoya la biodiversidad local al fomentar prácticas agrícolas que protegen los ecosistemas.</p>
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/natu.jpg" style="width: 50px; height: 50px;">
            <div class="ps-3">
              <h5 class="mb-1">Panela </h5>
              <small>Medio Ambiente</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->


  <h1 style="font-size: 25px; color: green; text-align: center; margin-bottom: 20px; font-family: 'Arial', sans-serif; text-transform: uppercase;">Reportar a Menor Desaparecido</h1>
  <form action="agregar_productos.php" enctype="multipart/form-data" method="post">
    <table class="table table-bordered" style="text-align: center; border-radius: 10px; overflow: hidden;">
      <thead class="thead-dark">
        <tr>
          <th>Campo</th>
          <th>Entrada</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Fotografía del Menor</td>
          <td>
            <label for="file-upload" class="btn btn-success">Subir Imagen</label>
            <input id="file-upload" type="file" name="imagen" required style="display:none;" />
          </td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><input type="text" name="nombre" required class="form-control" /></td>
        </tr>
        <tr>
          <td>Apellido</td>
          <td><input type="text" name="apellido" required class="form-control" /></td>
        </tr>
        <tr>
          <td>Fecha de Nacimiento</td>
          <td><input type="date" name="fecha_nacimiento" required class="form-control" /></td>
        </tr>
        <tr>
          <td>Fecha Desaparición</td>
          <td><input type="date" name="fecha_desaparicion" required class="form-control" /></td>
        </tr>
        <tr>
          <td>Lugar Desaparición</td>
          <td><input type="text" name="lugar_desaparicion" required class="form-control" /></td>
        </tr>
        <tr>
          <td>Descripción</td>
          <td><textarea name="descripcion" required class="form-control"></textarea></td>
        </tr>
        <tr>
          <td>Teléfono</td>
          <td><input type="number" name="telefono" required class="form-control" /></td>
        </tr>
        <tr>
          <td>Correo Electrónico</td>
          <td><input type="email" name="correo" required class="form-control" /></td>
        </tr>
        <tr>
          <td colspan="2">
            <button type="submit" class="btn btn-primary">Enviar Reporte</button>
          </td>
        </tr>
      </tbody>
    </table>
  </form>


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
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Alerta Samboni
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with
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
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/ma.js"></script>
</body>

</html>

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          Últimos Desaparecidos
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Moana Michell
                </h6>
                <p>
                  magna aliqua
                </p>
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>

          <?php
          include("../app/config/config.php");

          $result = $conexion->query("SELECT * FROM nino_desaparecido");

          if ($result->num_rows > 0) {
            echo "<table class='styled-table'>";
            echo "<thead><tr><th>ID</th><th>Imagen</th><th>Nombre</th><th>Apellido</th><th>Fecha Nacimiento</th><th>Fecha Desaparición</th><th>Lugar</th><th>Descripción</th><th>Teléfono</th><th>Correo</th></tr></thead>";
            echo "<tbody>";

            while ($row = $result->fetch_assoc()) {
              echo "<tr>";

              echo "<td><img src='" . htmlspecialchars($row["imagen"]) . "' class='table-img'></td>";
              echo "<td>" . htmlspecialchars($row["nombre"]) . "</td>";
              echo "<td>" . htmlspecialchars($row["apellido"]) . "</td>";
              echo "<td>" . htmlspecialchars($row["fecha_nacimiento"]) . "</td>";
              echo "<td>" . htmlspecialchars($row["fecha_desaparicion"]) . "</td>";
              echo "<td>" . htmlspecialchars($row["lugar_desaparicion"]) . "</td>";

              // Manejo de la descripción
              $descripcion = isset($row["descripcion"]) ? $row["descripcion"] : 'Descripción no disponible.';
              echo "<td>" . htmlspecialchars($descripcion) . "</td>";

              echo "<td>" . htmlspecialchars($row["telefono"]) . "</td>";
              echo "<td>" . htmlspecialchars($row["correo"]) . "</td>";
              echo "</tr>";
            }

            echo "</tbody></table>";
          } else {
            echo "No hay reportes disponibles.";
          }


          $conexion->close();
          ?>

          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Mike Hamell
                </h6>
                <p>
                  magna aliqua
                </p>
              </div>
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


