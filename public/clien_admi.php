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
        <link rel="shortcut icon" href="img/logo.png">

        <title>Administrador</title>

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
                <a class="navbar-brand" href="index_admi.php">
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
                            <a class="nav-link" href="index_admi.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimoniosadmi.php">Testimonios</a>
                        </li>
                    </ul>



                    <div class="user_option">

                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        <a class="order_online" class=nav-item>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle" style="font-size: 28px; margin-right: 18px;"></i>
                            <span class="font-weight-bold text-white" style="font-size: 21px;">
                                <?php echo htmlspecialchars($_SESSION['nombre'] . ' ' . $_SESSION['apellido']); ?>
                            </span>
                        </div>
                        </a>
                    </div>
                </div>
            </nav>
            <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-logo d-flex align-items-center justify-content-between py-2">
                    <div class="header-images d-flex align-items-center text-white">


                    </div>
                </div>
            </nav>





        </header>
        <!-- end header section -->


        <body>
            <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

            <div class="container-xxl py-5 bg-dark hero-header mb-5" style="background-image: url('img/perfilad.png');background-size: cover; background-repeat: no-repeat; background-position: center;">
                <div class="container text-center my-5 pt-5 pb-4">
                </div>
            </div>
            <br>

            <style>
            
                h2.ninos-title,
                h3.ninos-subtitle {
                    text-align: center;
                    color: #333;
                    margin-bottom: 20px;
                }

                .ninos-container {
                    max-width: 1200px;
                    margin: auto;
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    overflow-x: auto;
                    /* Evita que se desborde horizontalmente */
                }

                .ninos-button {
                    background-color: #59360e;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    margin: 10px;
                    cursor: pointer;
                    border-radius: 5px;
                    font-size: 16px;
                    transition: background-color 0.3s;
                }

                .ninos-button:hover {
                    background-color: #3e0d35;
                }

                /* Colores específicos para los botones de eliminar y encontrado */
                .btn-encontrado {
                    background-color: #07921c;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    margin: 10px;
                    cursor: pointer;
                    border-radius: 5px;
                    font-size: 16px;
                    transition: background-color 0.3s;
                    /* Verde */
                }

                .btn-encontrado:hover {
                    background-color: #45a049;
                    /* Verde más oscuro */
                }

                .btn-eliminar {
                    background-color: #f44336;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    margin: 10px;
                    cursor: pointer;
                    border-radius: 5px;
                    font-size: 16px;
                    transition: background-color 0.3s;
                    /* Rojo */
                }

                .btn-eliminar:hover {
                    background-color: #e53935;
                    /* Rojo más oscuro */
                }

                .ninos-table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-bottom: 20px;
                }

                .ninos-table th,
                .ninos-table td {
                    border: 1px solid #ddd;
                    text-align: center;
                    padding: 10px;
                }

                .ninos-table th {
                    background-color: #2822229e;
                    /* Verde musgo */
                    color: white;
                }

                .ninos-table tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                .ninos-img-box img {
                    width: 80px;
                    /* Ajustado para mantener la proporción */
                    height: 80px;
                    object-fit: cover;
                    /* Asegura que la imagen no se deforme */
                    border-radius: 8px;
                }

                .ninos-lightbox {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 12, 0.9);
                    justify-content: center;
                    align-items: center;
                }

                .ninos-lightbox.active {
                    display: flex;
                }

                #ninos-lightbox-img {
                    max-width: 80%;
                    max-height: 80%;
                    border-radius: 8px;
                }

                /* Espacio entre el icono y el texto */
                .btn-encontrado i,
                .btn-eliminar i {
                    margin-right: 8px;
                    /* Espacio entre el icono y el texto */
                }
            </style>
            </head>

            <body class="ninos-body">
                <section id="reportes">
                    <h2 class="ninos-title">Gestión de Niños Desaparecidos</h2>

                    <div class="ninos-container">
                        <div style="text-align: center;">
                            <button class="ninos-button" onclick="exportData('desaparecidos')">Descargar Reporte Desaparecidos</button>
                            <button class="ninos-button" onclick="exportData('encontrados')">Descargar Reporte Encontrados</button>
                        </div>

                        <h3 class="ninos-subtitle">Personas Desaparecidas</h3>
                        <table class="ninos-table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Fecha Desaparición</th>
                                    <th>Lugar</th>
                                    <th>Descripción</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../app/config/config.php");
                                $queryDesaparecidos = "SELECT * FROM nino_desaparecido WHERE estado = 'Desaparecido' ORDER BY fecha_desaparicion DESC";
                                $resultDesaparecidos = $conexion->query($queryDesaparecidos);

                                if ($resultDesaparecidos->num_rows > 0) {
                                    while ($row = $resultDesaparecidos->fetch_assoc()) {
                                        $estado = htmlspecialchars($row['estado']) === 'Encontrado' ? 'Encontrado' : 'Desaparecido';
                                        $nuevoEstado = $estado === 'Desaparecido' ? 'Encontrado' : 'Desaparecido';
                                        echo "<tr>
                                <td class='ninos-img-box'><img src='" . htmlspecialchars($row['imagen']) . "'></td>
                                <td>" . htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellido']) . "</td>
                                <td>" . htmlspecialchars($row['fecha_nacimiento']) . "</td>
                                <td>" . htmlspecialchars($row['fecha_desaparicion']) . "</td>
                                <td>" . htmlspecialchars($row['lugar_desaparicion']) . "</td>
                                <td>" . htmlspecialchars($row['descripcion']) . "</td>
                                <td>" . htmlspecialchars($row['telefono']) . "</td>
                                <td>" . htmlspecialchars($row['correo']) . "</td>
                                <td>
                                    <button class='btn-encontrado' onclick='updateStatus(" . $row['id'] . ", \"$nuevoEstado\")'>
                                        <i class='fas fa-check'></i>" .
                                            ($estado === 'Desaparecido' ? 'Encontrado' : 'Desaparecido') . "
                                    </button>
                                    <button class='btn-eliminar' onclick='deleteRecord(" . $row['id'] . ")'>
                                        <i class='fas fa-trash'></i>Eliminar
                                    </button>
                                </td>
                            </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='9'>No hay reportes de personas desaparecidas.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>

                        <h3 class="ninos-subtitle">Personas Encontradas</h3>
                        <table class="ninos-table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Fecha Desaparición</th>
                                    <th>Lugar</th>
                                    <th>Descripción</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $queryEncontrados = "SELECT * FROM nino_desaparecido WHERE estado = 'Encontrado' ORDER BY fecha_desaparicion DESC";
                                $resultEncontrados = $conexion->query($queryEncontrados);

                                if ($resultEncontrados->num_rows > 0) {
                                    while ($row = $resultEncontrados->fetch_assoc()) {
                                        echo "<tr>
                                <td class='ninos-img-box'><img src='" . htmlspecialchars($row['imagen']) . "'></td>
                                <td>" . htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellido']) . "</td>
                                <td>" . htmlspecialchars($row['fecha_nacimiento']) . "</td>
                                <td>" . htmlspecialchars($row['fecha_desaparicion']) . "</td>
                                <td>" . htmlspecialchars($row['lugar_desaparicion']) . "</td>
                                <td>" . htmlspecialchars($row['descripcion']) . "</td>
                                <td>" . htmlspecialchars($row['telefono']) . "</td>
                                <td>" . htmlspecialchars($row['correo']) . "</td>
                            </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='8'>No hay reportes de personas encontradas.</td></tr>";
                                }
                                $conexion->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>

                <div class="ninos-lightbox" id="lightbox" onclick="closeLightbox()">
                    <img id="ninos-lightbox-img" src="">
                </div>



                <script>
                    function exportData(tipo) {
                        window.location.href = 'export.php?tipo=' + tipo;
                    }

                    function deleteRecord(id) {
                        if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
                            window.location.href = 'delete.php?id=' + id;
                        }
                    }

                    function updateStatus(id, nuevoEstado) {
                        if (confirm("¿Estás seguro de que deseas cambiar el estado a '" + nuevoEstado + "'?")) {
                            window.location.href = 'update_status.php?id=' + id + '&estado=' + nuevoEstado;
                        }
                    }

                    function openLightbox(img) {
                        const lightbox = document.getElementById('lightbox');
                        const lightboxImg = document.getElementById('ninos-lightbox-img');
                        lightboxImg.src = img.src;
                        lightbox.classList.add('active');
                    }

                    function closeLightbox() {
                        document.getElementById('lightbox').classList.remove('active');
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