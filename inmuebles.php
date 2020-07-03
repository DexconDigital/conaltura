<?php
include 'controllers/miniaturasController.php';
require 'controllers/indexController.php';
?>
<?php
require 'controllers/inmueblesController.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmuebles</title>
    <meta name="description" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/rangos.css">


</head>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- Buscador -->
    <?php include 'layout/buscador.php'; ?>

    <!-- mapa -->
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.442682422836!2d-75.57216528568385!3d6.205189828504449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e468281a2c06633%3A0xd2912572b12fe1d4!2sCl.%205A%20%2339%2095%20Oficina%20306%2C%20Edificio%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1592934457478!5m2!1ses-419!2sco" width="600%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <!-- inmuebles -->
    <section id="" class="espacio_destacadas">
        <div class="container p-0">
            <div class="col-12 p-0">
                <div class="col-12">
                    <?php $totalinmuebles = 0;
                    if (is_array($api)) {
                        $totalinmuebles = $api['datosGrales']['totalInmuebles'];
                    } ?>
                    <h4 class="">Se han encontrado <span><?php echo $totalinmuebles ?></span> inmuebles</h4>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-center ">
                    <!-- <article class="hentry arriendo">
                            <div class="property-featured">
                                <a class="content-thumb" href="detalle_inmueble.php">
                                    <img src="images/no_image.png" style="object-fit: cover;" alt="">
                                    <span class="property-label"> Código</span>
                                    <span class="property-category-2"> Apartamento</span>
                                </a>
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
                        </article> -->
                    <!-- Inmuebles -->
                    <?php
                    if (is_array($api)) {
                        listar_inmuebles($api['Inmuebles']);
                    } else {
                        echo '<div class="col-12">
                                     <h2 class="text-center" >No se encontraron inmuebles</h2>
                                     </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <?php if (is_array($api)) : ?>
                <ul class="pagination mt-4 align-items-end justify-content-center">
                    <?php if ($paginator->getPrevUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                    <?php endif; ?>
                    <?php foreach ($paginator->getPages() as $page) : ?>
                        <?php if ($page['url']) : ?>
                            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($paginator->getNextUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>

    </section>

    <!-- footer -->

    <!-- <div id="back-to-top" class="back-to-top"> -->
    <i class="fa fa-angle-up subir"></i>
    <!-- </div>   -->
    <footer class="footer">
        <div class="footer-nav">
            <div class="container contenedor_footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 footer-nav-col">
                        <div class="ft-about-us">
                            <h4 class="ft-col-title">Conaltura Inmobiliaria</h4>
                            <div class="text-block">
                                <p>CONALTURA INMOBILIARIA fue fundada en junio de 2016 con el propósito de ofrecer los servicios de administración, arrendamientos y venta de
                                    propiedad raíz destinada ya sea para vivienda o para locales comerciales, oficinas, bodegas u otros.
                                </p>
                            </div>
                        </div>
                        <h4 class="ft-col-title">Número de Visitas</h4>
                        <!-- <a href="https://www.contadorvisitasgratis.com" title="contadores para web"> -->
                        <a href="" title="contadores para web">
                            <img src="https://counter5.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=x21rex5ewkubbf5pcf2ztncgnq4llm1p" border="0" title="contadores para web" alt="contadores para web"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 footer-nav-col">
                        <div class="ft-featured-properties">
                            <h4 class="ft-col-title">Propiedades Destacadas en Venta</h4>
                            <div class="featured-property">
                                <ul>
                                    <!-- cards -->

                                    <li>
                                    <div class="featured-image">
                                        <a href="detalle_inmueble.php"><img src="images/no_image.png" alt="" style="height: 55px; object-fit:container;"></a>
                                    </div>
                                    <div class="featured-decs">
                                        <span class="featured-status"><a href="index.php"></a></span>
                                        <h4 class="featured-title"><a href="detalle_inmueble.php">Maria Auxiliadora, Sabaneta</a></h4>
                                    </div>
                                </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="ft-featured-properties">
                            <h4 class="ft-col-title">Propiedades Destacadas en Arriendo</h4>
                            <div class="featured-property">
                                <ul>
                                    <!-- cards -->
                                    <li>
                                    <div class="featured-image">
                                        <a href="detalle_inmueble.php"><img src="images/no_image.png" alt="" style="height: 55px; object-fit:container;"></a>
                                    </div>
                                    <div class="featured-decs">
                                        <span class="featured-status"><a href="index.php"></a></span>
                                        <h4 class="featured-title"><a href="detalle_inmueble.php">Maria Auxiliadora, Sabaneta</a></h4>
                                    </div>
                                </li>
                                   

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 footer-nav-col">
                        <div class="ft-useful-links">
                            <h4 class="ft-col-title">Formularios Aseguradoras</h4>
                            <nav class="useful-links-menu" role="navigation">
                                <ul>
                                    <li class="menu-item"><a href="Formularios Aseguradoras/Formulario FGI persona juridica.pdf" target="_blank">Formulario FGI Persona Juridica</a></li>
                                    <li class="menu-item"><a href="Formularios Aseguradoras/Formulario FGI persona natural.pdf" target="_blank">Formulario FGI Persona Natural</a></li>
                                    <li class="menu-item"><a href="Formularios Aseguradoras/Formulario-Persona Natural-El Libertador.pdf" target="_blank">Formulario Persona Natural El Libertador</a></li>
                                    <li class="menu-item"><a href="Formularios Aseguradoras/Formulario-Persona-Juridica-El Libertador.pdf" target="_blank">Formulario Persona Juridica El Libertador</a></li>
                                    <li class="menu-item"><a href="Formularios Aseguradoras/SOLICITUD CODEUDOR (gnal).pdf" target="_blank">Solicitud Codeudor Grupo Sura</a></li>
                                    <li class="menu-item"><a href="Formularios Aseguradoras/INQUILINO PERSONA NATURAL.PDF" target="_blank">Solicitud Persona Natural Grupo Sura</a></li>
                                    <li class="menu-item"><a href="Formularios Aseguradoras/INQUILINO PERSONA JURIDICA.PDF" target="_blank">Solicitud Persona Juridica Grupo Sura</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 footer-nav-col">
                        <div class="ft-contact-info">
                            <h4 class="ft-col-title">Contáctanos</h4>
                            <ul class="detail-contact-info">
                                <li><i class="fa fa-map-marker-alt"></i>&nbsp;<label>Cr 39 5ª 95 Oficina 306,</label>
                                    <br>
                                    <label style="margin-left: 47px;">Edificio Avantgarde- Poblado, Medellín </label>
                                </li>
                                <li><a href="tel:0342662277" target="_blank"><i class="fa fa-phone"></i>&nbsp;(034)2662277, ext 4</a></li>
                                <li><a href="tel:0342662277" target="_blank"><i class="fa fa-phone"></i>&nbsp;(034)2662277, ext 209</a></li>
                                <li><a href="tel:0343229898" target="_blank"><i class="fa fa-phone"></i>&nbsp;(034)3229898</a></li>
                                <li><a href="https://wa.me/573193777281" target="_blank"><i class="fab fa-whatsapp"></i>&nbsp; 319 377 7281 </a></li>
                                <li><i class="fa fa-envelope"></i>&nbsp;<a href="mailto:inmobiliaria@conaltura.com" target=":_blank">inmobiliaria@conaltura.com</span></a></li>
                                <li><i class="fa fa-calendar-alt"></i>&nbsp;<label>Horario de Atención: </label>
                                    <br>
                                    <label style="margin-left: 47px;">Lunes a Viernes: </label>
                                    <br>
                                    <label style="margin-left: 47px;">7:30 am - 12:45 pm</label>
                                    <br>
                                    <label style="margin-left: 47px;">2:00 pm - 6:00 pm</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-12 text-block">
                        <div class="logo-image">
                            <a href="index.html"><img src="images/other/conaltura.png" alt="CitiLights" style="height: 70px;width: 163px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-12 logo-block copy d-flex align-items-center">
                        <p>Diseñado y Desarrollado por&nbsp<a href="https://www.dexcondigital.com/" style="font-weight: bold;color: #4d4d4d;" target="_blank"> Dexcon Digital.</a>
                            &copy; Copyright 2020 para <a href="index.php" style="font-weight: bold;color: #4d4d4d;" target="_blank">Conaltura Inmobiliaria.</a> Todos los derechos reservados. </p>
                        <br />


                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<?php include 'layout/archivosfooter.php'; ?>
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/buscador.js"></script>
<!-- barra de rangos -->
<script src="js/rangos.js"></script>

</html>