<?php
// Inicia una nueva sesión o reanuda la sesión existente.
session_start();
// Comprueba si las variables de sesión no están definidas.
if (!isset($_SESSION['nombre']) || !isset($_SESSION['apellido'])) {
  header("Location: login.php");
  exit();
}
?>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="images/logo.jpeg" type="">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo.jpeg" type="">
  <!-- Estilos -->
  <link href="css/bootstrap.mnn.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/styl.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/st.css">
  <link rel="stylesheet" href="css/styl.css">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet" />
  <title>AS</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/sttt.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/styll.css">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<!-- header section strats -->
<header class="header_section" style="background-color: black;">
  <div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="index.html">
        <span>Alerta Yuliana</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mx-auto ">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
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
          <a href="perfil_cli.php" class="order_online">
            REPORTAR CASO
          </a>
        </div>
      </div>
    </nav>

    <div class="hero_area">
      <div class="bg-box">
        <img src="images/Historia.png" alt="">
      </div>
      <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-gray" style="margin-top: 10px;     height: 42px; border-radius: 45px; width: 368px; padding: 0px px;">
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
              <span class="text-white" style="font-size: 18px;">
                <?php echo htmlspecialchars($_SESSION['nombre'] . ' ' . $_SESSION['apellido']); ?>
              </span>
            </div>
          </div>
        </div>
      </nav>

    </div>
</header>
<!-- end header section -->
</div>



<br>
<br>
<br>
<br>

<!-- client section -->

<style>
  .form-title {
    position: relative;
    background-color: #000000a7;
    ;
    text-align: center;
    color: white;
    font-size: 30px;
    padding: 10px;
    border-radius: 0px;
    overflow: hidden;
    margin-bottom: 20px;
  }

  .form-title img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.5;
    z-index: 1;
  }

  .form-title-text {
    position: relative;
    z-index: 2;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
  }

  .containerr {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0px;
  }

  .box {
    border: 1px solid #ddd;
    border-radius: 15px;
    background: #fff;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.5s ease-out, box-shadow 0.5s ease-out;
  }

  .box:hover {
    transform: scale(1.05);
    box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.2);
  }

  .img-box img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    cursor: pointer;
    transition: transform 0.4s, filter 0.4s;
  }

  .img-box img:hover {
    transform: scale(1.05);
    filter: brightness(0.85);
  }

  .detail-box {
    padding: 20px;
  }

  .detail-box h5 {
    margin: 0;
    font-size: 1.5em;
    background-color: #3e0d35;
    color: white;
    padding: 10px;
    text-align: center;
    border-radius: 10px;
  }

  .detail-box p {
    margin: 15px 0;
    line-height: 1.8;
    font-size: 1.1em;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .social-share {
    display: flex;
    justify-content: space-around;
    margin-top: 15px;
  }

  .social-share a {
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s, transform 0.2s;
  }

  .social-share .btn-primary {
    background-color: #3b5998;
  }

  .social-share .btn-info {
    background-color: #00aced;
  }

  .social-share .btn-danger {
    background-color: #dd4b39;
  }

  .social-share a:hover {
    transform: scale(1.1) rotate(-3deg);
    opacity: 0.9;
  }

  .lightbox {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    display: flex;
    justify-content: center;
    align-items: center;
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.5s;
  }

  .lightbox img {
    max-width: 90%;
    max-height: 80%;
    border-radius: 10px;
    transform: scale(0.8);
    transition: transform 0.5s;
  }

  .lightbox.active {
    visibility: visible;
    opacity: 1;
  }

  .lightbox.active img {
    transform: scale(1);
  }

  @media (max-width: 768px) {
    .container {
      grid-template-columns: 1fr;
    }
  }

  @media (min-width: 769px) and (max-width: 1024px) {
    .container {
      grid-template-columns: repeat(2, 1fr);
    }
  }
</style>
</head>

<body>

  <div class="form-title">
    <img src="img/exito.jpg" alt="Imagen de fondo">
    <div class="form-title-text">Últimos Desaparecidos</div>

  </div>


  <section class="client_section layout_padding-bottom">
    <div class="containerr">
      <div class="carousel-wrap row justify-content-center">
        <div class="owl-carousel client_owl-carousel col-lg-10">
          <?php
          include("../app/config/config.php");
          $result = $conexion->query("SELECT * FROM nino_desaparecido ORDER BY fecha_desaparicion DESC LIMIT 6");
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "
                        <div class='item'>
                            <div class='box rounded'>
                                <div class='img-box'>
                                    <img src='" . htmlspecialchars($row['imagen']) . "' alt='Imagen de " . htmlspecialchars($row['nombre']) . "' class='img-fluid'>
                                </div>
                                <div class='detail-box'>
                                    <h6 class='text-truncate'>" . htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellido']) . "</h6>
                                    <p><strong>Fecha de desaparición:</strong> " . htmlspecialchars($row['fecha_desaparicion']) . "</p>
                      <p><strong>Lugar:</strong> " . htmlspecialchars($row['lugar_desaparicion']) . "</p>
                                    <p><strong>Teléfono:</strong> " . htmlspecialchars($row['telefono']) . "</p>
                              
                                </div>
                            </div>
                        </div>";
            }
          } else {
            echo "<div class='col-12 text-center'><p>No hay reportes disponibles.</p></div>";
          }
          $conexion->close();
          ?>
        </div>
      </div>
    </div>
  </section>
  <br>

  <section id="reportes">
    <h2 style="text-align:center; margin-bottom: 20px; font-size: 52px;">Niños Desaparecidos</h2>

    <form method="GET" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
      <label for="ubicacion" style="margin-right: 10px;">Filtrar por ubicación:</label>
      <select name="ubicacion" id="ubicacion" style="margin: 10px; padding: 5px; width: 200px;">
        <option value="">Todas las ubicaciones</option>
        <?php
        include("../app/config/config.php");
        $ubicaciones_result = $conexion->query("SELECT DISTINCT lugar_desaparicion FROM nino_desaparecido WHERE estado = 'Desaparecido'");
        while ($ubicacion = $ubicaciones_result->fetch_assoc()) {
          echo "<option value='" . htmlspecialchars($ubicacion['lugar_desaparicion']) . "'>" . htmlspecialchars($ubicacion['lugar_desaparicion']) . "</option>";
        }
        ?>
      </select>
      <button type="submit" class="btn btn-primary" style="padding: 5px 10px;">Filtrar</button>
    </form>

    <div class="containerr">
      <?php
      $ubicacion_filtro = isset($_GET['ubicacion']) ? $_GET['ubicacion'] : '';

      // Consulta SQL que filtra solo los desaparecidos
      $query = "SELECT * FROM nino_desaparecido WHERE estado = 'Desaparecido'";
      if ($ubicacion_filtro) {
        $query .= " AND lugar_desaparicion = '" . $conexion->real_escape_string($ubicacion_filtro) . "'";
      }
      $query .= " ORDER BY fecha_desaparicion DESC";

      $result = $conexion->query($query);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "
        <div class='box'>
          <div class='img-box'>
            <img src='" . htmlspecialchars($row['imagen']) . "' 
                 alt='Imagen de " . htmlspecialchars($row['nombre']) . "' 
                 onclick='openLightbox(this)'>
          </div>
          <div class='detail-box'>
            <h5>" . htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellido']) . "</h5>
            <p><strong>Fecha Nacimiento:</strong> " . htmlspecialchars($row['fecha_nacimiento']) . "</p>
            <p><strong>Fecha Desaparición:</strong> " . htmlspecialchars($row['fecha_desaparicion']) . "</p>
            <p><strong>Lugar:</strong> " . htmlspecialchars($row['lugar_desaparicion']) . "</p>
            <p><strong>Descripción:</strong> " . htmlspecialchars($row['descripcion']) . "</p>
            <p><strong>Teléfono:</strong> " . htmlspecialchars($row['telefono']) . "</p>
            <p><strong>Correo:</strong> " . htmlspecialchars($row['correo']) . "</p>
          </div>
        </div>";
        }
      } else {
        echo "<p>No hay reportes disponibles.</p>";
      }
      $conexion->close();
      ?>
    </div>
  </section>

  <div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <img id="lightbox-img" src="">
  </div>

  <script>
    function openLightbox(img) {
      const lightbox = document.getElementById('lightbox');
      const lightboxImg = document.getElementById('lightbox-img');
      lightboxImg.src = img.src;
      lightbox.classList.add('active');
    }

    function closeLightbox() {
      document.getElementById('lightbox').classList.remove('active');
    }

    function revealSectionsOnScroll() {
      const sections = document.querySelectorAll('section');
      sections.forEach((section) => {
        const rect = section.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        if (rect.top < windowHeight - 100) {
          section.classList.add('show');
        }
      });
    }

    window.addEventListener('scroll', revealSectionsOnScroll);
    window.addEventListener('load', revealSectionsOnScroll);
  </script>
  <br>



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
    <div class="footer-info">
      <p>
        &copy; <span id="displayYear"></span>
        <a href="https://html.design"></a><br><br>
        &copy; <span id="displayYear"></span>
        <a href="https://themewagon.co/" target="_blank"></a>
      </p>
    </div>
  </footer>
  <!-- footer section -->




  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/ma.js"></script>

  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
</body>

</html>