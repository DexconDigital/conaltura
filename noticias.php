<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>

    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- imagen baner -->
    <section id="slideshow-home" class="wrap noo-slideshow slideshow-home">
        <div class="property-slider">
            <div id="noo-slider-1" class="noo-slider noo-property-slide-wrap">

                <img src="images/banners/16.jpg" class="attachment-property-slider img-banner" alt="" />
                <div class="clearfix"></div>

            </div>
        </div>
    </section>

    <!-- cards -->
    <section>
        <div class="container">
            <div class="col-12 espacio_destacadas">
                <article class="hentry format-standard has-featured">
                    <div class="content-wrap">
                        <header class="content-header">
                            <h2 class="content-title">
                                <a href="detalle_noticia.php">Titulo de la noticia</a>
                            </h2>
                            <p class="content-meta">
                                <i class="fa fa-calendar-alt"></i>
                                <span>
                                    <time class="entry-date"> Fecha</time></span>
                            </p>
                        </header>
                        <div class="content-featured">
                            <a class="content-thumb" href="detalle_noticia.php">
                                <img src="images/no_image.png" alt="" class="attachment-property-image" alt="">
                            </a>
                        </div>
                        <div class="content-excerpt">
                            <p>Descripción</p>
                            <div><a href="detalle_noticia.php" class="read-more">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>