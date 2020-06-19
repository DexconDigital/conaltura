setTimeout(function () {
    $.ajax({
        url: 'http://www.simiinmobiliarias.com/ApiSimiweb/response/v21/inmueblesDestacados/total/50/limit/50',
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
                res += ' <div class="section-title"><h5> No hay inmuebles destacados en Arriendo </h5></div>';
                $("#propiedades-a").append(res);
                return;

            } else {
                var j = 0;
               
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                  
                    if (data[i].Gestion == "Arriendo") {
                      
                        res += '<div class="item"><div class="col-xs-12 col-sm-6 col-md-6 " ><div class="property-row" ><article class="hentry has-featured">' +
                            '<div class="property-featured">' +
                            '<a class="content-thumb" href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >';
                        if (data[i].foto1 != "") {
                            res += '<img src="' + data[i].foto1 + '" class="attachment-property-thumb" alt="" /></a>';
                        } else {
                            res += '<img src="images/no_image.png" class="attachment-property-thumb" alt="" /></a>';
                        }
                        res += '<div class="property-detail">' +
                            '<div class="size"><span>' + data[i].AreaConstruida + 'm<sup>2</sup></span>' +
                            '</div>' +
                            '<div class="bathrooms"><span>' + data[i].banios + '</span>' +
                            '</div>' +
                            '<div class="bedrooms"><span>' + data[i].Alcobas + '</span>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="property-wrap">' +
                            '<h2 class="property-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >' + data[i].Barrio + '</a></h2>' +
                            '<h2 class="property-title">' + data[i].Ciudad + ', '+data[i].Departamento+'</h2>' +
                            '<p class="property-title">'+ data[i].Tipo_Inmueble  +
                            '</p>' +
                            '</div>' +
                            '<div class="property-summary">' +
                            '<div class="property-info">' +
                            '<div class="property-price">';
                        if (data[i].Gestion == "Arriendo") {
                            res += '<span class="amount">&#36;' + data[i].Canon + '</span>';
                        } else if (data[i].Gestion == "Arriendo/Venta") {
                            res += '<span class="amount">&#36;' + data[i].Canon + '</span></span>';
                        } else {
                            res += '<span class="amount">&#36;' + data[i].Canon + '</span></span>';
                        }
                        res += '</div>' +
                            '<div class="property-action">' +
                            '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >Ver Más</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</article></div></div></div>';
                            
                        j++;

                        if (j > 5) {
                            break;
                        }
                    }

                }
            }
  
            $("#propiedades-a").append(res);


        }

    });
});

setTimeout(function () {
    $.ajax({
        url: 'http://www.simiinmobiliarias.com/ApiSimiweb/response/v21/inmueblesDestacados/total/50/limit/50',
        type: 'GET',
        cache: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
        },
        'dataType': "json",
        success: function (data) {
            console.log(data)
            var res = "";
            if (data == "Sin resultados") {
                res += '<div class="recent-properties-title"><h5 > No hay inmuebles destacados en Venta </h5><div>';
                $("#propiedades-v").append(res);
                return;

            } else {
                console.log(2)
                var j = 0;
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    if (data[i].Gestion == "Venta") {
                        console.log("in")
                        res += '<div class="col-xs-12 col-sm-6 col-md-6 " ><article class="hentry has-featured">' +
                            '<div class="property-featured">' +
                            '<a class="content-thumb" href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >';
                        if (data[i].foto1 != "") {
                            res += '<img src="' + data[i].foto1 + '"  class="attachment-property-image" alt="" /></a>';
                        } else {
                            res += '<img src="images/no_image.png"  class="attachment-property-image" alt="" /></a>';
                        }
                        res += '<span class="property-category"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >' + data[i].Tipo_Inmueble + '</a></span>' +
                            '</div>' +
                            '<div class="property-wrap">' +
                            '<h2 class="property-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"> ' + data[i].Barrio + '</a></h2>' +
                            '<p >' + data[i].Ciudad + ', '+data[i].Departamento+'</p>' +
                            '<div class="property-summary">' +
                            '<div class="property-detail">' +
                            '<div class="size"><span>' + data[i].AreaConstruida + '</span>' +
                            '</div>' +
                            '<div class="bathrooms"><span>' + data[i].banios + '</span>' +
                            '</div>' +
                            '<div class="bedrooms"><span>' + data[i].Alcobas + '</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="property-info">' +
                            '<div class="property-price">';
                        if (data[i].Gestion == "Arriendo") {
                            res += '<span class="amount">&#36;' + data[i].Canon + '</span>';
                        } else if (data[i].Gestion == "Arriendo/Venta") {
                            res += '<span class="amount">&#36;' + data[i].Venta + '"<br>"' + data[i].Canon + '</span></span>';
                        } else {
                            res += '<span class="amount">&#36;' + data[i].Venta + '</span></span>';
                        }

                        res += '</div>' +
                            '</div>' +
                            '<div class="property-action">' +
                            '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >Ver Más<i class="fa fa-arrow-alt-circle-right"></i></a>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</article></div>';

                            
                        j++;
                        if (j > 2) {
                            break;
                        }

                    }
                }
            }
            
            $("#propiedades-v").append(res);

        }
        

    });
});
