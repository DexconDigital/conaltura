<?php
$pagina = 'inicio';
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
    <?php require 'variables/metaEtiquetas.php'; ?>
    <?php require 'controllers/indexController.php'; ?>
    <link rel="stylesheet" href="css/rangos.css">
</head>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- Buscador -->
    <?php include 'layout/buscador.php'; ?>

    <!-- inmuebles en arreindo -->
    <section class="recent-properties pt-0">
        <div class="container">
            <div class="recent-properties-inner">
                <div class="section-title">
                    <h3 class="titulos">Propiedades Destacadas en Arriendo</h3>
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
                    <h3 class="espacio_destacadas titulos">PROPIEDADES DESTACADAS EN VENTA</h3>
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
                        <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mt-5">
                            <article class="hentry has-featured">
                                <div class="property-featured">
                                    <a class="content-thumb" href="">
                                        <img src="images/no_image.png" alt="" class="attachment-agent-thumb cont_img" alt="" />
                                    </a>
                                </div>
                                <div class="agent-wrap">
                                    <div class="agent-summary">
                                        <div class="agent-info">

                                            <hr>
                                            <div>Todos los cuidados para tu mascota en tu vivienda nueva</div>
                                            <div class="buttton ver-mas"><a href="" style="color: #fff; font-size: 15px; ">Ver más</a></div>
                                            <div><i class="fa fa-calendar-alt"></i> Fecha</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mt-5">
                            <article class="hentry has-featured">
                                <div class="property-featured">
                                    <a class="content-thumb" href="detalle_inmueble.php">
                                        <img src="images/no_image.png" alt="" class="attachment-agent-thumb cont_img" alt="" />
                                    </a>
                                </div>
                                <div class="agent-wrap">
                                    <div class="agent-summary">
                                        <div class="agent-info">
                                            <hr>
                                            <div>Todos los cuidados para tu mascota en tu vivienda nueva</div>
                                            <div class="buttton ver-mas"><a href="detalle_inmueble.php" style="color: #fff; font-size: 15px; ">Ver más</a></div>
                                            <div><i class="fa fa-calendar-alt"></i> Fecha</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mt-5">
                            <article class="hentry has-featured">
                                <div class="property-featured">
                                    <a class="content-thumb" href="">
                                        <img src="images/no_image.png" alt="" class="attachment-agent-thumb cont_img" alt="" />
                                    </a>
                                </div>
                                <div class="agent-wrap">
                                    <div class="agent-summary">
                                        <div class="agent-info">

                                            <hr>
                                            <div>Todos los cuidados para tu mascota en tu vivienda nueva</div>
                                            <div class="buttton ver-mas"><a href="" style="color: #fff; font-size: 15px; ">Ver más</a></div>
                                            <div><i class="fa fa-calendar-alt"></i> Fecha</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mt-5">
                            <article class="hentry has-featured">
                                <div class="property-featured">
                                    <a class="content-thumb" href="">
                                        <img src="images/no_image.png" alt="" class="attachment-agent-thumb cont_img" alt="" />
                                    </a>
                                </div>
                                <div class="agent-wrap">
                                    <div class="agent-summary">
                                        <div class="agent-info">

                                            <hr>
                                            <div>Todos los cuidados para tu mascota en tu vivienda nueva</div>
                                            <div class="buttton ver-mas"><a href="" style="color: #fff; font-size: 15px; ">Ver más</a></div>
                                            <div><i class="fa fa-calendar-alt"></i> Fecha</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mt-5">
                            <article class="hentry has-featured">
                                <div class="property-featured">
                                    <a class="content-thumb" href="">
                                        <img src="images/no_image.png" alt="" class="attachment-agent-thumb cont_img" alt="" />
                                    </a>
                                </div>
                                <div class="agent-wrap">
                                    <div class="agent-summary">
                                        <div class="agent-info">

                                            <hr>
                                            <div>Todos los cuidados para tu mascota en tu vivienda nueva</div>
                                            <div class="buttton ver-mas"><a href="" style="color: #fff; font-size: 15px; ">Ver más</a></div>
                                            <div><i class="fa fa-calendar-alt"></i> Fecha</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
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
                    <h3>Nuestros Asesores</h3>
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
                    <h3 class="text-center">Nuestras Alianzas y Afiliaciones</h3>
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
<!-- <script type="text/javascript" src="js/search.js"></script>
<script type="text/javascript" src="js/jquery.nouislider.all.min.js"></script> -->
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/buscador.js"></script>
<!-- barra de rangos -->
<script src="js/rangos.js"></script>

</html>