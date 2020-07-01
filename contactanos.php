<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- Menu  Inicial-->
    <?php include 'layout/menu.php'; ?>

    <!-- Buscador -->
    <?php include 'layout/buscador.php'; ?>

    <section>
        <div class="noo-wrapper">

            <div class="container noo-mainbody">
                <div class="noo-mainbody-inner">
                    <div class="clearfix">

                        <div class="noo-content ">
                            <div class="page-content">
                                <div class="contact-map">
                                    <div class="text-block">
                                        <h4>CONTÁCTANOS</h4>
                                    </div>
                                    <div class="noo-gmaps">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.442682422836!2d-75.57216528568385!3d6.205189828504449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e468281a2c06633%3A0xd2912572b12fe1d4!2sCl.%205A%20%2339%2095%20Oficina%20306%2C%20Edificio%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1592934457478!5m2!1ses-419!2sco" width="600%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                                <div class="contact-form">
                                    <div class="col-12">
                                        <div class="col-sm-12 col-md-12 p-0 col-lg-4 text-justify mb-4">
                                            <div class="contact-info">
                                                <div class="text-block">
                                                    <h4>Información de Contacto</h4>
                                                </div>
                                                <div class="text-block">
                                                    <ul>

                                                        <li><b><i class="fa fa-phone"></i> Telefono</b><a href="tel:0343229898" target="_blank">(034)2662277 Extensión
                                                                4</a></li>
                                                        <li><b><i class="fa fa-phone"></i> Telefono</b><a href="tel:0343229898" target="_blank">(034)2662277 Extensión
                                                                209</a></li>
                                                        <li><b><i class="fa fa-phone"></i> Telefono</b><a href="tel:0342662277" target="_blank">(034)3229898</a></li>
                                                        <li><b><i class="fab fa-whatsapp"></i> Whatsapp</b><a href="https://wa.me/573193777281" target="_blank">319 377
                                                                7281 </a></li>
                                                        <li><b><i class="fa fa-envelope"></i> Email</b><a href="mailto:inmobiliaria@conaltura.com" target=":_blank">inmobiliaria@conaltura.com</a></li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-8">

                                            <div class="contact-desc">
                                                <div class="text-block">
                                                    <h4>Formulario de Contacto </h4>
                                                </div>
                                                <hr class="noo-gap">
                                                <form name="contact-form" method="post" id="contact-form" class="validate-form">
                                                    <p>
                                                        <span class="form-group form-control-wrap your-name">
                                                            <input type="text" name="your-name" id="nombre" class="form-control" size="40" placeholder="Nombre" required>
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span class="form-group form-control-wrap your-name">
                                                            <input type="text" name="your-name" class="form-control" id="telefono" size="40" placeholder="Celular y/o teléfono" required>
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span class="form-group form-control-wrap your-email">
                                                            <input type="email" name="your-email" class="form-control" id="email" size="40" placeholder="Email" required>
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span class="form-group form-control-wrap your-subject">
                                                            <input type="text" name="your-subject" class="form-control" id="codigo" size="40" placeholder="Código del inmueble (opcional)">
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span class="form-group form-control-wrap your-message">
                                                            <textarea name="your-message" cols="40" class="form-control" id="mensaje" placeholder="Comentario" required></textarea>
                                                        </span>
                                                    </p>
                                                    <p style="width: 48%;display: inline-block;">
                                                        <input type="checkbox" id="check" required> He leído y
                                                        acepto la Política de Datos<br></p>
                                                    <a href="Formularios Aseguradoras/POLITICA_DE_TRATAMIENTO_DE_DATOS.pdf" target="_blank" style="width: 48%;display: inline-block; 
                                                text-align: right;">Descarga
                                                        Nuestra Política de Datos</a>
                                                    <p>
                                                        <input type="submit" class="submit" value="Enviar" id="">
                                                    </p>
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

</html>