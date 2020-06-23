<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'layout/archivosheader_clientes.php' ?>
</head>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

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
                                        <h5 style="color:  #4d4d4d "> Arrendatarios</h5>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 our-sevices-col">
                                    <span class="service-icon">
                                        <a href="propietarios.php"><i class="fa fa-key" style=" color:  #4d4d4d"></i></a>
                                    </span>
                                    <hr class="noo-gap">
                                    <div class="text-block">
                                        <h5 style="color:  #4d4d4d ">Propietarios</h5>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 our-sevices-col">
                                    <span class="service-icon">
                                        <a href="https://gateway2.tucompra.com.co/sites/conaltura/facturacion.xhtml?idTerminal=1057" target="blank"><i class="fa fa-file-invoice-dollar" style=" color:  #4d4d4d"></i></a>

                                    </span>
                                    <hr class="noo-gap">
                                    <div class="text-block">
                                        <a href="https://gateway2.tucompra.com.co/sites/conaltura/facturacion.xhtml?idTerminal=1057" target="blank">
                                            <h5 style="color:  #4d4d4d ">PSE</h5>
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