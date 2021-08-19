<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmuebles | Conaltura Inmobiliaria</title>
    <meta name="description" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- Buscador -->
    <?php include 'layout/buscador.php'; ?>
    <!-- inmuebles -->
    <!-- redes sociales -->
    <?php include 'layout/redes.php'; ?>
    <!-- fin redes sociales -->
    <section id="" class="espacio_destacadas">
    <!-- datos -->
    <?php //require_once '../controllers/inmueblesController.php'; 
    //echo "<pre>";print_r($_SERVER);echo "</pre>";?>

        <div class="container p-0">
            <div class="col-12 p-0">
                <div class="col-12">
                    <h4 class="titulo_inmuebles_inicio"></h4>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-center listar_inmuebles"><h3>Cargando inmuebles...</h3></div>
            </div>
            <div class="col-12 text-center paginacion"></div>
        </div>
    </section>

    <!-- footer -->
    <?php include 'layout/footer.php'; ?>

</body>
<?php include 'layout/archivosfooter.php'; ?>
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/buscador.js"></script>
<script>
    var url = "<?php echo $_SERVER["REQUEST_URI"]; ?>";
    var pag = "<?php echo (isset($_GET['pag'])) ? $_GET['pag'] : 1; ?>";
    var ciudad = "<?php echo (isset($_GET['ci'])) ? $_GET['ci'] : 0; ?>";
    var barrio = "<?php echo (isset($_GET['bar'])) ? $_GET['bar'] : 0; ?>";
    var gestion = "<?php echo (isset($_GET['ge'])) ? $_GET['ge'] : 0; ?>";
    var inmueble = "<?php echo (isset($_GET['in'])) ? $_GET['in'] : 0; ?>";
    var precio_minimo = "<?php echo (isset($_GET['premin'])) ? $_GET['premin'] : 0; ?>";
    var precio_maximo = "<?php echo (isset($_GET['premax'])) ? $_GET['premax'] : 0; ?>";
    var area_minima = "<?php echo (isset($_GET['aremin'])) ? $_GET['aremin'] : 0; ?>";
    var area_maxima = "<?php echo (isset($_GET['aremax'])) ? $_GET['aremax'] : 0; ?>";
    var alcobas_buscar = "<?php echo (isset($_GET['alcobas'])) ? $_GET['alcobas'] : 0; ?>";
    var banio_buscar = "<?php echo (isset($_GET['banios'])) ? $_GET['banios'] : 0; ?>";
    var garaje_buscar = "<?php echo (isset($_GET['garajes'])) ? $_GET['garajes'] : 0; ?>";
    //Llamado de datos
    $.ajax({
        url: 'controllers/inmueblesController.php',
        type: 'post',
        data: {
            "datos": "true",
            "REQUEST_URI" : url,
            "pag" : pag,
            "ciudad" : ciudad,
            "barrio" : barrio,
            "gestion" : gestion,
            "inmueble" : inmueble,
            "precio_minimo" : precio_minimo,
            "precio_maximo" : precio_maximo,
            "area_minima" : area_minima,
            "area_maxima" : area_maxima,
            "alcobas_buscar" : alcobas_buscar,
            "banio_buscar" : banio_buscar,
            "garaje_buscar" : garaje_buscar
        },
        success: function(data) {
            console.log(data.paginacion);
            $(".titulo_inmuebles_inicio").html("Se han encontrado " + data.total_inmuebles + " inmuebles");
            $(".listar_inmuebles").html(data.inmuebles);
            $(".paginacion").html(data.paginacion);
        }
    });
</script>

</html>
