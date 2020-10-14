<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Quienes Somos | Conaltura Inmobiliaria</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include 'layout/archivosheader_quienes_somos.php' ?>
    <?php require 'controllers/bannerController.php'; ?>
    <?php require 'controllers/textoController.php'; ?>
    <?php require 'controllers/valoresController.php'; ?>
    <?php require 'controllers/serviciosController.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-6655257-31', 'auto');
        ga('send', 'pageview');
    </script>
    <style>
        #redes_conaltura {
            background-color: white !important;
            height: auto !important;
            position: fixed !important;
            left: 0 !important;
            top: 30% !important;
            z-index: 1000 !important;
            padding: 10px !important;
            border-top-right-radius: 25px !important;
            border-bottom-right-radius: 25px !important;
            width: auto !important;
        }

        #redes_conaltura .elementor-social-icon {
            background-color: rgba(255, 255, 255, 0) !important;
            font-size: 17px !important;
            border-style: solid !important;
            border-width: 1px 1px 1px 1px !important;
            border-color: #80bc00 !important;
            border-radius: 50% !important;
            margin-bottom: 3px !important;
            padding: .5em !important;
        }

        #redes_conaltura .elementor-social-icon:hover {
            background-color: #80BC00 !important;
        }

        #redes_conaltura i {
            width: 1em !important;
            height: 1em !important;
            position: relative !important;
            display: block !important;
            font-weight: 400 !important;
            color: #80bc00 !important;
            text-align: center !important;
        }

        #redes_conaltura i:hover {
            color: white !important;
        }

        .accordion {
            font-size: 1rem;
            /* width: 30vw; */
            margin: 0 auto;
            border-radius: 5px;
        }

        .accordion-header,
        .accordion-body {
            background: white;
        }

        .accordion-header {
            padding: 0.7em 0.7em;
            background: #F5F5F5;
            color: #095C70;
            cursor: pointer;
            font-size: 20px;
            /* letter-spacing: .1em; */
            transition: all .3s;
            /* text-transform: uppercase; */
        }

        .accordion__item {
            /* border-bottom: 1px solid #3a4ba4; */

        }

        .accordion__item .accordion__item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            margin-top: 2px;
        }

        .accordion-header:hover {
            background: #80BC00;
            color: white;
            position: relative;
            z-index: 5;
        }

        .accordion-body {
            background: #fcfcfc;
            color: #7B7B7B;
            margin-top: 22px;
            padding: 0% 3%;
            display: none;
        }

        .accordion-body__contents {
            padding: 0.7em 0.7em;
            font-size: 16px;
        }

        .accordion__item.active:last-child .accordion-header {
            border-radius: none;
        }

        .accordion:first-child>.accordion__item>.accordion-header {
            border-bottom: 1px solid transparent;
        }

        .accordion__item>.accordion-header:after {
            content: "\f3d0";
            font-family: IonIcons;
            /* font-size: 1.2em; */
            float: right;
            position: relative;
            top: -2px;
            transition: .3s all;
            transform: rotate(0deg);
        }

        .accordion__item.active>.accordion-header:after {
            transform: rotate(-180deg);
        }

        .accordion__item.active .accordion-header {
            background: #80BC00;
            color: white;
            ;
        }

        .accordion__item .accordion__item .accordion-header {
            background: #80BC00;
            color: white;
            font-size: 15px;
        }

        @media screen and (max-width: 1000px) {
            .accordion {
                width: 100%;
            }
        }
    </style>

</head>

<body class="page-right-sidebar">
    <div class="site">

        <!-- Menu  Inicial-->
        <?php include 'layout/menu.php'; ?>
        <!-- redes sociales -->
        <?php include 'layout/redes.php'; ?>
        <!-- fin redes sociales -->
        <!-- Descripcion empresa -->
        <div class="noo-wrapper">
            <section id="slideshow-home" class="wrap noo-slideshow slideshow-home">
                <div class="property-slider">
                    <div id="noo-slider-1" class="noo-slider noo-property-slide-wrap text-center">
                        <?php
                        bannerquienes();
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>

            <div class="container noo-mainbody">
                <div class="noo-mainbody-inner">
                    <div class="row clearfix">

                        <div class="noo-content">
                            <div class="page-content">
                                <!-- Texto de descripcion quienes somos -->
                                <div class="contact-map">
                                    <?php textoquienessomos() ?>
                                </div>
                                <!-- Fin de Texto de descripcion quienes somos -->
                                <div class="accordion js-accordion">
                                    <?php textomision() ?>

                                    <?php textovision() ?>

                                    <div class="accordion__item js-accordion-item">
                                        <div class="accordion-header js-accordion-header">Valores</div>
                                        <div class="accordion-body js-accordion-body">
                                            <!-- <div class="accordion-body__contents">
                                               
                                            </div> -->
                                            <div class="accordion js-accordion">
                                                <?php valoruno(); ?>
                                                <?php valordos(); ?>
                                                <?php valortres(); ?>
                                                <?php valorcuatro(); ?>
                                            </div><!-- end of sub accordion -->
                                        </div><!-- end of accordion body -->
                                    </div><!-- end of accordion item -->
                                </div><!-- end of accordion -->


                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="container mt-2">
            <div class="text-block">
                <h4 class="titulo_quienes">Nuestros Servicios</h4>
            </div>

        </div>

        <section id="our-sevices" class="wrap our-sevices">
            <div class="container">
                <div class="parallax">
                    <?php
                    bannervalores();
                    ?>

                    <div class="overlay"></div>
                    <div class="our-sevices-content">
                        <div class="col-12 d-flex justify-content-center flex-wrap clearfix">
                            <!-- 
                                <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 our-sevices-col">
                                <span class="service-icon">
                                    <a href="inmuebles.php" style="color: #fff; ">
                                        <i class="fa fa-key"></i></a>
                                </span>
                                <hr class="noo-gap">
                                <div class="text-block">

                                    <h5 class="text-light" style="color: #fff; ">Arrendamiento de Vivienda</h5>

                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 our-sevices-col">
                                <span class="service-icon">
                                    <a href="inmuebles.php" style="color: #fff; ">
                                        <i class="fa fa-vector-square"></i></a>
                                </span>
                                <hr class="noo-gap">
                                <div class="text-block">
                                    <h5 class="text-light" style="color: #fff; ">Arrendamiento de Locales</h5>

                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 our-sevices-col">
                                <span class="service-icon">
                                    <a href="inmuebles.php" style="color: #fff; ">
                                        <i class="fa fa-building"></i></a>
                                </span>
                                <hr class="noo-gap">
                                <div class="text-block">
                                    <h5 class="text-light" style="color: #fff; ">Arrendamiento de Oficinas</h5>

                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 our-sevices-col">
                                <span class="service-icon">
                                    <a href="inmuebles.php" style="color: #fff; ">
                                        <i class="fa fa-home"></i></a>
                                </span>
                                <hr class="noo-gap">
                                <div class="text-block">
                                    <h5 class="text-light" style="color: #fff; ">Venta de Apartamentos</h5>

                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 our-sevices-col">
                                <span class="service-icon">
                                    <a href="inmuebles.php" style="color: #fff; ">
                                        <i class="fa fa-money-check-alt"></i></a>
                                </span>
                                <hr class="noo-gap">
                                <div class="text-block">
                                    <h5 class="text-light" style="color: #fff; ">Venta de Locales</h5>

                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 our-sevices-col">
                                <span class="service-icon">
                                    <a href="contactanos.php" style="color: #fff; ">
                                        <i class="fa fa-handshake"></i></a>
                                </span>
                                <hr class="noo-gap">
                                <div class="text-block">
                                    <h5 class="text-light" style="color: #fff; ">Administración de Inmuebles</h5>

                                </div>
                            </div> -->
                            <?php
                            if (is_array($Servicio_array)) {
                                Servicios($Servicio_array);
                            } else {
                                echo '<h2 class="text-center" style="color:white;" >No hay servicios disponibles</h2>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    </div>
    <?php include 'layout/footer.php' ?>


</body>
<?php include 'layout/archivosfooter_quienes_somos.php' ?>
<script>
    $(document).ready(function() {
        var altura = $('.menu').offset().top;
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > altura) {
                $('.menu').addClass('menu-fixed');
            } else {
                $('.menu').removeClass('menu-fixed');
            }
        });

    });
</script>
<script>
    var accordion = (function() {

        var $accordion = $('.js-accordion');
        var $accordion_header = $accordion.find('.js-accordion-header');
        var $accordion_item = $('.js-accordion-item');

        // default settings 
        var settings = {
            // animation speed
            speed: 400,

            // close all other accordion items if true
            oneOpen: false
        };

        return {
            // pass configurable object literal
            init: function($settings) {
                $accordion_header.on('click', function() {
                    accordion.toggle($(this));
                });

                $.extend(settings, $settings);

                // ensure only one accordion is active if oneOpen is true
                if (settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                    $('.js-accordion-item.active:not(:first)').removeClass('active');
                }

                // reveal the active accordion bodies
                $('.js-accordion-item.active').find('> .js-accordion-body').show();
            },
            toggle: function($this) {

                if (settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
                    $this.closest('.js-accordion')
                        .find('> .js-accordion-item')
                        .removeClass('active')
                        .find('.js-accordion-body')
                        .slideUp()
                }

                // show/hide the clicked accordion item
                $this.closest('.js-accordion-item').toggleClass('active');
                $this.next().stop().slideToggle(settings.speed);
            }
        }
    })();

    $(document).ready(function() {
        accordion.init({
            speed: 300,
            oneOpen: true
        });
    });
</script>

</html>