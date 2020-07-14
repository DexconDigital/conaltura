<?php
require 'controllers/indexController.php';
?>
<?php
require 'controllers/inmueblesController.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmuebles</title>
    <meta name="description" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/rangos.css">
    
    
    
</head>
<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- Buscador -->
    <?php include 'layout/buscador.php'; ?>
    <!-- inmuebles -->
    <section id="" class="espacio_destacadas">
        <div class="container p-0">
            <div class="col-12 p-0">
                <div class="col-12">
                    <?php $totalinmuebles = 0;
                    if (is_array($api)) {
                        $totalinmuebles = $api['datosGrales']['totalInmuebles'];
                    } ?>
                    <h4 class="">Se han encontrado <span><?php echo $totalinmuebles ?></span> inmuebles</h4>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-center ">
                    <!-- <div class="col-4">
                        <article class="hentry arriendo">
                            <div class="property-featured">
                                <a class="content-thumb" href="detalle_inmueble.php">
                                    <img src="images/no_image.png" style="object-fit: cover;" alt="">
                                    <span class="property-label"> Código</span>
                                    <span class="property-label-2" >Incluye fotos 360</span>
                                    <span class="property-category-2"> Apartamento</span>
                                </a>
                            </div>
                            <div class="property-wrap">
                                <h2 class="property-title"><a href="detalle_inmueble.php">Poblado</a></h2>
                                <div class=" property-summary">
                                    <div class="property-detail">
                                        <div class="size"><span>66 m<sup>2 </span>
                                        </div>
                                        <div class="bathrooms"><span> 2</span>
                                        </div>
                                        <div class="bedrooms"><span> 2 </span>
                                        </div>
                                    </div>
                                    <div class="property-info">
                                        <div class="property-price">
                                            <span><span class="amount"> $ 1.000.000</span></span>
                                        </div>
                                    </div>
                                </div>
                        </article>
                    </div> -->
                    <!-- Inmuebles -->
                    <?php
                    if (is_array($api)) {
                        listar_inmuebles($api['Inmuebles']);
                    } else {
                        echo '<div class="col-12">
                                     <h2 class="text-center" >No se encontraron inmuebles</h2>
                                     </div>';
                    }
                    ?>
                </div>
                <div>
                </div>
            </div>
            <div class="text-center d-flex flex-wrap">
            </div>
            <div class="col-12 text-center">
                <?php if (is_array($api)) : ?>
                    <ul class="pagination mt-4 align-items-end justify-content-center">
                        <?php if ($paginator->getPrevUrl()) : ?>
                            <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                        <?php endif; ?>
                        <?php foreach ($paginator->getPages() as $page) : ?>
                            <?php if ($page['url']) : ?>
                                <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                    <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                </li>
                            <?php else : ?>
                                <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php if ($paginator->getNextUrl()) : ?>
                            <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>

    </section>

    <!-- footer -->
    <?php include 'layout/footer.php'; ?>

</body>
<?php include 'layout/archivosfooter.php'; ?>
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/buscador.js"></script>
<!-- barra de rangos -->
<script src="js/rangos.js"></script>
</html>