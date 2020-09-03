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
    <?php require 'variables/metaEtiquetas.php'; ?>
    <?php require 'controllers/indexController.php'; ?>


</head>
<!-- <style>
    .tooltip_dom {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip_dom .tooltip_dom_text {
        visibility: hidden;
        width: 200px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -8rem;
        opacity: 0;
        transition: opacity 0.3s;
        padding: 1rem;
    }

    .tooltip_dom .tooltip_dom_text::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    .tooltip_dom:hover .tooltip_dom_text {
        visibility: visible;
        opacity: 1;
    }
</style> -->

<body style="text-align:center;">
    </style>

    <body>
        <!-- Menu  Inicial-->
        <!-- .collapse:not(.show) , in http://html.nootheme.com/citilights/-->
        <?php include 'layout/menu.php'; ?>
        <!-- slider  -->
        <section id="parallax4" style="position: relative;z-index:-1;">
            <div class="overlay"></div>
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img src="images/banner-home.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="images/banner-home.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner-home.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" style="z-index: 600;" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" style="z-index: 600;" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <div id="texslider" class="container col-12  text-center d-flex justify-content-center">
            <div class="col-9  p-0">
                <p class="texto1_slider">Conaltura, empresa de construcción y proyectos inmobiliarios en Colombia</p>
                <h1 class="texto2_slider">Apartamentos nuevos en venta desde 100 millones de pesos.</h1>
            </div>
        </div>
        <!-- slider -->
        <!-- Buscador -->
        <?php include 'layout/buscador.php'; ?>


        <!-- texto descriptivo -->
        <section id="texto_descrip_seccion" class="">
            <div class="col-12  d-flex justify-content-center flex-wrap">
                <div class=" col-lg-5 col-md-7 col-10 text-center cont_texto">
                    <h3 class="texto_style1">Encuentra tu proyecto de vivienda en Medellín.</h3>
                </div>
                <div class=" col-lg-8 col-md-10 col-11 text-center cont_texto2">
                    <p class="texto_style2">Encuentra inmuebles en venta en diferentes partes de Medellín o elige apartamentos de 2 y 3 habitaciones con zonas comunes, gimnasios, parqueadero, cercanos a centros comerciales y mucho más.</p>
                </div>
            </div>
        </section>
        <!-- fin texto descriptivo -->
        <!-- redes sociales -->
        <?php include 'layout/redes.php'; ?>
        <!-- fin redes sociales -->
        <!-- banner -->
        <section id="banner_home">
            <div class="overlay2"></div>
            <div id="" class="container col-12  text-center d-flex justify-content-center d-flex align-items-center">
                <div class="col-lg-9 col-md-9 col-10  p-0">
                    <h1 class="">Hay una vivienda para cada necesidad</h1>
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
                            <!-- cards -->
                            <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
                                <div class="post-item">
                                    <div class="item-post">
                                        <div class="imagen-destacada">
                                            <a href="detalle_noticia.php" title="" class="">
                                                <img class="image" src="images/images_noticias/1.jpg" alt="">
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
                            </div>
                            <!-- fin cards -->
                            <!-- cards -->
                            <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
                                <div class="post-item">
                                    <div class="item-post">
                                        <div class="imagen-destacada">
                                            <a href="detalle_noticia.php" title="" class="">
                                                <img class="image" src="images/images_noticias/2.jpg" alt="">
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
                            </div>
                            <!-- fin cards -->
                            <!-- cards -->
                            <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
                                <div class="post-item">
                                    <div class="item-post">
                                        <div class="imagen-destacada">
                                            <a href="detalle_noticia.php" title="" class="">
                                                <img class="image" src="images/images_noticias/3.jpg" alt="">
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
                            </div>
                            <!-- fin cards -->
                            <!-- cards -->
                            <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
                                <div class="post-item">
                                    <div class="item-post">
                                        <div class="imagen-destacada">
                                            <a href="" title="" class="">
                                                <img class="image" src="images/images_noticias/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="cuerpo">
                                            <div class="post-header">
                                                <div class="date mb-4">24 jun 20</div>
                                                <p><a class="texto" href="">Texto de la Noticia a publicar</a></p>
                                            </div>
                                            <a class="more-link" href="">Leer más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin cards -->
                            <!-- cards -->
                            <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
                                <div class="post-item">
                                    <div class="item-post">
                                        <div class="imagen-destacada">
                                            <a href="detalle_noticia.php" title="" class="">
                                                <img class="image" src="images/images_noticias/5.jpg" alt="">
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
                            </div>
                            <!-- fin cards -->
                            <!-- cards -->
                            <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
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
                            </div>
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


                        <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
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
                        </div>

                        <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">

                            <article class="hentry has-featured div_asesor_color">
                                <div class="agent-featured div_asesor_secundario">
                                    <img src="images/VeronicaTabares.png" alt="">
                                </div>
                                <div class="agent-wrap div_text_asesor">
                                    <h2 class="agent-title titulo_style_asesor">
                                        <font class="style_sub_asesor">
                                            <font class="style_sub_asesor">Veronica Tabares</font>
                                        </font>
                                    </h2>
                                    <div class="agent-excerpt" style="padding:15px 20px;">
                                        <p>
                                            <font class="style_sub_asesor">
                                                <font class="style_sub_asesor color_asesor_sub">Secretaria </font>
                                            </font>
                                        </p>
                                    </div>
                                    <div class="agent-social-wrap redes_div_asesor">
                                        <div class="social-list agent-social d-flex justify-content-center redes_seg_div_asesor">
                                            <a class="hint--top" data-hint="vtabares@conaltura.com" href="mailto:vtabares@conaltura.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                            <a class="hint--top" data-hint="3229898" href="tel:3229898" target="_blank"><i class="fa fa-phone"></i></a>
                                            <a class="hint--top" data-hint="322 9898 Extension 217" href="tel:3229898" target="_blank"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
                            <article class="hentry has-featured div_asesor_color">
                                <div class="agent-featured div_asesor_secundario">
                                    <img src="images/Sr_Fausto.png" alt="">
                                </div>
                                <div class="agent-wrap div_text_asesor">
                                    <h2 class="agent-title titulo_style_asesor">
                                        <font class="style_sub_asesor">
                                            <font class="style_sub_asesor">Fauto Arias</font>
                                        </font>
                                    </h2>
                                    <div class="agent-excerpt" style="padding:15px 20px;">
                                        <p>
                                            <font class="style_sub_asesor">
                                                <font class="style_sub_asesor color_asesor_sub">Director </font>
                                            </font>
                                        </p>
                                    </div>
                                    <div class="agent-social-wrap redes_div_asesor">
                                        <div class="social-list agent-social d-flex justify-content-center redes_seg_div_asesor">
                                            <a class="hint--top" data-hint="farias@conaltura.com" href="mailto:farias@conaltura.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                            <a class="hint--top" data-hint="3229898" href="tel:3229898" target="_blank"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>

                        <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
                            <article class="hentry has-featured div_asesor_color">
                                <div class="agent-featured div_asesor_secundario">
                                    <img src="images/Asesores-03.png" alt="">
                                </div>
                                <div class="agent-wrap div_text_asesor">
                                    <h2 class="agent-title titulo_style_asesor">
                                        <font class="style_sub_asesor">
                                            <font class="style_sub_asesor">Fabio Leon Jimenez</font>
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
                                            <a class="hint--top" data-hint="fjimenez@conaltura.com" href="mailto:fjimenez@conaltura.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                            <a class="hint--top" data-hint="3128945407" href="tel:3128945407" target="_blank"><i class="fa fa-phone"></i></a>
                                            <a class="hint--top" data-hint="322 9898 ext 216" href="tel:3229898" target="_blank"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
                            <article class="hentry has-featured div_asesor_color">
                                <div class="agent-featured div_asesor_secundario">
                                    <img src="images/Adriana_Molina.png" alt="">
                                </div>
                                <div class="agent-wrap div_text_asesor">
                                    <h2 class="agent-title titulo_style_asesor">
                                        <font class="style_sub_asesor">
                                            <font class="style_sub_asesor">Adriana Molina Tamayo</font>
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
                                            <a class="hint--top" data-hint="amolina@conaltura.com" href="mailto:amolina@conaltura.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                            <a class="hint--top" data-hint="3214777488" href="tel:3214777488" target="_blank"><i class="fa fa-phone"></i></a>
                                            <a class="hint--top" data-hint="322 9898 ext 216" href="tel:3229898" target="_blank"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>


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

                        <div class="item">
                            <img class="item-image" src="images/aliados/Logo_Lonja-Afiliado.png" alt="">

                        </div>

                        <div class="item">
                            <img class="item-image" src="images/aliados/camara_comercio_afiliado.png" alt="">
                        </div>
                        <div class="item">
                            <img class="item-image" src="images/aliados/el_libertador.png" alt="" style="margin-top: 20px;">
                        </div>

                        <div class="item">
                            <img class="item-image" src="images/aliados/fgi.png" style="margin-top: 10px;" alt="">

                        </div>

                        <div class="item">
                            <img class="item-image" src="images/aliados/Grupo_Sura_logo.png" alt="">

                        </div>

                        <div class="item">
                            <img class="item-image" src="images/aliados/SIMI.png" alt="">

                        </div>


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





</html>