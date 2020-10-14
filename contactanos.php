<?php
require_once 'variables/captcha.php';
$WebK = Web_Key;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos | Conaltura Inmobiliaria</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/rangos.css">
</head>

<body>

    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- Buscador -->
    <?php include 'layout/buscador.php'; ?>
    <!-- redes sociales -->
    <?php include 'layout/redes.php'; ?>
    <!-- fin redes sociales -->
    <section>
        <div class="noo-wrapper">

            <div class="container noo-mainbody">
                <div class="noo-mainbody-inner">
                    <div class="clearfix">

                        <div class="noo-content ">
                            <div class="page-content">
                                <div class="contact-map p-1">
                                    <div class="text-block">
                                        <h4>Contáctanos</h4>
                                    </div>
                                    <div class="noo-gmaps">
                                        <?php mapa() ?>
                                    </div>
                                </div>
                                <div class="col-12  d-flex justify-content-center flex-wrap">
                                    <h2 id="titulo_principal">Escríbenos, nos encantaría ponernos en contacto</h2>
                                    <p class=" secundario">Nunca estamos demasiado ocupados para hablar y atender tus dudas.</p>
                                </div>
                                <div class="col-12  text-center d-flex flex-wrap mt-3">
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <i class="fa fa-envelope tamaño_icon"></i>
                                        <p class="mt-4 sub_titulos">Escríbenos</p>
                                        <?php correoC() ?>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <i class="fa fa-phone tamaño_icon"></i>
                                        <p class="mt-4 sub_titulos">Llámanos</p>
                                        <?php telefono1C() ?>
                                        <?php telefono2C() ?>
                                        <?php telefono3C() ?>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <i class="fab fa-whatsapp tamaño_icon"></i>
                                        <p class="mt-4 sub_titulos">WhatsApp</p>
                                      <?php wappC() ?>
                                    </div>
                                </div>
                                <div class="contact-form">
                                    <div class="col-12">
                                        <!-- <div class="col-sm-12 col-md-12 p-0 col-lg-4 text-justify mb-4">
                                            <div class="contact-info p-0">
                                                <div class="text-block">
                                                    <h4>Información <br> de Contacto</h4>
                                                </div>
                                                <div class="text-block">
                                                    <ul id="lista_contacto">

                                                        <li><b><i class="fa fa-phone"></i></b><a href="tel:0343229898" target="_blank">(034)2662277 Extensión
                                                                4</a></li>
                                                        <li><b><i class="fa fa-phone"></i></b><a href="tel:0343229898" target="_blank">(034)2662277 Extensión
                                                                209</a></li>
                                                        <li><b><i class="fa fa-phone"></i></b><a href="tel:0342662277" target="_blank">(034)3229898</a></li>
                                                        <li><b><i class="fab fa-whatsapp"></i></b><a href="https://wa.me/573193777281" target="_blank">319 377
                                                                7281 </a></li>
                                                        <li><b><i class="fa fa-envelope"></i></b><a href="mailto:inmobiliaria@conaltura.com" target=":_blank">inmobiliaria@conaltura.com</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div> -->
                                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">

                                            <div class="contact-desc">
                                                <div class="text-block text-center">
                                                    <p class="sub_formulario">Formulario de Contacto </p>
                                                </div>
                                                <hr class="noo-gap">
                                                <form name="contact-form" method="POST" action="email/enviarCorreo.php" autocomplete="off">
                                                    <div class="col-12">
                                                        <p>
                                                            <span class="form-group form-control-wrap your-name">
                                                                <input type="text" name="nombre" class="form-control" size="40" placeholder="Nombre" required>
                                                            </span>
                                                        </p>
                                                        <p>
                                                            <span class="form-group form-control-wrap your-name">
                                                                <input type="text" name="telefono" class="form-control" size="40" placeholder="Celular y/o teléfono">
                                                            </span>
                                                        </p>
                                                        <p>
                                                            <span class="form-group form-control-wrap your-email">
                                                                <input type="email" name="correo" class="form-control" size="40" placeholder="Email" required>
                                                            </span>
                                                        </p>
                                                        <p>
                                                            <span class="form-group form-control-wrap your-subject">
                                                                <input type="text" name="codigo" class="form-control" size="40" placeholder="Código del inmueble (opcional)">
                                                            </span>
                                                        </p>
                                                        <p>
                                                            <span class="form-group form-control-wrap your-message">
                                                                <textarea name="mensaje" cols="40" class="form-control" placeholder="Comentario" required></textarea>
                                                            </span>
                                                        </p>
                                                        <p>
                                                            <input class="form-group" type="checkbox" id="" required> He leído y
                                                            acepto la
                                                            <a href="Formularios Aseguradoras/POLITICA_DE_TRATAMIENTO_DE_DATOS.pdf" target="_blank" class="mano_chek">Política de Datos</a>
                                                        </p>
                                                        <div class="g-recaptcha" data-sitekey="<?php echo $WebK ?>"></div>
                                                        <div class="col-12 mb-4"><small id="tituloHepl" class="form-text text-muted">Este campo es obligatorio</small></div>
                                                        <input type="submit" class="submit">
                                                    </div>

                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</html>