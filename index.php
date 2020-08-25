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
    <?php require 'variables/metaEtiquetas.php'; ?>
    <?php require 'controllers/indexController.php'; ?>


</head>

<body>
    <!-- Menu  Inicial-->
    <!-- .collapse:not(.show) , menu.js agg in-->
    <?php include 'layout/menu.php'; ?>
    <!-- slider  -->
    <section id="parallax4" style="position: relative;">
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
                            <!-- <div class="container">
                                <article class="hentry arriendo">
                                    <div class="property-featured">
                                        <a class="content-thumb" href="detalle_inmueble.php">
                                            <img src="images/no_image.png" style="object-fit: cover;" alt="">
                                            <span class="property-label"> Código: 1</span>
                                            <span class="property-category-2"> Apartamento</span>
                                    </div>
                                    <div class="property-wrap">
                                        <h2 class="property-title"><a href="detalle_inmueble.php">Poblado</a></h2>
                                        <div class=" property-summary">
                                            <div class="property-detail">
                                                <div class="size"><span>66 m<sup>2 </span>
                                                </div>
                                                <div class="bathrooms"><span> 2</span>
                                                </div>
                                                <div class="bedrooms"><span> 2 </span>
                                                </div>
                                            </div>
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span><span class="amount"> $ 1.000.000</span></span>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </div>
                            <div class="container">
                                <article class="hentry arriendo">
                                    <div class="property-featured">
                                        <a class="content-thumb" href="detalle_inmueble.php">
                                            <img src="images/no_image.png" style="object-fit: cover;" alt="">
                                            <span class="property-label"> Código: 2</span>
                                            <span class="property-category-2"> Apartamento</span>
                                    </div>
                                    <div class="property-wrap">
                                        <h2 class="property-title"><a href="detalle_inmueble.php">Poblado</a></h2>
                                        <div class=" property-summary">
                                            <div class="property-detail">
                                                <div class="size"><span>66 m<sup>2 </span>
                                                </div>
                                                <div class="bathrooms"><span> 2</span>
                                                </div>
                                                <div class="bedrooms"><span> 2 </span>
                                                </div>
                                            </div>
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span><span class="amount"> $ 1.000.000</span></span>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </div> -->
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
                        <!-- <div class="container">
                            <article class="hentry arriendo">
                                <div class="property-featured">
                                    <a class="content-thumb" href="detalle_inmueble.php">
                                        <img src="images/no_image.png" class="cont_img" alt="">
                                        <span class="property-label"> Código: 1</span>
                                        <span class="property-category-2"> Apartamento</span>
                                </div>
                                <div class="property-wrap">
                                    <h2 class="property-title"><a href="detalle_inmueble.php">Poblado</a></h2>
                                    <div class=" property-summary">
                                        <div class="property-detail">
                                            <div class="size"><span>66 m<sup>2 </span>
                                            </div>
                                            <div class="bathrooms"><span> 2</span>
                                            </div>
                                            <div class="bedrooms"><span> 2 </span>
                                            </div>
                                        </div>
                                        <div class="property-info">
                                            <div class="property-price">
                                                <span><span class="amount"> $ 1.000.000</span></span>
                                            </div>
                                        </div>
                                    </div>
                            </article>
                        </div>
                        <div class="container">
                            <article class="hentry arriendo">
                                <div class="property-featured">
                                    <a class="content-thumb" href="detalle_inmueble.php">
                                        <img src="images/no_image.png" class="cont_img" alt="">
                                        <span class="property-label"> Código: 2</span>
                                        <span class="property-category-2"> Apartamento</span>
                                </div>
                                <div class="property-wrap">
                                    <h2 class="property-title"><a href="detalle_inmueble.php">Poblado</a></h2>
                                    <div class=" property-summary">
                                        <div class="property-detail">
                                            <div class="size"><span>66 m<sup>2 </span>
                                            </div>
                                            <div class="bathrooms"><span> 2</span>
                                            </div>
                                            <div class="bedrooms"><span> 2 </span>
                                            </div>
                                        </div>
                                        <div class="property-info">
                                            <div class="property-price">
                                                <span><span class="amount"> $ 1.000.000</span></span>
                                            </div>
                                        </div>
                                    </div>
                            </article> 
                        </div>-->
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
                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/Asesores-02.jpg" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="mt-4">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Diego Mauricio Piedrahita</div>
                                        <div class="fuente_asesor">Asesor Comercial</div>
                                        <div><i class="fa fa-envelope tamaño"></i><a href="mailto:dmpiedrahita@conaltura.com" class="__cf_email__" style="font-size: 10px;"> dmpiedrahita@conaltura.com</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3017235158"> 3017235168</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898 Extension 217</a></div>
                                    </div>

                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">

                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/VeronicaTabares.png" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="mt-4">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Veronica Tabares</div>
                                        <div class="fuente_asesor">Secretaria</div>
                                        <div><i class="fa fa-envelope tamaño"></i><a href="mailto:vtabares@conaltura.com" class="__cf_email__">
                                                vtabares@conaltura.com</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898 Extension 217</a></div>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>

                    <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/Asesores_Mesa de trabajo 1.jpg" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="mt-4">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Fauto Arias</div>
                                        <div class="fuente_asesor">Director</div>
                                        <div><i class="fa fa-envelope tamaño"></i><a href="mailto:farias@conaltura.com " class="__cf_email__">
                                                farias@conaltura.com</a></div>

                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898</a></div>
                                    </div>

                                </div>
                            </div>

                        </article>

                    </div>

                    <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/Asesores-03.jpg" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="mt-4">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Fabio Leon Jimenez</div>
                                        <div class="fuente_asesor">Asesor Comercial</div>
                                        <div><i class="fa fa-envelope tamaño"></i><a href="mailto:fjimenez@conaltura.com" class="__cf_email__">
                                                fjimenez@conaltura.com</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3128945407"> 3128945407</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898 ext 216</a></div>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>

                    <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/Fotografia_Adriana_Molina sin fondo.png" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="mt-4">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Adriana Molina Tamayo</div>
                                        <div class="fuente_asesor">Asesor Comercial</div>
                                        <div><i class="fa fa-envelope tamaño"></i><a href="mailto:amolina@conaltura.com" class="__cf_email__">
                                                amolina@conaltura.com</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3214777488"> 3214777488</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898 ext 213</a></div>
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