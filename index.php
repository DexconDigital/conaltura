<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="shortcut icon" href="images/icon/favicon.jpg.png" type="image/x-icon">
    <?php include 'layout/archivosheader.php'; ?>
    <?php require 'variables/metaEtiquetas.php'; ?>
</head>

<body>
    <!-- Menu  Inicial-->
    <header class="noo-header">

        <div class="top-header header-ppal">
        </div>
        <div class="main-nav-wrap container menu-ppal">
        </div>

    </header>
    <!-- Buscador -->
    <section id="search-box" class="wrap search-box">
        <div class="gsearch" style="background: #005f68;">
            <div class="container tamaño_buscador">
                <div class="gsearch-wrap">
                    <div class="gsearch-content">
                        <div class="gsearch-field">
                            <div class="form-group gbath">
                                <span class="gprice-label">Tipo de Operación</span>
                                <div class="label-select">
                                    <select class="form-control operacion">
                                        <option>¿En venta o Arriendo?</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group gbed">
                                <span class="gprice-label">Tipo de Inmueble</span>
                                <div class="label-select">
                                    <select class="form-control inmueble">
                                        <option>Tipo de Inmueble</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group gsub-location">
                                <span class="gprice-label">Ciudad</span>
                                <div class="label-select">
                                    <select class="form-control ciudad">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group gstatus">
                                <span class="gprice-label">Barrio</span>
                                <div class="label-select">
                                    <select class="form-control zona">
                                        <option>Barrio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="codigo">
                                <span class="gprice-label">Código</span>
                                <input class="form-control codeInm" placeholder="472-">
                            </div>
                            <div class="form-group gprice">
                                <span class="gprice-label">Precio</span>
                                <div class="gslider-range gprice-slider-range"></div>
                                <span class="gslider-range-value gprice-slider-range-value-min" id="input-number-1"></span>
                                <span class="gslider-range-value gprice-slider-range-value-max" id="input-number"></span>
                            </div>

                        </div>
                        <div class="gsearch-action">
                            <div class="gsubmit">
                                <button class="btn btn-deault search-1">Buscar</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- inmuebles en arreindo -->
    <section id="arriendo" class="espacio_destacadas">
        <div class="container">
            <h3 class="titulos">Propiedades Destacadas en Arriendo</h3>
            <div class="col-12">
                <div class="d-flex flex-wrap align-items-center justify-content-center ">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <img src="images/other/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <img src="images/other/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <img src="images/other/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inmuebles en venta -->
    <section id="arriendo" class="espacio_destacadas">
        <div class="container">
            <h3 class="espacio_destacadas titulos">PROPIEDADES DESTACADAS EN VENTA</h3>
            <div class="col-12">
                <div class="d-flex flex-wrap align-items-center justify-content-center ">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <img src="images/other/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <img src="images/other/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <img src="images/other/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
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
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <img src="images/other/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <img src="images/other/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <img src="images/other/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
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
                <div class="owl-carousel owl-carousel1  owl-theme ">


                    <div class="item">
                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/Asesores-02.jpg" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Diego Mauricio Piedrahita</div>
                                        <div class="fuente_asesor">Asesor Comercial</div>
                                        <div><i class="fa fa-envelope-square"></i><a href="mailto:dmpiedrahita@conaltura.com" class="__cf_email__" style="font-size: 10px;"> dmpiedrahita@conaltura.com</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3017235158"> 3017235168</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898 Extension 217</a></div>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>

                    <div class="item">

                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/VeronicaTabares.png" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Veronica Tabares</div>
                                        <div class="fuente_asesor">Secretaria</div>
                                        <div><i class="fa fa-envelope-square"></i><a href="mailto:vtabares@conaltura.com" class="__cf_email__">
                                                vtabares@conaltura.com</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898 Extension 217</a></div>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>

                    <div class="item">
                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/Asesores_Mesa de trabajo 1.jpg" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Fauto Arias</div>
                                        <div class="fuente_asesor">Director</div>
                                        <div><i class="fa fa-envelope-square"></i><a href="mailto:farias@conaltura.com " class="__cf_email__">
                                                farias@conaltura.com</a></div>

                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898</a></div>
                                    </div>

                                </div>
                            </div>

                        </article>

                    </div>
                    <div class="item">

                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/Asesores-03.jpg" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Fabio Leon Jimenez</div>
                                        <div class="fuente_asesor">Asesor Comercial</div>
                                        <div><i class="fa fa-envelope-square"></i><a href="mailto:fjimenez@conaltura.com" class="__cf_email__">
                                                fjimenez@conaltura.com</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3128945407"> 3128945407</a></div>
                                        <div><i class="fa fa-phone"></i><a href="tel:3229898"> 322 9898 ext 216</a></div>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>
                    <div class="item">

                        <article class="fondo_blanco_asesores">
                            <div class="agent-featured" style="width: 50%;display: table-cell;">
                                <div class="">
                                    <img src="images/Fotografia_Adriana_Molina sin fondo.png" class="attachment-agent-thumb" alt="" />
                                </div>
                            </div>
                            <div class="agent-wrap" style="width: 50%;display: table-cell;vertical-align: top;">

                                <div class="">
                                    <div class="agent-info">
                                        <div class="fuente_asesor">Adriana Molina Tamayo</div>
                                        <div class="fuente_asesor">Asesor Comercial</div>
                                        <div><i class="fa fa-envelope-square"></i><a href="mailto:amolina@conaltura.com" class="__cf_email__">
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
                <div class="owl-carousel owl-carousel2 owl-theme">

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

    <footer class="footer">
        <div class="footer-nav">
            <div class="container contenedor_footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-nav-col">
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
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-nav-col">
                        <div class="ft-featured-properties">
                            <h4 class="ft-col-title">Propiedades Destacadas en Venta</h4>
                            <div class="featured-property">
                                <!-- <ul id="ulti-prop-v">
                                </ul> -->
                                </div>
                            </div>
                        <div class="ft-featured-properties">
                            <h4 class="ft-col-title">Propiedades Destacadas en Arriendo</h4>
                            <div class="featured-property">
                                <!-- <ul id="ulti-prop-a">
                                </ul> -->
                                </div>
                            </div>
                        </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-nav-col">
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
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-nav-col">
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
                    <div class="col-xs-12 col-sm-6 text-block"> 
                        <div class="logo-image">
                            <a href="index.html"><img src="images/other/conaltura.png" alt="CitiLights" style="height: 70px;width: 163px;"></a>
                            </div>
                        </div>
                    <div class="col-xs-12 col-sm-6 logo-block">
                        Copyright
                        &copy; 2018 
                         <a href="https://www.dexcondigital.com/" target="_blank">Dexcon Digital.</a> Todos los derechos reservados.
                        <br />


                        </div>
                    </div>
                </div>
            <div id="back-to-top" class="back-to-top">
                <i class="fa fa-angle-up"></i>
                </div>
            </div>
    </footer>
</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>