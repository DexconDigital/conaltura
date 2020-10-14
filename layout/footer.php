<?php require 'controllers/aseguradorasController.php'; ?>
<?php require 'controllers/textofooterController.php'; ?>
<!-- <div id="back-to-top" class="back-to-top"> -->
<i class="fa fa-angle-up subir"></i>
<!-- </div>   -->
<footer class="footer">
    <div class="footer-nav">
        <div class="container contenedor_footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 footer-nav-col">
                   <?php textofooter(); ?>
                    <h4 class="ft-col-title">Número de Visitas</h4>
                    <!-- <a href="https://www.contadorvisitasgratis.com" title="contadores para web"> -->
                    <a href="" title="contadores para web">
                        <img src="https://counter5.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=x21rex5ewkubbf5pcf2ztncgnq4llm1p" border="0" title="contadores para web" alt="contadores para web"></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 footer-nav-col">
                    <div class="ft-featured-properties">
                        <h4 class="ft-col-title">Propiedades Destacadas en Venta</h4>
                        <div class="featured-property">
                            <ul id="ulti-prop-v">
                            </ul>
                        </div>
                    </div>
                    <div class="ft-featured-properties">
                        <h4 class="ft-col-title">Propiedades Destacadas en Arriendo</h4>
                        <div class="featured-property">
                            <ul id="ulti-prop-a">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 footer-nav-col">
                    <div class="ft-useful-links">
                        <h4 class="ft-col-title">Formularios Aseguradoras</h4>
                        <nav class="useful-links-menu" role="navigation">
                            <ul>
                                <?php if (isset($aseguradoras_array)) {
                                    Aseguradoras($aseguradoras_array);
                                    
                                } else {
                                    echo
                                        '<li class="menu-item"><a href="" target="_blank">No hay Aseguradoras</a></li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 footer-nav-col p-0">
                    <div class="ft-contact-info">
                        <h4 class="ft-col-title">Contáctanos</h4>
                        <ul class="detail-contact-info">
                            <?php direccion(); ?>
                            <?php telefono1(); ?>
                            <?php telefono2(); ?>
                            <?php telefono3(); ?>
                            <?php WappF(); ?>
                            <?php correoF(); ?>
                            <?php horario(); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-12 text-block">
                    <div class="logo-image">
                        <a href="index.php"><img src="images/other/conaltura.png" alt="CitiLights" style="height: 70px;width: 163px;"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-12 logo-block copy d-flex align-items-center d-flex justify-content-center">
                    <p class="text-center espacio">Diseñado y Desarrollado por&nbsp<a href="https://www.dexcondigital.com/" target="_blanck" style="font-weight: bold;color: #4d4d4d;" target="_blank"> Dexcon Digital.</a>
                        &copy; Copyright 2020 para <a href="index.php" style="font-weight: bold;color: #4d4d4d;" target="_blank">Conaltura Inmobiliaria.</a><br> Todos los derechos reservados. </p>
                    <br />


                </div>
            </div>
        </div>
    </div>
</footer>