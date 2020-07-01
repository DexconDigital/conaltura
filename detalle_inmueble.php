<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Inmueble</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta property="title" content="Inmueble <?php echo $codigo; ?> de Conaltura" />
    <meta property="og:site_name" content="Conaltura" />
    <meta property="og:url" content="https://www.conalturainmobiliaria.com/detalle-inmueble.php?dt=<?php echo $codigo; ?>" />
    <meta property="og:type" content="place" />
    <meta property="og:title" content="Inmueble <?php echo $codigo; ?> de Conaltura" />
    <meta property="og:description" id="metap" content="Inmueble de Conaltura" />
    <meta property="og:image" content="<?php echo $r["fotos"][0]["foto"]; ?>" id="metai" />
    <link rel="shortcut icon" href="images/icon/favicon.jpg.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="./css/carousel.tamanos.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link rel="stylesheet" href="css/responsive.css">
    
</head>

<style>
    @media screen and (min-width:320px) and (max-width:768px)
    {.mapa_detalle1{
        display: none;
     }}
    @media screen and (min-width:1024px) and (max-width:1140px)
    {.mapa_detalle1{
        display: inherit;
     }}
     @media screen and (min-width:320px) and (max-width:768px)
    {.mapa_detalle2{
        display: inherit;
     }}
    @media screen and (min-width:1024px) and (max-width:2560px)
    {.mapa_detalle2{
        display: none;
     }}
</style>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- Buscador -->
    <?php include 'layout/buscador.php'; ?>

    <section>
        <div class="container">
            <div class="col-12">
                <div class="noo-wrapper">

                    <div class="container noo-mainbody">
                        <div class="noo-mainbody-inner">
                            <div class="row clearfix">

                                <div class="noo-content col-lg-8 col-md-12 col-12 p-0">

                                    <article class="property">
                                        <h1 class="property-title"> Detalle del Inmueble 472-704<small id="">Cumbres, Envigado</small>
                                        </h1>
                                        <ul class="social-list property-share clearfix">
                                            <li><a href="httpss://www.facebook.com/sharer/sharer.php?u=https://www.conalturainmobiliaria.com/detalle-inmueble.php?dt=<?php echo $codigo; ?>" target="_blank"><i class="fab fa-facebook-f social-top2"></i></a></li>
                                            <li><a href="httpss://twitter.com/?status=Me encanta este Inmueble de https://www.conalturainmobiliaria.com/detalle-inmueble.php?dt=<?php echo $codigo; ?>" target="_blank"><i class="fab fa-twitter social-top2"></i></a></li>
                                            <li><a href="httpss://plus.google.com/share?url=https://www.conalturainmobiliaria.com/detalle-inmueble.php?dt=<?php echo $codigo; ?>" target="_blank"><i class="fab fa-google-plus-g social-top2"></i></a></li>
                                            <li><a href="whatsapp://send?text= https://www.conalturainmobiliaria.com/detalle-inmueble.php?dt=<?php echo $codigo; ?>" data-action="share/whatsapp/share"><i class="fab fa-whatsapp social-top2"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-envelope social-top2"></i></a></li>
                                            <li><a href="detalle-inmueble.php?dt=<?php echo $codigo; ?>" title="Imprimir" onClick="window.print()" target="_blank"><i class="fas fa-print social-top2"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                        <div class="text-center">
                                            <!-- main slider carousel items -->
                                            <section class="mt-3" id="slide-detalle">
                                                <?php
                                                if (isset($r['fotos'])) {
                                                    for ($i = 0; $i < count($r['fotos']); $i++) {
                                                        echo '<div class="contenedor-img">
                                                      <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                                              </div>';
                                                    }
                                                } else {
                                                    echo  '<div class="contenedor-img">
                                                             <img src="images/no_image.png" alt="">
                                                            </div>';
                                                }
                                                ?>
                                            </section>
                                            <section class="vertical-center-4 slider" id="miniaturas">
                                                <?php
                                                if (isset($r['fotos'])) {
                                                    for ($i = 0; $i < count($r['fotos']); $i++) {
                                                        echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                                    }
                                                } else {
                                                    echo  '<div class="contenedor-img">
                                                                <img src="images/no_image.png" alt="">
                                                           </div>
                                                           ';
                                                }
                                                ?>
                                            </section>
                                        </div>
                                        <!-- <div class="carousel slide" id="myCarousel" data-ride="carousel">
                                            <div class="carousel-inner"></div>
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="top:50%;">
                                                <span class="glyphicon fa fa-toggle-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next" style="top:50%;">
                                                <span class="glyphicon fa fa-toggle-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div> -->
                                        <div class="property-summary">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="property-detail">
                                                        <h4 class="property-detail-title">Características</h4>
                                                        <div class="property-detail-content">
                                                            <div class="detail-field row">
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-home"></i> Tipo de Inmueble </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value"><a href="#" rel="tag" id="tipo"> Apartamento</a></span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-map-marker-alt"></i> Barrio </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value"><a href="#" rel="tag" id="barrio">Santa Librada </a></span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-map-marker-alt"></i> Ciudad </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value"><a href="#" rel="tag" id="ciudad"> Medellin</a></span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-dollar"></i> Precio </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value">
                                                                    <span class="amount" id="precio"> $2.200.000</span> </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-compress"></i> Area </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value" id="area"> 79.00 mts<s>2</s> </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label" style="font-size: 13px;"><i class="fa fa-bed"></i> Alcobas </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value" id="alcobas"> 2</span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-bath"></i> Baños </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value" id="banios"> 2</span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-bullseye"></i> Gestión </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value" id="gestion">Arriendo </span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="property-desc">
                                                        <h4 class="property-detail-title">Descripción</h4>
                                                        <p id="descripcion" class="texto_descrip">
                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi quis vel quo doloribus vero tenetur quas ipsa eaque? Voluptate, non at. Nihil rem, sit iure laboriosam deleniti quis adipisci numquam.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- caracteristicas -->
                                        <div class="">
                                            <div class="row">
                                                <!-- Externas -->
                                                <div class="col-md-12">
                                                    <div class="property-desc">
                                                        <h4 class="property-detail-title">Características Externas</h4>
                                                        <ul class="lista_detalle">
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Internas -->
                                                <div class="col-md-12">
                                                    <div class="property-desc">
                                                        <h4 class="property-detail-title">Características Internas</h4>
                                                        <ul class="lista_detalle">
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                            <li>Texto</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="property-summary mapa_detalle2">
                                            <div class="property-map mt-5">
                                                <div class="container">
                                                    <h4 class="property-map-title">Ubicación</h4>
                                                </div>
                                                <div class="property-map-content p-0">
                                                    <div class="map-position">
                                                        <div id="map" style="height:300px">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.442682422836!2d-75.57216528568385!3d6.205189828504449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e468281a2c06633%3A0xd2912572b12fe1d4!2sCl.%205A%20%2339%2095%20Oficina%20306%2C%20Edificio%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1592934457478!5m2!1ses-419!2sco" width="600%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </article>
                                </div>


                                <div class="noo-sidebar noo-sidebar-right col-lg-4 col-xs-12 col-md-12 col-12">
                                    <div class="noo-sidebar-inner mb-4">
                                        <div class="block-sidebar recent-property">
                                            <h3 class="title-block-sidebar">Propiedades Similares</h3>
                                            <div class="featured-property">
                                                <ul class="similarListing">
                                                    <!-- cards -->
                                                    <li>
                                                        <div class="featured-image">
                                                            <a href=""><img src="images/no_image.png" alt="" style="height: 60px; object-fit:contain;"></a>
                                                        </div>
                                                        <div class="featured-decs">
                                                            <span class="featured-status"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">472-123</a></span>
                                                            <h4 class="featured-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">Bogotá Cundinamarca</a></h4>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="featured-image">
                                                            <a href=""><img src="images/no_image.png" alt="" style="height: 60px;object-fit:contain;"></a>
                                                        </div>
                                                        <div class="featured-decs">
                                                            <span class="featured-status"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">472-123</a></span>
                                                            <h4 class="featured-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">Bogotá Cundinamarca</a></h4>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="featured-image">
                                                            <a href=""><img src="images/no_image.png" alt="" style="height: 60px;object-fit:contain;"></a>
                                                        </div>
                                                        <div class="featured-decs">
                                                            <span class="featured-status"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">472-123</a></span>
                                                            <h4 class="featured-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">Bogotá Cundinamarca</a></h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="noo-sidebar-inner">

                                        <div class="block-sidebar recent-property">
                                            <h3 class="title-block-sidebar">Contacto con Asesor</h3>
                                            <div class="featured-property">
                                                <p class="detalle-asesor">
                                                    <p class="p1">Nombre y Apellido </p>
                                                    <p class="p1"><a href="" target="_blank"><i class="fa fa-envelope"></i> correo@dominio.com</p></a>
                                                    <p class="p1"><a href="" target="_blank"><i class="fa fa-phone"></i> 123-456-789</p></a>
                                                    <p class="p1"><a href="" target="_blank"><i class="fa fa-phone"></i> 310-123-1212</p></a>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="block-sidebar recent-property">
                                        <center>
                                            <div class="btn-atras">
                                                <i class="fa fa-arrow-left" style=" color:  black;"></i>
                                            </div>
                                            <h3 class="title-block-sidebar">Regresar a la pagina anterior</h3>
                                        </center>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="">
        <div class="property-map mapa_detalle1">
            <div class="container">
                <h4 class="property-map-title">Ubicación</h4>
            </div>
            <div class="property-map-content p-0">
                <div class="map-position">
                    <div id="map" style="height:300px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.442682422836!2d-75.57216528568385!3d6.205189828504449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e468281a2c06633%3A0xd2912572b12fe1d4!2sCl.%205A%20%2339%2095%20Oficina%20306%2C%20Edificio%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1592934457478!5m2!1ses-419!2sco" width="600%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/archivosfooter.php'; ?>
<script src="js/slick.min.js"></script>
<script>
    $(".btn-atras").click(function() {
        window.history.back();


    });
</script>
<script>
    $('#slide-detalle').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '#miniaturas'
    });
    $('#miniaturas').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#slide-detalle',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        variableWidth: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });
</script>

</html>