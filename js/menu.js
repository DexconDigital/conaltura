(function ($) {
    "use strict";
    //Menu que contiene el logo
    var menu = '<div class="navbar-header">' +
        '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-collapse">' +
        '<span class="sr-only">Toggle navigation</span>' +
        '<span class="icon-bar"></span>' +
        '<span class="icon-bar"></span>' +
        '<span class="icon-bar"></span>' +
        '</button>' +
        '<div class="logo">' +
        '<div class="logo-image">' +
        '<a href="index.html" class="a-calling">' +
        '<img src="images/other/conaltura.png" />' +
        '</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="calling-info">' +
        '<div class="calling-content">' +
        '<i class="fa fa-mobile-alt"></i>' +
        '<div class="calling-desc">' +
        'Llámanos <br>' +
        '<span><a href="tel:0343229898">(034) 3229898</a></span>' +
        '</div>' +
        '</div>' +
        '<a href="https://gateway2.tucompra.com.co/sites/conaltura" target="_blank"><img src="images/other/logo-pse.png" style="margin-top: 10px;"/></a>' +
        '</div>' +
        '<div class="main-navigation">' +
        '<nav class="collapse navbar-collapse" id="main-collapse" role="navigation">' +
        '<ul class="nav navbar-nav options" id="items_en_uso">' +
        '<li class="dropdown" id="items1">' +
        '<a href="index.html">Inicio&nbsp;<span class="caret"></span></a>  ' +
        '</li>' +
        '<li class="dropdown" id="items2">' +
        '<a href="quienes-somos.html">Quienes Somos&nbsp;<span class="caret"></span></a>    ' +
        '</li>' +
        '<li class="dropdown" id="items3">' +
        '<a href="inmuebles.php">Inmuebles&nbsp;<span class="caret"></span></a>' +
        '</li>' +
        '<li class="dropdown">' +
        '<a href="clientes.html">Clientes&nbsp;<span class="caret"></span></a> ' +
        '</li>' +
        '<li class="dropdown">' +
        '<a href="noticias.php">Blog&nbsp;<span class="caret"></span></a> ' +
        '</li>' +
        '<li class="dropdown">' +
        '<a href="contactanos.html">Contáctanos&nbsp;<span class="caret"></span></a>    ' +
        '</li>' +
        '</ul>' +
        '</nav>' +
        '</div>';

    $(".menu-ppal").html(menu);

    var footerinicio = '';


    $(".footer-inicio").html(footerinicio);

    var footer = '<div class="footer-nav">' +
        '<div class="container">' +
        '<div class="row">' +
        '<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-col">' +
        '<div class="ft-about-us">' +
        '<h4 class="ft-col-title">Conaltura Inmobiliaria</h4>' +
        '<div class="text-block">' +
        '<p>CONALTURA INMOBILIARIA fue fundada en junio de 2016 con el propósito de ofrecer los servicios de administración, arrendamientos y venta de ' +
        'propiedad raíz destinada ya sea para vivienda o para locales comerciales, oficinas, bodegas u otros.' +
        '</p>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-col">' +
        '<div class="ft-featured-properties">' +
        '<h4 class="ft-col-title">Propiedades Destacadas en Venta</h4>' +
        '<div class="featured-property">' +
        '<ul id="ulti-prop-v">' +
        '</ul>' +
        '</div>' +
        '</div>' +
        '<div class="ft-featured-properties">' +
        '<h4 class="ft-col-title">Propiedades Destacadas en Arriendo</h4>' +
        '<div class="featured-property">' +
        '<ul id="ulti-prop-a">' +
        '</ul>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-col">' +
        '<div class="ft-useful-links">' +
        '<h4 class="ft-col-title">Formularios Aseguradoras</h4>' +
        '<nav class="useful-links-menu" role="navigation">' +
        '<ul>' +
        '<li class="menu-item"><a href="Formularios Aseguradoras/Formulario FGI persona juridica.pdf" target="_blank">Formulario FGI Persona Juridica</a></li>' +
        '<li class="menu-item"><a href="Formularios Aseguradoras/Formulario FGI persona natural.pdf" target="_blank">Formulario FGI Persona Natural</a></li>' +
        '<li class="menu-item"><a href="Formularios Aseguradoras/Formulario-Persona Natural-El Libertador.pdf" target="_blank">Formulario Persona Natural El Libertador</a></li>' +
        '<li class="menu-item"><a href="Formularios Aseguradoras/Formulario-Persona-Juridica-El Libertador.pdf" target="_blank">Formulario Persona Juridica El Libertador</a></li>' +
        '<li class="menu-item"><a href="Formularios Aseguradoras/SOLICITUD CODEUDOR (gnal).pdf" target="_blank">Solicitud Codeudor Grupo Sura</a></li>' +
        '<li class="menu-item"><a href="Formularios Aseguradoras/INQUILINO PERSONA NATURAL.PDF" target="_blank">Solicitud Persona Natural Grupo Sura</a></li>' +
        '<li class="menu-item"><a href="Formularios Aseguradoras/INQUILINO PERSONA JURIDICA.PDF" target="_blank">Solicitud Persona Juridica Grupo Sura</a></li>' +
        '</ul>' +
        '</nav>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-col">' +
        '<div class="ft-contact-info">' +
        '<h4 class="ft-col-title">Contáctanos</h4>' +
        '<ul class="detail-contact-info">' +
        '<li><i class="fa fa-map-marker-alt"></i>&nbsp;<label>Cr 39 5ª 95 Oficina 306,</label>' +
        '<br>' +
        '<label style="margin-left: 47px;">Edificio Avantgarde- Poblado, Medellín </label>' +
        '</li>' +
        '<li><a href="tel:0342662277" target="_blank"><i class="fa fa-phone"></i>&nbsp;(034)2662277, ext 4</a></li>' +
        '<li><a href="tel:0342662277" target="_blank"><i class="fa fa-phone"></i>&nbsp;(034)2662277, ext 209</a></li>' +
        '<li><a href="tel:0343229898" target="_blank"><i class="fa fa-phone"></i>&nbsp;(034)3229898</a></li>' +
        '<li><a href="https://wa.me/573193777281" target="_blank"><i class="fab fa-whatsapp"></i>&nbsp; 319 377 7281 </a></li>' +
        '<li><i class="fa fa-envelope"></i>&nbsp;<a href="mailto:inmobiliaria@conaltura.com" target=":_blank">inmobiliaria@conaltura.com</span></a></li>' +
        '<li><i class="fa fa-calendar-alt"></i>&nbsp;<label>Horario de Atención: </label>' +
        '<br>' +
        '<label style="margin-left: 47px;">Lunes a Viernes: </label>' +
        '<br>' +
        '<label style="margin-left: 47px;">7:30 am - 12:45 pm</label>' +
        '<br>' +
        '<label style="margin-left: 47px;">2:00 pm - 6:00 pm</label>' +
        '</li>' +
        '</ul>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="copyright">' +
        '<div class="container">' +
        '<div class="row">' +
        '<div class="col-xs-12 col-sm-6 text-block"> ' +
        '<div class="logo-image">' +
        '<a href="index.html"><img src="images/other/conaltura.png" alt="CitiLights" style="height: 70px;width: 163px;"></a>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-12 col-sm-6 logo-block">' +
        'Copyright' +
        '&copy; 2018 ' +
        ' <a href="https://www.dexcondigital.com/" target="_blank">Dexcon Digital.</a> Todos los derechos reservados.' +
        '<br />' +


        '</div>' +
        '</div>' +
        '</div>' +
        '<div id="back-to-top" class="back-to-top">' +
        '<i class="fa fa-angle-up"></i>' +
        '</div>' +
        '</div>';


    $(".footer-ppal").html(footer);

    //Menu pequeño
    var header = '<div class="container">' +
        '<div class="top-header-inner">' +

        '<div class="top-header-content">' +
        '<ul class="social-top">' +
        '<li><a href="https://www.facebook.com/Conalturainmobiliaria" title="Facebook" target="_blank"><i class="fab fa-facebook-f "></i></a></li>' +
        '</ul>' +
        '<div class="emailto content-item">' +
        '<a href="mailto:inmobiliaria@conaltura.com" target="_blank"><i class="fa fa-envelope"></i>&nbsp;Email:' +
        '<span>inmobiliaria@conaltura.com</span></a>' +
        '</div>' +
        '<div class="register content-item">' +
        '<a href="tel:0343229898" target="_blank"><i class="fa fa-phone"></i> (034) 2662277 Opc. 4 - </a>' +
        '<a href="tel:0343229898" target="_blank"><i class="fa fa-phone"></i> (034) 2662277 ext 209</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';

    $(".header-ppal").html(header);

})
    (jQuery);



setTimeout(function () {
    $.ajax({
        url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/50/limit/50',
        type: 'GET',
        cache: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
        },
        'dataType': "json",
        success: function (data) {

            var res = "";
            if (data == "Sin resultados") {
                res += '<h6 class="ft-col-title" style="font-size: 13px;"> No hay inmuebles destacados en Arriendo </h6>';
                $("#ulti-prop-a").append(res);
                return;

            } else {
                var j = 0;
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    if (data[i].Gestion == "Arriendo") {
                        res += '<li>' +
                            '<div class="featured-image">';
                        if (data[i].foto1 != "") {

                            res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><img src="' + data[i].foto1 + '" alt="" style="height: 55px;"></a>';

                        } else {
                            res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><img src="images/no_image.png" alt="" style="height: 55px;"></a>';

                        }
                        res += '</div>' +
                            '<div class="featured-decs">' +
                            '<span class="featured-status"><a href="index.html#"></a></span>' +
                            '<h4 class="featured-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >' + data[i].Barrio + ' , ' + data[i].Ciudad + '</a></h4>' +
                            '</div>' +
                            '</li>';



                        j++;
                        if (j > 1) {
                            break;
                        }
                    }

                }
            }

            $("#ulti-prop-a").append(res);


        }

    });
});

setTimeout(function () {
    $.ajax({
        url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/50/limit/50',
        type: 'GET',
        cache: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
        },
        'dataType': "json",
        success: function (data) {

            var res = "";
            if (data == "Sin resultados") {
                res += '<h6 class="ft-col-title" style="font-size: 13px;"> No hay inmuebles destacados en Venta </h6>';
                $("#ulti-prop-v").append(res);
                return;

            } else {
                var j = 0;
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    if (data[i].Gestion == "Venta") {
                        res += '<li>' +
                            '<div class="featured-image">';
                        if (data[i].foto1 != "") {

                            res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><img src="' + data[i].foto1 + '" alt="" style="height: 55px;"></a>';

                        } else {
                            res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><img src="images/no_image.png" alt="" style="height: 55px;"></a>';

                        }
                        res += '</div>' +
                            '<div class="featured-decs">' +
                            '<span class="featured-status"><a href="index.html#"></a></span>' +
                            '<h4 class="featured-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >' + data[i].Barrio + ' , ' + data[i].Ciudad + '</a></h4>' +
                            '</div>' +
                            '</li>';



                        j++;
                        if (j > 1) {
                            break;
                        }
                    }
                }
            }
            $("#ulti-prop-v").append(res);

        }

    });
});


jQuery(document).ready(function ($) { $(window).load(function () { $('#preloader').fadeOut('slow', function () { $(this).remove(); }); }); });

$(document).ready(function () {
    $('body').on('click', '#items_en_uso li', function () {
        console.log($(this).attr('id'));
        if ($(this).attr('id') == 'items3') {
            sessionStorage.clear();
            localStorage.count = 1;
        }

    })
});





