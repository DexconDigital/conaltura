function paginator(actual) {

    let position = 0;
    if (position != 0) {
        position = localStorage.getItem("total");
    }
    var count = localStorage.getItem("count");

    if (actual == 'ant') {
        count--;
        localStorage.setItem("count", count);
        imprimir(count);
    }
    if (actual == 'sig') {
        count++;
        localStorage.setItem("count", count);
        imprimir(count);
    }

}

function imprimir(count) {
    console.log(count + 'paginas');
    if (localStorage.getItem("gestion") == 0 && localStorage.getItem("ciudad") == 0 && localStorage.getItem("tipo") == 0 && localStorage.getItem("zona") == 0 && localStorage.getItem("precio") == 0 && localStorage.getItem("precio1") == 5000000000) {
       console.log('Pagina sin datos');
        $.ajax({
            url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/fecha/order/desc/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
            },
            'dataType': "json",
            success: function (data) {


                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';

                    $("#inmb").append(res);

                    return;

                } else {


                    localStorage.setItem("total", data.datosGrales.fin - 1);

                    var res = " ";


                    res = '<div class="total-inm"><h4>Se han encontrado ' + data.Inmuebles.length + '</h4></div>';
                    for (var pos = 0; pos < data.Inmuebles.length; pos++) {
                        res += '<article class="hentry">' +
                            '<div class="property-featured">' +

                            '<a class="content-thumb"  href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">';
                        if (data.Inmuebles[pos].foto1 != "") {
                            res += '<img src="' + data.Inmuebles[pos].foto1 + '" alt="">';
                        } else {
                            res += '<img src="images/no_image.png" alt="">';
                        }

                        
                        

                        res += 
                        
                        '</a>' +
                             
                            '<span class="property-label">' + data.Inmuebles[pos].Codigo_Inmueble + '</span>' +
                            '<button class="property-label-2"  data-toggle="modal" data-target="#ubica">Mapa de ubicación</button>' +
                            '<div id="ubica" class="modal fade" role="dialog">'+
                             '<div class="modal-dialog">'+

                                ' <div class="modal-content">'+
                                     '<div class="modal-header">'+
                                     '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                                      ' <h4 class="modal-title">Ubicación</h4>'+
                                     ' </div>'+
                                     '<div class="modal-body">'+
                                     '<iframe src="ubicacion.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" frameborder="0" style="width: 100%; height: 350px !important;"></iframe>'+
                                                                '</div>'+
                                    '<div class="modal-footer">'+
                                     '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'+
                                    ' </div>'+
                                    '</div>'+

                                 '</div>'+
                                '</div>'+
                            '<span class="property-category-2"><a  href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' + data.Inmuebles[pos].Tipo_Inmueble + '</a></span>' +
                            '<span class="property-category">' + data.Inmuebles[pos].Gestion + '</span>' +
                            '</div>' +
                            '<div class="property-wrap">' +
                            '<h2 class="property-title">' +
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" >' + data.Inmuebles[pos].Barrio + '</a>' +
                            '</h2>' +
                            '<div class="property-summary">' +
                            '<div class="property-detail">' +
                            '<div class="size">' +
                            '<span>' + data.Inmuebles[pos].AreaConstruida + '</span>' +
                            '</div>' +
                            '<div class="bathrooms"><span>' + data.Inmuebles[pos].banios + '</span>' +
                            '</div>' +
                            '<div class="bedrooms">' +
                            '<span>' + data.Inmuebles[pos].Alcobas + '</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="property-info">' +
                            '<div class="property-price">' +
                            '<span>';

                            

                        if (data.Inmuebles[pos].Gestion == "Arriendo") {

                            res += '<span><span class="amount">&#36;' + data.Inmuebles[pos].Canon + '</span>';
                        } else if (data.Inmuebles[pos].Gestion == "Arriendo/Venta") {

                            res += '<span><span class="amount">&#36;' + data.Inmuebles[pos].Venta + '"<br>"' + data[i].Canon + '</span>';
                        } else {
                            res += '<span><span class="amount">&#36;' + data.Inmuebles[pos].Venta + '</span>';
                        }
                        res += '</span>'

                        '</div>' +


                            '</div>' +
                            '<div class="property-info property-fullwidth-info">' +
                            '<div class="property-price">';

                        res += '</div>' +

                            '</div>' +
                            '</div>' +
                            '</div>' +

                            '</article>';

                        

                    }


                    $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"));
                }
                $("#inmb").html(res)

            }

        });
        validar()
    } else {
        $.ajax({
            url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/' + localStorage.getItem("ciudad_id") + '/zona/0/barrio/' + localStorage.getItem("zona") + '/tipoInm/' + localStorage.getItem("tipo") + '/tipOper/' + localStorage.getItem("gestion") + '/areamin/0/areamax/0/valmin/' + localStorage.getItem("precio") + '/valmax/' + localStorage.getItem("precio1") + '/campo/fecha/order/desc/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
            },
            'dataType': "json",
            success: function (data) {
                var res = " ";
                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                    $("#siguiente").css("display", "none");
                    $("#anterior").css("display", "none");
					
                    $("#inmb").append(res);
                    return;

                } else {
					
                    localStorage.setItem("total", data.datosGrales.fin);
                    localStorage.setItem("inicio", data.datosGrales.inicio);
                    localStorage.setItem("actual", data.datosGrales.pagina_actual);

                    res = '<div class="total-inm" ><h4>Se han encontrado ' + data.datosGrales.totalInmuebles + ' inmuebles</h4></div>';
                    for (var pos = 0; pos < (data.Inmuebles.length); pos++) {
                        if (data.Inmuebles[pos].Codigo_Inmueble != undefined) {
                            res += '<article class="hentry">' +
                                '<div class="property-featured">' +

                                '<a class="content-thumb"  href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">';
                            if (data.Inmuebles[pos].foto1 != "") {
                                res += '<img src="' + data.Inmuebles[pos].foto1 + '" alt="">';
                            } else {
                                res += '<img src="images/no_image.png" alt="">';
                            }
                            res += '</a>' +
                            '<span class="property-label">' + data.Inmuebles[pos].Codigo_Inmueble + '</span>' +
                            '<button class="property-label-2"  data-toggle="modal" data-target="#ubica">Mapa de ubicación</button>' +
                            '<div id="ubica" class="modal fade" role="dialog">'+
                             '<div class="modal-dialog">'+

                                ' <div class="modal-content">'+
                                     '<div class="modal-header">'+
                                     '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                                      ' <h4 class="modal-title">Ubicación</h4>'+
                                     ' </div>'+
                                     '<div class="modal-body">'+
                                     '<iframe src="ubicacion.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" frameborder="0" style="width: 100%; height: 350px !important;"></iframe>'+
                                                                '</div>'+
                                    '<div class="modal-footer">'+
                                     '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'+
                                    ' </div>'+
                                    '</div>'+

                                 '</div>'+
                                '</div>'+
                                '<span class="property-category-2"><a  href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' + data.Inmuebles[pos].Tipo_Inmueble + '</a></span>' +
                                '<span class="property-category">' + data.Inmuebles[pos].Gestion + '</span>' +
                                '</div>' +
                                '<div class="property-wrap">' +
                                '<h2 class="property-title">' +
                                '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" >' + data.Inmuebles[pos].Barrio + '</a>' +
                                '</h2>' +
                                '<div class="property-summary">' +
                                '<div class="property-detail">' +
                                '<div class="size">' +
                                '<span>' + data.Inmuebles[pos].AreaConstruida + '</span>' +
                                '</div>' +
                                '<div class="bathrooms"><span>' + data.Inmuebles[pos].banios + '</span>' +
                                '</div>' +
                                '<div class="bedrooms">' +
                                '<span>' + data.Inmuebles[pos].Alcobas + '</span>' +
                                '</div>' +
                                '</div>' +
                                '<div class="property-info">' +
                                '<div class="property-price">' +
                                '<span>';
                            if (data.Inmuebles[pos].Gestion == "Arriendo") {

                                res += '<span><span class="amount">&#36;' + data.Inmuebles[pos].Canon + '</span>';
                            } else if (data.Inmuebles[pos].Gestion == "Arriendo/Venta") {

                                res += '<span><span class="amount">&#36;' + data.Inmuebles[pos].Venta + '"<br>"' + data[i].Canon + '</span>';
                            } else {
                                res += '<span><span class="amount">&#36;' + data.Inmuebles[pos].Venta + '</span>';
                            }
                            res += '</span>'

                            '</div>' +


                                '</div>' +
                                '<div class="property-info property-fullwidth-info">' +
                                '<div class="property-price">';

                            res += '</div>' +

                                '</div>' +
                                '</div>' +
                                '</div>' +

                                '</article>';
						    

                        }
                    }
                    if (localStorage.getItem("total") == 0) {
                        $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de 1")
                    } else {
                        $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"))
                    }
                    validar();
                }

                $("#inmb").html(res)

            }

        });

    }
}

function validar() {

    if (localStorage.getItem("total") == localStorage.getItem("actual")) {

        $("#siguiente").css("display", "none");
    } else {

        $("#siguiente").css("display", "inline-flex");
    }

    if (localStorage.getItem("actual") != 1) {
        $("#anterior").css("display", "inline-flex");
    } else {

        $("#anterior").css("display", "none");
    }
}




