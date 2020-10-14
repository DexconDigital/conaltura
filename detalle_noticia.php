<?php require 'controllers/detalle_noticiasController.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Noticias | Conaltura Inmobiliaria</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
</head>
<style>
    .tamaño {
        padding: 150px 0;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-color: #000;
    }

    .blog-title {
        text-align: center;
        color: white;
        font-weight: 700 !important;
        font-size: 32px !important;
    }

    .fondo_negro {
        z-index: 100;
        background-color: rgba(0, 0, 0, 0.473);
        top: 0;
    }

    .container {
        z-index: 200;
    }

    .color_fecha {
        color: #095c70;
    }

    .contenido img {
        width: 100% !important;
        height: 100% !important;
    }

    .contenedor_contenido {
        margin-top: -6%;
        background-color: white;
        z-index: 200;
        padding: 3.5rem;
    }
</style>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>
    <!-- redes sociales -->
    <?php include 'layout/redes.php'; ?>
    <!-- fin redes sociales -->


    <section>
        <div class="col-12 tamaño" style="background-image:url(<?php echo $ruta_imagen ?>">
            <div class="fondo_negro position-absolute w-100 h-100"></div>
            <div class="container position-relative text-center">
                <h2 class="blog-title"><span><?php echo $nombre ?></span></h2>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-12 col-md-10 col-lg-10 mb-5 contenedor_contenido">
                    <div class="color_fecha mb-4">
                        <?php echo $fecha_complete ?>
                    </div>
                    <div class="contenido">
                        <?php echo $noticia ?>
                    </div>
                </div>
            </div>
            <div class="text-center col-12 mt-3 mb-5">
                <?php if ($ruta_archivo != $comparador . "") {
                    echo '<a style="color:#7B7B7B;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                } ?>

            </div>


        </div>
    </section>



    <!-- footer -->
    <?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>