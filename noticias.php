<?php require 'controllers/noticiasController.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Conaltura Inmobiliaria</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <?php require 'controllers/bannerController.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>
    <!-- redes sociales -->
    <?php include 'layout/redes.php'; ?>
    <!-- fin redes sociales -->
    <!-- imagen baner -->
    <section id="slideshow-home" class="wrap noo-slideshow slideshow-home">
        <div class="property-slider">
            <div id="noo-slider-1" class="noo-slider noo-property-slide-wrap">
                <?php
                bannerblog()
                ?>
                <div class="clearfix"></div>

            </div>
        </div>
    </section>

    <!-- cards -->
    <section>
        <div class="container p-0">
            <div class="col-12 espacio_destacadas d-flex flex-wrap justify-content-center">
                <!-- cards -->
                <!-- <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
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
                </div> -->
                <!-- fin cards -->
                <?php if (isset($noticias_array)) {
                    modelo_noticia2($noticias_array);
                } else {
                    echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                }
                ?>


            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>