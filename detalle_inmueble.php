<?php
require 'controllers/detalleInmuebleController.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Inmueble</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- facebook -->
    <meta property="title" content="Inmueble <?php echo $co; ?> de Conaltura" />
    <meta property="og:site_name" content="Conaltura" />
    <meta property="og:url" content="https://www.conalturainmobiliaria.com/detalle-inmueble.php?dt=<?php echo $co; ?>" />
    <meta property="og:type" content="place" />
    <meta property="og:title" content="Inmueble <?php echo $co; ?> de Conaltura" />
    <meta property="og:description" id="metap" content="Inmueble de Conaltura" />
    <meta property="og:image" content="<?php echo $r["fotos"][0]["foto"]; ?>" id="metai" />
    <!-- fin facebook -->
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>">
    <meta name="twitter:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> ">
    <meta name="twitter:image" content="<?php echo $r['fotos'][0]['foto']; ?>">
    <!-- fin de datos para compartir por twitter -->
    <link rel="shortcut icon" href="images/icon/favicon.jpg.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="./css/carousel.tamanos.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/rangos.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>
</head>

<style>
    @media screen and (min-width:300px) {
        .lista_detalle {
            column-count: 1;
        }
    }

    @media screen and (min-width:768px) {
        .lista_detalle {
            column-count: 2;
        }
    }

    @media screen and (min-width:1024px) {
        .lista_detalle {
            column-count: 2;
        }
    }

    @media screen and (min-width:1140px) {
        .lista_detalle {
            column-count: 2;
        }
    }

    #map {
        height: 400px;
        z-index: 20;
    }

    .leaflet-control {
        z-index: 200;
    }

    .leaflet-control {
        z-index: 20;
    }

    .titulo_ubicacion {
        font-size: 27px;
        color: #095C70;
        font-weight: 700;
    }

    @media screen and (min-width:300px) {
        .titulo_ubicacion {
            padding-left: 9%;
        }
    }

    @media screen and (min-width:420px) {
        .titulo_ubicacion {
            padding-left: 7%;
        }
    }

    @media screen and (min-width:768px) {
        .titulo_ubicacion {
            margin-right: -1%;
            padding-left: inherit
        }
    }

    @media screen and (min-width:1024px) {
        .titulo_ubicacion {
            margin-right: -1%;
            padding-left: inherit
        }
    }

    @media screen and (min-width:1140px) {
        .titulo_ubicacion {
            margin-right: 8%
        }
    }

    @media screen and (min-width:420px) {
        #video {
            height: 295px;
            width: 718px;
        }
    }

    @media screen and (min-width:320px) {
        #video {
            height: 295px;
            width: 718px;
        }
    }

    @media screen and (min-width:768px) {
        #video {
            height: 295px;
            width: 718px;
        }
    }

    @media screen and (min-width:1020px) {
        #video {
            width: 718px;
            height: 500px;
        }
    }

    @media screen and (min-width:1140px) {
        #video {
            width: 718px;
            height: 500px;
        }
    }

    @media screen and (min-width:300px) {
        .form_detalle {
            padding: 0;
        }
    }

    @media screen and (min-width:420px) {
        .form_detalle {
            padding: 0;
        }
    }

    @media screen and (min-width:768px) {
        .form_detalle {
            padding: 0;
        }
    }

    @media screen and (min-width:1024px) {
        .form_detalle {
            padding: inherit;
        }
    }

    @media screen and (min-width:1140px) {
        .form_detalle {
            padding: inherit;
        }
    }

    @media screen and (min-width:330px) {
        .formulariob {
            display: none;
        }
    }

    @media screen and (min-width:1024px) {
        .formulariob {
            display: inherit;
        }
    }

    @media screen and (min-width:330px) {
        .formularioa {
            display: inherit;
        }
    }

    @media screen and (min-width:1024px) {
        .formularioa {
            display: none;
        }
    }

    @media screen and (min-width:330px) {
        .btn_atras {
            margin-top: 10%;
            margin-bottom: 10%;
        }
    }

    @media screen and (min-width:1024px) {
        .btn_atras {
            margin-top: 30%;
            margin-bottom: inherit;
        }
    }

    .sticky-top {
        z-index: 100 !important;
    }
</style>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- Buscador -->
    <?php include 'layout/buscador.php'; ?>
    <!-- redes sociales -->
    <?php include 'layout/redes.php'; ?>
    <!-- fin redes sociales -->
    <section>
        <div class="container">
            <div class="col-12">
                <div class="noo-wrapper">

                    <div class="container noo-mainbody">
                        <div class="noo-mainbody-inner">
                            <div class="row clearfix">

                                <div class="noo-content col-lg-8 col-md-12 col-12 p-0">

                                    <article class="property">
                                        <h1 class="property-title"> Detalle del Inmueble <span><?php echo $co; ?></span><small id=""><?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?></small><small id=""><?php echo $r['barrio'] . ', ' . $r['ciudad']; ?></small>
                                        </h1>
                                        <ul class="social-list property-share clearfix">
                                            <li><a href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.conalturainmobiliaria.com%2Fsupropiedad%2FdetalleInmueble%2Fcodigo%2F&amp;src=sdkpreparse/' . $co . '' ?>" target="_blank"><i class="fab fa-facebook-f social-top2"></i></a></li>
                                            <!-- <li><a href="httpss://twitter.com/?status=Me encanta este Inmueble de https://www.conalturainmobiliaria.com/detalle-inmueble.php?dt=<?php echo $co; ?>" target="_blank"><i class="fab fa-twitter social-top2"></i></a></li> -->
                                            <li><a href="<?php echo 'http://twitter.com/intent/tweet?url=http://www.conalturainmobiliaria.com/detalle_inmueble/codigo/' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fab fa-twitter social-top2"></i></a></li>
                                            <!-- <li><a href="httpss://plus.google.com/share?url=https://www.conalturainmobiliaria.com/detalle-inmueble.php?dt=<?php echo $co; ?>" target="_blank"><i class="fab fa-google-plus-g social-top2"></i></a></li> -->
                                            <li>
                                                <a data-action="share/whatsapp/share" href="<?php echo 'whatsapp://send?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20Descripción:%20' . $r['descrip'] . '%20 http://www.conalturainmobiliaria.com/detalle_inmueble/codigo/' . $co ?>" target="_blank">
                                                    <i class="fab fa-whatsapp social-top2"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-envelope social-top2"></i></a></li>
                                            <li><a href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=472-<?php echo $co; ?>" target="_blank" title="Imprimir"><i class="fas fa-print social-top2"></i></a></li>
                                            <!-- <li><a href="detalle-inmueble.php?dt=<?php echo $co; ?>" title="Imprimir" onClick="window.print()" target="_blank"><i class="fas fa-print social-top2"></i></a></li> -->
                                        </ul>
                                        <div class="clearfix"></div>
                                        <!-- fotos 360 -->
                                        <?php
                                        if ($video360 != "") {
                                            echo '
                                            <section class="">
                                            <div class="property-map mt-5">
                                                <div class="container p-0">
                                                    <h4 class="property-map-title">Foto 360</h4>
                                                </div>
                                                <div class="col-12 mt-2 p-0">
                                                    <iframe width="100%" height="315" src="' . $video360 . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                         </section>
                                                 ';
                                        } else {
                                            echo '';
                                        }
                                        ?>
                                        <!-- Video -->
                                        <div class="col-12 p-0">
                                            <?php if ($r['video'] != "") {
                                                echo '
                                                        <div class="property-desc mb-5">
                                                        <h4 class="property-detail-title">Video</h4>
                                                        <iframe id="video" src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>';
                                            } ?>
                                        </div>
                                        <!-- imagenes -->
                                        <div class="">
                                            <h4 class="property-detail-title">Imagenes</h4>
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
                                        <div class="property-summary">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="property-detail">
                                                        <h4 class="property-detail-title">Características</h4>
                                                        <div class="property-detail-content">
                                                            <div class="detail-field row">
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-home"></i> Tipo de Inmueble </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value"><a href="#" rel="tag" id="tipo"> <?php echo $r['Tipo_Inmueble'] ?></a></span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-map-marker-alt"></i> Barrio </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value"><a href="#" rel="tag" id="barrio"> </a><?php echo $r['barrio'] ?></span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-map-marker-alt"></i> Ciudad </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value"><a href="#" rel="tag" id="ciudad"> <?php echo $r['ciudad'] ?></a></span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-dollar"></i> Precio </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value">
                                                                    <span class="amount" id="precio"> <?php if ($r['Gestion'] == 'Arriendo') {
                                                                                                            echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                                                                                        } else if ($r['Gestion'] == 'Venta') {
                                                                                                            echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                                                                                        } else {
                                                                                                            echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                                                                                        } ?></span></span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-compress"></i> Area </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value" id="area"> <?php echo $area_construida; ?> mts<sup>2<sup> </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label" style="font-size: 13px;"><i class="fa fa-bed"></i> Alcobas </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value" id="alcobas"> 2</span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-bath"></i> Baños </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value" id="banios"><?php echo $banios; ?></span>
                                                                <span class="col-xs-6 col-md-3 detail-field-label"><i class="fa fa-bullseye"></i> Gestión </span>
                                                                <span class="col-xs-6 col-md-3 detail-field-value" id="gestion"><?php echo $r['Gestion'] ?></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="property-desc">
                                                        <h4 class="property-detail-title">Descripción</h4>
                                                        <p id="descripcion" class="texto_descrip">
                                                            <?php echo $descripcion ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- caracteristicas -->
                                        <div class="">
                                            <div class="row">
                                                <!-- Externas -->
                                                <?php if (count($r['caracteristicasExternas']) > 0) {
                                                    echo '<div class="col-md-12">
                                                        <div class="property-desc">
                                                        <h4 class="property-detail-title">Características Externas</h4>
                                                        <ul class="lista_detalle">';
                                                    for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                                        $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                                        echo '<li>' . $caracteristicas . '</li>';
                                                    }
                                                    echo  '</ul>
                                                        </div>
                                                        </div>
                                                        ';
                                                } ?>
                                                <!-- Internas -->
                                                <?php if (count($r['caracteristicasInternas']) > 0) {
                                                    echo '<div class="col-md-12">
                                                        <div class="property-desc">
                                                        <h4 class="property-detail-title">Características Internas</h4>
                                                        <ul class="lista_detalle">';
                                                    for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                                        $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                                        echo '<li>' . $caracteristicas . '</li>';
                                                    }
                                                    echo  '</ul>
                                                        </div>
                                                        </div>
                                                        ';
                                                } ?>
                                                <!-- Alrrededores -->
                                                <?php if (count($r['caracteristicasAlrededores']) > 0) {
                                                    echo '<div class="col-md-12">
                                                        <div class="property-desc">
                                                        <h4 class="property-detail-title">Características Alrededores</h4>
                                                        <ul class="lista_detalle">';
                                                    for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                                        $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                                        echo '<li>' . $caracteristicas . '</li>';
                                                    }
                                                    echo  '</ul>
                                                        </div>
                                                        </div>
                                                        ';
                                                } ?>
                                            </div>
                                        </div>



                                    </article>
                                </div>


                                <div class="noo-sidebar noo-sidebar-right col-lg-4 col-xs-12 col-md-12 col-12">
                                    <div class="noo-sidebar-inner mb-4">
                                        <div class="block-sidebar recent-property">
                                            <h3 class="title-block-sidebar">Propiedades Similares</h3>
                                            <div class="featured-property">
                                                <ul class="similarListing">
                                                    <!-- cards -->
                                                    <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                                                    <!-- <li>
                                                        <div class="featured-image">
                                                            <a href=""><img src="images/no_image.png" alt="" style="height: 60px;object-fit:contain;"></a>
                                                        </div>
                                                        <div class="featured-decs">
                                                            <span class="featured-status"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">472-123</a></span>
                                                            <h4 class="featured-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">Bogotá Cundinamarca</a></h4>
                                                        </div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="noo-sidebar-inner pr-0">
                                        <div class="block-sidebar recent-property">
                                            <h3 class="title-block-sidebar">Contacto con Asesor</h3>
                                            <div class="featured-property d-flex flex-wrap">
                                                <div class="text-center col-12 col-md-6 col-lg-12 mb-4">
                                                    <?php
                                                    if ($asesor['FotoAsesor'] == ' ') {
                                                        echo '<img class="cont_img" src="images/no_image.png" width="100%" height="100%" alt="">';
                                                    } else {
                                                        echo '<img class="cont_img" src="' . $asesor['FotoAsesor'] . '" width="100%" height="100%" alt="">';
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-12">
                                                    <p class="detalle-asesor">
                                                        <p class="p1"><span><?php echo $asesor['ntercero']; ?></span> </p>
                                                        <p class="p1"><a href="<?php echo $asesor['correo'] ?>" target="_blank"><i class="fa fa-envelope"></i> <?php echo $asesor['correo'] ?></p></a>
                                                        <p class="p1"><a href="tel:+573229898"><i class="fa fa-phone"></i> 3229898</p></a>
                                                        <p class="p1"><a href="tel:<?php echo $asesor['celular']; ?>" target="_blank"><i class="fas fa-mobile-alt mr-2"></i> <?php echo $asesor['celular']; ?></p></a>
                                                    </p>
                                                    <p class="p1"><a href=""><i class="fab fa-whatsapp"></i> Contactanos por WhatsApp</p></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 pr-0 text-center btn_atras">
                                        <div class="block-sidebar recent-property">
                                            <center>
                                                <div class="btn-atras">
                                                    <i class="fa fa-arrow-left" style=" color:  black;"></i>
                                                </div>
                                                <h3 class="title-block-sidebar">Regresar a la pagina anterior</h3>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-5 mt-4 form_detalle pr-0 formularioa">
                                        <div class="container form_detalle">
                                            <h3 class="title-block-sidebar">Formulario de contacto</h3>
                                            <form class="p-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="numero" aria-describedby="emailHelp" placeholder="Numero de Contacto" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Correo" required>

                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="mensaje" placeholder="Escriba su solicitud" rows="3" required></textarea>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" required>
                                                    He leído y acepto la Política de Datos.
                                                    <a href="Formularios Aseguradoras/POLITICA_DE_TRATAMIENTO_DE_DATOS.pdf" target="_blank" style="width: 48%;">Descarga Nuestra Política de Datos.</a>
                                                </div>
                                                <select name="codigo" class="invisible display:none">
                                                    <option value=" <?php echo $co ?>"> <?php echo $co ?></option>
                                                </select>
                                                <div class="col-12 text-center border-0">
                                                    <button type="submit" class="btn btn-primary col-6" style="border-radius: 0;"><span>Enviar</span></button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                    <div class="col-12 mb-5 mt-4 form_detalle pr-0 formulariob sticky-top" style="padding-top: 48px;">
                                        <div class="container form_detalle">
                                            <h3 class="title-block-sidebar">Formulario de contacto</h3>
                                            <form class="p-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="numero" aria-describedby="emailHelp" placeholder="Numero de Contacto" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Correo" required>

                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="mensaje" placeholder="Escriba su solicitud" rows="3" required></textarea>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" required>
                                                    He leído y acepto la Política de Datos.
                                                    <a href="Formularios Aseguradoras/POLITICA_DE_TRATAMIENTO_DE_DATOS.pdf" target="_blank" style="width: 48%;">Descarga Nuestra Política de Datos.</a>
                                                </div>
                                                <select name="codigo" class="invisible display:none">
                                                    <option value=" <?php echo $co ?>"> <?php echo $co ?></option>
                                                </select>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary col-6" style="border-radius: 0;"><span style="font-size: 16px;">Enviar</span></button>
                                                </div>

                                            </form>
                                        </div>

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
        <div class="property-map mapa_detalle">
            <div class="container">
                <h4 class="property-map-title titulo_ubicacion">Ubicación</h4>
            </div>
            <div class="property-map-content p-0 ">
                <div class="map-position card mapa_tamaño">

                    <div class="">
                        <div id="map" class="w-100"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/archivosfooter.php'; ?>
<script src="./menu/menu.js.download"></script>
<script src="js/slick.min.js"></script>
<script>
    $(".btn-atras").click(function() {
        window.history.back();


    });
</script>
<!-- slider miniaturas -->
<script>
    $('#slide-detalle').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplayTimeout: 4000,
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
<!-- mapa del inmueble -->
<script src="mapas/leaflet.js" crossorigin=""></script>
<script>
    var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 17);

    L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
    }).addTo(map);

    L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
        .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
        .openPopup();
</script>
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/buscador.js"></script>
<!-- barra de rangos -->
<script src="js/rangos.js"></script>

</html>