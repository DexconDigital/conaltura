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
    .contenedor_contenido{
        margin-top: -6%;
        background-color: white;
        z-index: 200;
        padding: 3.5rem;
    }

</style>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>
    <?php $imagen = 'images/images_noticias/1.jpg);' ?>
    <section>
        <div class="col-12 tamaño" style="background-image:url(<?php echo $imagen ?>">
            <div class="fondo_negro position-absolute w-100 h-100"></div>
            <div class="container position-relative text-center">
                <h2 class="blog-title"><span>Descubre los beneficios de vivir en el sur del Valle de Aburrá</span></h2>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-12 col-md-10 col-lg-10 mb-5 contenedor_contenido">
                    <div class="color_fecha mb-4">
                        18 jun 20
                    </div>
                    <div class="contenido">
                        <p>A la hora de elegir tu nueva vivienda, la ubicación es una de las características más importantes a tener en cuenta. En Conaltura te contamos por qué el sur del Valle de Aburrá es el lugar ideal para vivir y crecer junto a tus seres queridos.</p>
                        <p>Municipios como Envigado, Sabaneta, Itagui, La Estrella y Caldas han sido reconocidos a nivel nacional por su constante crecimiento, tanto en su economía como en la calidad de vida; factores que en los últimos años han fortalecido la oferta inmobiliaria. ¡Sigue leyendo para conocer algunos beneficios generales de estos municipios!</p>
                        <h3>Alta valorización</h3>
                        <p><img src="images/images_noticias/1.jpg" alt=""></p>
                        <p>Tu vivienda se valorizará con el tiempo gracias a su excelente ubicación. La valorización en los municipios del sur viene aumentando cada año gracias a su atractivo para vivienda, pues vivir aquí tiene grandes beneficios, tales como una amplia oferta de entretenimiento, transporte, educación, cercanía a algunas de las empresas más importantes del departamento y muchos más servicios.</p>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <!-- footer -->
    <?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>