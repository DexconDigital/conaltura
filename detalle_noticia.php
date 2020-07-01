<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Noticias</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <section>
        <div class="container">
            <!-- cards -->
            <div class="col-12 espacio_destacadas">
                <article class="format-standard hentry has-featured">
                    <div class="content-featured">
                        <div class="content-thumb">
                            <img src="images/no_image.png" class="attachment-property-image">
                        </div>
                    </div>
                    <div class="content-wrap">
                        <header class="content-header">
                            <h1 class="content-title">Titulo de la noticia</h1>
                            <p class="content-meta">
                                <i class="fa fa-calendar-alt"></i>
                                <span>
                                    <time class="entry-date">dia/mes/año</time>
                                </span>
                            </p>
                        </header>
                        <div class="content">
                            <p>Descripción</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maxime nisi obcaecati dolorum in ea necessitatibus dolorem voluptatum impedit? Assumenda debitis nam temporibus libero tempore facilis in accusantium aperiam eum?
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maxime nisi obcaecati dolorum in ea necessitatibus dolorem voluptatum impedit? Assumenda debitis nam temporibus libero tempore facilis in accusantium aperiam eum?</p>
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