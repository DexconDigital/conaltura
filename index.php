<?php
$pagina = 'inicio';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Conaltura Inmobiliaria</title>
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/hint.css">
    <!-- Datos para compartir por facebook -->
    <meta property="og:image" itemprop="image" content="http://dexcon.co/conaltura/images/icon/faviconR.png">
    <meta property="og:title" content="Conaltura Inmobiliaria">
    <meta property="og:url" content="http://www.dexcon.co/conaltura/">
    <meta property="og:description" content="CONALTURA INMOBILIARIA fue fundada en junio de 2016 con el proposito de ofrecer los servicios de administracion, arrendamientos y venta de propiedad raiz destinada ya sea para vivienda o para locales comerciales, oficinas, bodegas u otros.">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Conaltura Inmobiliaria">
    <meta name="twitter:image" content="http://dexcon.co/conaltura/images/icon/faviconR.png">
    <meta name="twitter:description" content="CONALTURA INMOBILIARIA fue fundada en junio de 2016 con el proposito de ofrecer los servicios de administracion, arrendamientos y venta de propiedad raiz destinada ya sea para vivienda o para locales comerciales, oficinas, bodegas u otros.">
    <!-- fin de datos para compartir por twitter -->
    <!-- Para whatsapp -->
    <meta property="og:image" content="http://dexcon.co/conaltura/images/icon/faviconR.png" />
    <meta property="og:image:secure_url" content="http://www.dexcon.co/conaltura/" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="CONALTURA INMOBILIARIA fue fundada en junio de 2016 con el proposito de ofrecer los servicios de administracion, arrendamientos y venta de propiedad raiz destinada ya sea para vivienda o para locales comerciales, oficinas, bodegas u otros.">
    <!-- Para whatsapp -->
    <?php require 'controllers/indexController.php';
    require 'controllers/noticiasController.php';
    require 'controllers/asesor_detalle.php';
    require 'controllers/aliados_slider.php';
    require 'controllers/textoController.php';
    require 'controllers/sliderController.php';
    require 'controllers/bannertextController.php';
    ?>


</head>

<body style="text-align:center;">
    </style>

    <body>
        <!-- Menu  Inicial-->
        <!-- .collapse:not(.show) , in http://html.nootheme.com/citilights/-->
        <?php include 'layout/menu.php'; ?>
        <!-- slider  -->
        <section id="parallax4" style="position: relative;z-index:-1;">
            <div class="overlay"></div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php slider_index(); ?>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" style="z-index: 600;" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" style="z-index: 600;" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </section>
        <div id="texslider" class="container col-12  text-center d-flex justify-content-center">
            <div class="col-9  p-0">
                <!-- <p class="texto1_slider text-break">Conaltura, empresa de construcción y proyectos inmobiliarios en Colombia</p>
                <h1 class="texto2_slider text-break">Apartamentos nuevos en venta desde 100 millones de pesos.</h1> -->
                <?php textouno_slider() ?>
                <?php textodos_slider() ?>
            </div>
        </div>
        <!-- slider -->
        <!-- Buscador -->
        <?php include 'layout/buscador.php'; ?>


        <!-- texto descriptivo -->
        <section id="texto_descrip_seccion" class="">
            <?php textoindex(); ?>
        </section>
        <!-- fin texto descriptivo -->
        <!-- redes sociales -->
        <?php include 'layout/redes.php'; ?>
        <!-- fin redes sociales -->
        <!-- banner -->
        <section id="banner_home" <?php bannertxt(); ?>>
            <div class="overlay2"></div>
            <div id="" class="container col-12  text-center d-flex justify-content-center d-flex align-items-center">
                <div class="col-lg-9 col-md-9 col-10  p-0">
                    <?php bannertexindex(); ?>
                    <a class="btn mt-3" href="inmuebles.php">Haz clic y consigue lo que necesitas</a>
                </div>
            </div>
        </section>
        <!-- fin banner -->
        <!-- inmuebles en arreindo -->
        <section class="recent-properties pt-0">
            <div class="container">
                <div class="recent-properties-inner">
                    <div class="section-title">
                        <h3 class="titulos">Propiedades destacadas en arriendo</h3>
                    </div>
                    <div class="recent-properties-content">
                        <div style="position:relative;">
                            <div class="owl-carousel owl-theme primero" id="carouselA">
                                <?php
                                if (is_array($api)) {
                                    inmuebles_destacados($api);
                                } else {
                                    echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inmuebles en venta -->
        <section class="pt-0">
            <div class="container">
                <div class="recent-properties-inner">
                    <div class="section-title">
                        <h3 class="espacio_destacadas titulos">Propiedades destacadas en venta</h3>
                    </div>
                    <div class="recent-properties-content">
                        <div class="owl-carousel owl-theme" id="owl-propiedades-venta">
                            <?php
                            if (is_array($api)) {
                                inmuebles_destacados2($api);
                            } else {
                                echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- noticias -->
        <section id="noticias" class="espacio_destacadas">
            <div class="container">
                <div class="">
                    <div class="section-title">
                        <h3 class="text-center">Noticias</h3>
                    </div>
                    <div class="container">
                        <div class="col-12"></div>
                        <div class="d-flex flex-wrap align-items-center justify-content-center ">
                            <?php if (isset($noticias_array)) {
                                modelo_ultimas_noticia($noticias_array);
                            } else {
                                echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                            }
                            ?>

                            <!-- cards -->
                            <!-- <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
                                <div class="post-item">
                                    <div class="item-post">
                                        <div class="imagen-destacada">
                                            <a href="detalle_noticia.php" title="" class="">
                                                <img class="image" src="images/images_noticias/6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cuerpo">
                                            <div class="post-header">
                                                <div class="date mb-4">24 jun 20</div>
                                                <p><a class="texto" href="detalle_noticia.php">Texto de la Noticia a publicar</a></p>
                                            </div>
                                            <a class="more-link" href="detalle_noticia.php">Leer más</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- fin cards -->
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Acesores -->
        <section id="recent-agents-slider" class="fondo_asesores espacio_destacadas">
            <div class="container">
                <div class="recent-agents-inner">
                    <div class="section-title">
                        <h3>Nuestros asesores</h3>
                    </div>
                    <div class="owl-carousel owl-carousel1  owl-theme" id="asesores">

                        <?php if (isset($asesor_array)) {
                            modelo_asesor($asesor_array);
                        } else {
                            echo '<div class="col 12">
                        <h3 class="text-center">No hay asesores para mostrar<h3>
                        </div>';
                        }
                        ?>
                        <!-- datos inser asesores -->
                        <!-- 
                        asesor 1

                        nombre:Diego Mauricio Piedrahita
                        correo: dmpiedrahita@conaltura.com
                        telefono1:3017235158
                        telefono2:3229898

                        cargo: Asesor Comercial 
                        asesor 2

                        nombre: Veronica Tabares
                        correo: vtabares@conaltura.com
                        telefono1: 3229898
                        telefono2: 3229898 Extension 217

                        cargo: Secretaria
                        asesor 3

                        nombre: Fauto Arias
                        correo: farias@conaltura.com
                        telefono1: 3229898
                        telefono2: 

                        cargo: Director
                        asesor 4

                        nombre: Fabio Leon Jimenez
                        correo: fjimenez@conaltura.com
                        telefono1: 3128945407
                        telefono2: 322 9898 ext 216

                        cargo: Asesor Comercial
                        asesor 5

                        nombre: Adriana Molina Tamayo
                        correo: amolina@conaltura.com
                        telefono1: 3214777488
                        telefono2: 322 9898 ext 216

                        cargo: Asesor Comercial
                      -->
                        <!-- <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
                            <article class="hentry has-featured div_asesor_color">
                                <div class="agent-featured div_asesor_secundario">
                                    <img src="images/Asesores-02.png" alt="">
                                </div>
                                <div class="agent-wrap div_text_asesor">
                                    <h2 class="agent-title titulo_style_asesor">
                                        <font class="style_sub_asesor">
                                            <font class="style_sub_asesor">Diego Mauricio Piedrahita</font>
                                        </font>
                                    </h2>
                                    <div class="agent-excerpt" style="padding:15px 20px;">
                                        <p>
                                            <font class="style_sub_asesor">
                                                <font class="style_sub_asesor color_asesor_sub">Asesor Comercial </font>
                                            </font>
                                        </p>
                                    </div>
                                    <div class="agent-social-wrap redes_div_asesor">
                                        <div class="social-list agent-social d-flex justify-content-center redes_seg_div_asesor">
                                            <a class="hint--top" data-hint="dmpiedrahita@conaltura.com" href="mailto:dmpiedrahita@conaltura.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                            <a class="hint--top" data-hint="3017235158" href="tel:3017235158" target="_blank"><i class="fa fa-phone"></i></a>
                                            <a class="hint--top" data-hint="3229898" href="tel:3229898" target="_blank"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div> -->


                    </div>
                </div>
            </div>
        </section>

        <!-- Aliados -->
        <section id="testimonial" class="wrap testimonial espacio_destacadas">
            <div class="container">
                <div class="our-partners-inner">
                    <div class="section-title">
                        <h3 class="text-center">Nuestras alianzas y afiliaciones</h3>
                    </div>
                    <div class="owl-carousel owl-carousel1 owl-theme" id="aliados_slide">

                        <?php if (isset($aliados_array)) {
                            aliados_slider($aliados_array);
                        } else {
                            echo
                                '<div class="item">
                                    <p>No hay Aliados para mostrar</p>
                                </div>';
                        }
                        ?>
                        <!-- <div class="item">
                            <img class="item-image" src="images/aliados/Logo_Lonja-Afiliado.png" alt="">

                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <?php include 'layout/footer.php'; ?>
    </body>
    <?php include 'layout/archivosfooter.php'; ?>
    <script src="conexion_api/token_api.js"></script>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
    <script>
        $('.carousel-inner div:first-child').addClass('active');
    </script>




</html>