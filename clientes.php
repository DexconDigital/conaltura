<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes | Conaltura Inmobiliaria</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'layout/archivosheader_clientes.php' ?>
</head>
<style>
    #redes_conaltura {
        background-color: white;
        height: auto;
        position: fixed;
        left: 0;
        top: 30%;
        z-index: 1000;
        padding: 10px;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        width: auto;
    }

    #redes_conaltura .elementor-social-icon {
        background-color: rgba(255, 255, 255, 0);
        font-size: 17px;
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: #80bc00;
        border-radius: 50%;
        margin-bottom: 3px;
        padding: .5em;
    }

    #redes_conaltura .elementor-social-icon:hover {
        background-color: #80BC00;
    }

    #redes_conaltura i {
        width: 1em;
        height: 1em;
        position: relative;
        display: block;
        font-weight: 400;
        color: #80bc00;
        text-align: center;
    }

    #redes_conaltura i:hover {
        color: white;
    }
</style>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- redes sociales -->
    <!-- < ? php include 'layout/redes.php'; ? > -->
    <!-- fin redes sociales -->
    <div class="noo-wrapper">

        <!-- banner -->
        <section id="slideshow-home" class="wrap noo-slideshow slideshow-home">
            <div class="property-slider">
                <div id="noo-slider-1" class="noo-slider noo-property-slide-wrap">

                    <img src="images/banners/Jd_JPG.png" class="attachment-property-slider img-banner" alt="" />
                    <div class="clearfix"></div>

                </div>
            </div>
        </section>

        <!-- contenido -->
        <section id="our-sevices" class="wrap our-sevices">
            <div class="container noo-mainbody">
                <div class="container">
                    <div class="parallax">
                        <div class="bg parallax-bg" style="background: none;"></div>
                        <div class="overlay" style="background: none;"></div>
                        <div class="our-sevices-content">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-4 our-sevices-col">
                                    <span class="service-icon">
                                        <a href="arrendatarios.php"><i class="fa fa-home" style=" color:  #4d4d4d;"></i></a>
                                    </span>
                                    <hr class="noo-gap">
                                    <div class="text-block">
                                        <h5> Arrendatarios</h5>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 our-sevices-col">
                                    <span class="service-icon">
                                        <a href="propietarios.php"><i class="fa fa-key" style=" color:  #4d4d4d"></i></a>
                                    </span>
                                    <hr class="noo-gap">
                                    <div class="text-block">
                                        <h5>Propietarios</h5>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 our-sevices-col">
                                    <span class="service-icon">
                                        <a href="https://gateway2.tucompra.com.co/sites/conaltura/facturacion.xhtml?idTerminal=1057" target="blank"><i class="fa fa-file-invoice-dollar" style=" color:  #4d4d4d"></i></a>

                                    </span>
                                    <hr class="noo-gap">
                                    <div class="text-block">
                                        <a href="https://gateway2.tucompra.com.co/sites/conaltura/facturacion.xhtml?idTerminal=1057" target="blank">
                                            <h5 style=" margin: 0 0 12px;font-weight: 700;font-size: 27px;color: #095C70;">PSE</h5>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
    <!-- footer -->
    <?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>