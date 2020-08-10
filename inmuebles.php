<?php
require 'controllers/inmueblesController.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmuebles | Conaltura Inmobiliaria</title>
    <meta name="description" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
</head>
<style>
    #map {
        height: 480px;
        z-index: 20;
    }

    .leaflet-control {
        z-index: 200;
    }

    .leaflet-control {
        z-index: 20;
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
    <!-- mapa -->
    <section>
        <div class="property-map-content p-0 ">
            <div class="map-position card mapa_tamaño">

                <div class="">
                    <div id="map" class="w-100"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- inmuebles -->
    <section id="" class="espacio_destacadas">
        <div class="container p-0">
            <div class="col-12 p-0">
                <div class="col-12">
                    <?php $totalinmuebles = 0;
                    if (is_array($api)) {
                        $totalinmuebles = $api['datosGrales']['totalInmuebles'];
                    } ?>
                    <h4 class="titulo_inmuebles_inicio">Se han encontrado <span><?php echo $totalinmuebles ?></span> inmuebles</h4>
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


<script src="mapas/leaflet.js" crossorigin=""></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/<?php echo $pag; ?>/total/9/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/desc/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
            type: 'GET',
            beforeSend: function(xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
            },
            'dataType': "json",
            success: function(data) {
                console.log(data);
                var res = "";
                var cities = L.layerGroup();

                var mbAttr = ' <a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a> ' +
                    ' <a href="http://creativecommons.org/licenses/by-sa/2.0/"> CC-BY-SA </a>, ' +
                    ' Imágenes © <a href="http://mapbox.com"> Mapbox </a> ',
                    mbUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

                for (i = 0; i < parseInt(data.Inmuebles.length); i++) {
                    //    Consulta del api a los datos que necesito
                    // console.log(data.Inmuebles[i].latitud, data.Inmuebles[i].longitud, data.Inmuebles[i].Codigo_Inmueble);


                    L.marker([data.Inmuebles[i].latitud, data.Inmuebles[i].longitud]).bindPopup('<img src="' + data.Inmuebles[i].foto1 + '" alt="" style=""><p class="text-center" >Código: ' + data.Inmuebles[i].Codigo_Inmueble + '</p><p class="text-center">' + data.Inmuebles[i].Tipo_Inmueble + ' en ' + data.Inmuebles[i].Gestion + '</p><p class="text-center"><a href="detalle_inmueble.php?co=' + data.Inmuebles[i].Codigo_Inmueble + '">Ver más</a></p>').addTo(cities)

                }




                // coordenadas del mapa 
                // L.marker([4.7042101, -74.05383970000003],{ title:"Hola Mundo", }).addTo(cities).bindPopup('<img src="images/no_image.png" alt="" style="max-width: 200px;"><p class="text-left">Código:1100</p><p class="text-left">Casa en venta</p><p class="text-center"><a href="">Ver más</a></p>').openPopup(),
                //     L.marker([4.7046101, -74.05483990000003]).bindPopup('<img src="images/no_image.png" alt="" style="max-width: 200px;"><p class="text-left">Código:1100</p><p class="text-left">Casa en venta</p><p class="text-center"><a href="">Ver más</a></p>').addTo(cities),
                //     L.marker([4.7048101, -74.05583100000003]).bindPopup('<img src="images/no_image.png" alt="" style="max-width: 200px;"><p class="text-left">Código:1100</p><p class="text-left">Casa en venta</p><p class="text-center"><a href="">Ver más</a></p>').addTo(cities);




                var grayscale = L.tileLayer(mbUrl, {
                        id: 'mapbox.light',
                        attribution: mbAttr
                    }),
                    streets = L.tileLayer(mbUrl, {
                        id: 'mapbox.streets',
                        attribution: mbAttr
                    });

                var map = L.map('map', {
                    center: [data.Inmuebles[0].latitud, data.Inmuebles[0].longitud],
                    zoom: 12,
                    layers: [grayscale, cities]
                });

                var baseLayers = {
                    "Grayscale": grayscale,
                    "Streets": streets
                };

                var overlays = {
                    "Cities": cities
                };

                L.control.layers(baseLayers, overlays).addTo(map);
            }


        });
    });
</script>

</html>