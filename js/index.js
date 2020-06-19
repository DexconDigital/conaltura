$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/inmueblesDestacados/total/50/limit/50',
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

            $("#propiedades-arriendo").append(res);
            return;

        } else {
            var res = " ";

			var limite=data.infoAdd.totalInmuebles;
if(data.infoAdd.fin>1)
limite=49;
            for (var i = 0; i < limite; i++) {
                if (data[i].Gestion == "Arriendo" && data[i].Gestion != undefined) {
                    res += '<article class="hentry arriendo">' +
                        '<div class="property-featured">' +
                        '<a class="content-thumb" href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">';
                    if (data[i].foto1 != "") {
                        res += '<img src="' + data[i].foto1 + '" alt="">';
                    } else {
                        res += '<img src="images/no_image.png" alt="">';
                    }
                    res += '<span class="property-label">' + data[i].Codigo_Inmueble + '</span>' +
                        '<span class="property-category-2">' + data[i].Tipo_Inmueble + '</span>' +
                        '</div>' +
                        '<div class="property-wrap">' +
                        '  <h2 class="property-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" "> ' + data[i].Barrio + '</a></h2>' +
                        '<div class="property-summary">' +
                        '<div class="property-detail">' +
                        '    <div class="size"><span >' + data[i].AreaConstruida + ' </span>' +
                        '    </div>' +
                        '    <div class="bathrooms"><span > ' + data[i].banios + '</span>' +
                        '    </div>' +
                        '    <div class="bedrooms"><span >' + data[i].Alcobas + ' </span>' +
                        '    </div>' +
                        '  </div>' +
                        '  <div class="property-info">' +
                        '    <div class="property-price">' +
                        '      <span><span class="amount" > $' + data[i].Canon + '</span></span>' +
                        '    </div>' +
                        '  </div>' +
                        '</div>' +
                        '</article>';


                }
            }
        }
          $("#carouselA").append(res);

        $('#carouselA').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive:{
                300:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }

        });
    }
});

$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/inmueblesDestacados/total/50/limit/50',
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

            $("#propiedades-venta").append(res);
            return;

        } else {
            var res = " ";
            			var limite=data.infoAdd.totalInmuebles;
if(data.infoAdd.fin>1)
limite=49;
            for (var i = 0; i < limite; i++) {
                if (data[i].Gestion == "Venta") {
                    res += '<article class="hentry arriendo">' +
                        '<div class="property-featured">' +
                        '<a class="content-thumb" href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">';
                    if (data[i].foto1 != "") {
                        res += '<img src="' + data[i].foto1 + '" alt="">';
                    } else {
                        res += '<img src="images/no_image.png" alt="">';
                    }
                    res += '<span class="property-label">' + data[i].Codigo_Inmueble + '</span>' +
                    '<span class="property-category-2">' + data[i].Tipo_Inmueble + '</span>' +
                        '</div>' +
                        '<div class="property-wrap">' +
                        '  <h2 class="property-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" "> ' + data[i].Barrio + '</a></h2>' +
                        '<div class="property-summary">' +
                        '<div class="property-detail">' +
                        '    <div class="size"><span >' + data[i].AreaConstruida + ' </span>' +
                        '    </div>' +
                        '    <div class="bathrooms"><span > ' + data[i].banios + '</span>' +
                        '    </div>' +
                        '    <div class="bedrooms"><span >' + data[i].Alcobas + ' </span>' +
                        '    </div>' +
                        '  </div>' +
                        '  <div class="property-info">' +
                        '    <div class="property-price">' +
                        '      <span><span class="amount" > $' + data[i].Venta + '</span></span>' +
                        '    </div>' +
                        '  </div>' +
                        '</div>' +
                        '</article>';


                }
            }
        }
        $("#myCarousel").append(res);

        $('#myCarousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive:{
                300:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }

        });
    }
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
            console.log(data);
            var res = "";
            if (data == "Sin resultados") {
                res += '';
                $("#propiedades").append(res);
                return;

            } else {
                var j = 0;
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    $("#foto" + i + "").attr("src", data[i].foto1);
                    if (data[i].Gestion == "Arriendo") {
                        $("#precio" + i + "").text("$ " + data[i].Canon);
                    } else if (data[i].Gestion == "Venta") {
                        $("#precio" + i + "").text("$ " + data[i].Venta);

                    }
                    $("#ubicacion" + i + "").text(" " + data[i].Ciudad + ", " + data[i].Departamento);
                    $("#alcobas" + i + "").text(data[i].Alcobas);
                    $("#banios" + i + "").text(data[i].banios);
                    $("#area" + i + "").text(data[i].AreaConstruida + " mts");
                    $("#code" + i + "").text(data[i].Codigo_Inmueble);
                    $("#descripcion" + i + "").text(data[i].descripcionlarga);
                    $("#gestion" + i + "").text(data[i].Gestion);
                    $("#inmueble" + i + "").text(data[i].Tipo_Inmueble);
                    $("#direccion" + i + "").attr("href", "detalle-inmueble.php?dt=" + data[i].Codigo_Inmueble);
                    j++;
                    if (j > 10) {
                        break;
                    }

                }
            }
        }
    });
});
