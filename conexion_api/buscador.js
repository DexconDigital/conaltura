$(document).ready(function () {
    // si el campo codigo tiene un valor los demas  campos se desabilitan
    $('#codigo_buscar').keyup(function () {
        var value = $(this).val();
        if (value.length > 0) {
            $('#ciudad_buscar').attr("disabled", true);
            $('#barrio_buscar').attr("disabled", true);
            $('#tipo_inmueble_buscar').attr("disabled", true);
            $('#tipo_gestion_buscar').attr("disabled", true);
            $('#precio_minimo_buscar').attr("disabled", true);
            $('#precio_maximo_buscar').attr("disabled", true);
        } else {
            $('#ciudad_buscar').removeAttr("disabled");
            $('#barrio_buscar').removeAttr("disabled");
            $('#tipo_inmueble_buscar').removeAttr("disabled");
            $('#tipo_gestion_buscar').removeAttr("disabled");
            $('#precio_minimo_buscar').removeAttr("disabled");
            $('#precio_maximo_buscar').removeAttr("disabled");
        }
    });

    // Funcion para cargar departamentos, ciudades y barrios
    $.ajax({
        url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/v2/departamento',
        type: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:' + TOKEN));
        },
        'dataType': "json",
        success: function (depto) {
            for (var i = 0; i < depto.length; i++) {
                // Funcion para traer ciudades
                $.ajax({
                    url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/' + depto[i].id,
                    type: 'GET',
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader(
                            'Authorization',
                            'Basic ' + btoa('Authorization:' + TOKEN));
                    },
                    'dataType': "json",
                    success: function (ciudad) {
                        var ciudades_resultados = " ";
                        for (var i = 0; i < ciudad.length; i++) {
                            ciudades_resultados +=
                                '<option value="' + ciudad[i].id + '">' +
                                ciudad[i].nombre +
                                '</option>';
                        }
                        $('#ciudad_buscar').append(ciudades_resultados);
                        // Funcion para traer barrios
                    }
                });
            }
        }
    });

    $("#ciudad_buscar").change(function () {
        var ciudad_id = $("#ciudad_buscar option:selected").val();
        // Limpia el selected de los barrios cada vez que se cambia de ciudad
        $('#barrio_buscar').empty();
        $.ajax({
            url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/' + ciudad_id,
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:' + TOKEN));
            },
            'dataType': "json",
            success: function (barrios) {
                var barrios_resultados = " ";
                barrios_resultados +=
                    '<option value="0">Barrio</option>';
                for (var i = 0; i < barrios.length; i++) {
                    barrios_resultados +=
                        '<option value="' + barrios[i].id + '">' +
                        barrios[i].nombre +
                        '</option>';
                }
                $('#barrio_buscar').append(barrios_resultados);
            }
        });
    });
    // Funcion para traer tipo de gestion ejm: "arriendo, venta etc."
    $.ajax({
        url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/gestion',
        type: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:' + TOKEN));
        },
        'dataType': "json",
        success: function (gestion) {
            //Eliminar un campo del array 
            gestion.splice(2, 1)


            var gestion_resultados = " ";
            for (var i = 0; i < gestion.length; i++) {

                gestion_resultados +=
                    '<option value="' + gestion[i].idGestion + '">' +
                    gestion[i].Nombre +
                    '</option>';


            }
            $('#tipo_gestion_buscar').append(gestion_resultados);

        }
    });

    // Funcion que trae el tipo de inmueble ejm: apartamento casa etc
    $.ajax({
        url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/v2/tipoInmuebles/unique/1',
        type: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:' + TOKEN));
        },
        'dataType': "json",
        success: function (operacion) {
            var operacion_resultados = " ";
            for (var i = 0; i < operacion.length; i++) {
                operacion_resultados +=
                    '<option value="' + operacion[i].idTipoInm + '">' +
                    operacion[i].Nombre +
                    '</option>';
            }
            $('#tipo_inmueble_buscar').append(operacion_resultados);
        }

    });

    // Buscar por medio del boton creado en el buscador
    $('#buscar').click(function () {
        busqueda();
    });

    // buscar por medio de la tecla enter
    $('body').keyup(function (e) {
        if (e.keyCode == 13) {
            busqueda();
        }
    });
});


// Definir las variables que se van a usar para almacenar los datos que se traen del buscador
var code,
    ciudad_buscar,
    barrio_buscar,
    gestion_buscar,
    tipo_inmueble_buscar,
    precio_maximo_buscar,
    precio_minimo_buscar;


// Esta funcion trae los campos digitados en el buscador
var busqueda = function () {
    code = $("#codigo_buscar").val();
    ciudad_buscar = $('#ciudad_buscar option:selected').val();
    barrio_buscar = $('#barrio_buscar option:selected').val();
    gestion_buscar = $('#tipo_gestion_buscar option:selected').val();
    tipo_inmueble_buscar = $('#tipo_inmueble_buscar option:selected').val();
    precio_minimo_buscar = $('#precio_minimo_buscar').val();
    precio_maximo_buscar = $('#precio_maximo_buscar').val();


    // precio_minimo_buscar = precio_minimo_buscar.replace('.', '');
    // precio_maximo_buscar = precio_maximo_buscar.replace('.', '');
    // Si no trae nada del buscador definirla en cero

    ciudad_buscar = existeCampo(ciudad_buscar);
    barrio_buscar = existeCampo(barrio_buscar);
    gestion_buscar = existeCampo(gestion_buscar);
    tipo_inmueble_buscar = existeCampo(tipo_inmueble_buscar);
    precio_minimo_buscar = existeCampo(precio_minimo_buscar);
    precio_maximo_buscar = existeCampo(precio_maximo_buscar);

    
    if (code !== "") {
        window.location.href = 'detalle_inmueble.php?co=' + code + '';
    } else {

        // $.ajax({
        //     url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/0/total/9/departamento/0/ciudad/'+ciudad_buscar+'/zona/0/barrio/'+barrio_buscar+'/tipoInm/'+tipo_inmueble_buscar+'/tipOper/'+gestion_buscar+'/areamin/0/areamax/0/valmin/'+ precio_minimo_buscar +'/valmax/'+ precio_maximo_buscar +'/campo/0/order/desc/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
        //     type: 'GET',
        //     beforeSend: function (xhr) {
        //         xhr.setRequestHeader(
        //             'Authorization',
        //             'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
        //     },
        //     'dataType': "json",
        //     success: function (data) {
        //         console.log(data);
        //         var cities = L.layerGroup();
    
        //         // for (i = 0; i < parseInt(data.Inmuebles.length); i++) {
        //         //     //    Consulta del api a los datos que necesito
        //         //     // console.log(data.Inmuebles[i].latitud, data.Inmuebles[i].longitud, data.Inmuebles[i].Codigo_Inmueble);
    
    
        //         //     L.marker([data.Inmuebles[i].latitud, data.Inmuebles[i].longitud]).bindPopup('<img src="' + data.Inmuebles[i].foto1 + '" alt="" style=""><p class="text-center" >Código: ' + data.Inmuebles[i].Codigo_Inmueble + '</p><p class="text-center">' + data.Inmuebles[i].Tipo_Inmueble + ' en ' + data.Inmuebles[i].Gestion + '</p><p class="text-center"><a href="detalle_inmueble.php?co=' + data.Inmuebles[i].Codigo_Inmueble + '">Ver más</a></p>').addTo(cities)
                    
        //         // }
    
    
        //         var mbAttr = ' <a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a> ' +
        //             ' <a href="http://creativecommons.org/licenses/by-sa/2.0/"> CC-BY-SA </a>, ' +
        //             ' Imágenes © <a href="http://mapbox.com"> Mapbox </a> ',
        //             mbUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    
    
        //         // coordenadas del mapa 
        //         // L.marker([4.7042101, -74.05383970000003],{ title:"Hola Mundo", }).addTo(cities).bindPopup('<img src="images/no_image.png" alt="" style="max-width: 200px;"><p class="text-left">Código:1100</p><p class="text-left">Casa en venta</p><p class="text-center"><a href="">Ver más</a></p>').openPopup(),
        //         //     L.marker([4.7046101, -74.05483990000003]).bindPopup('<img src="images/no_image.png" alt="" style="max-width: 200px;"><p class="text-left">Código:1100</p><p class="text-left">Casa en venta</p><p class="text-center"><a href="">Ver más</a></p>').addTo(cities),
        //         //     L.marker([4.7048101, -74.05583100000003]).bindPopup('<img src="images/no_image.png" alt="" style="max-width: 200px;"><p class="text-left">Código:1100</p><p class="text-left">Casa en venta</p><p class="text-center"><a href="">Ver más</a></p>').addTo(cities);
    
    
    
    
        //         var grayscale = L.tileLayer(mbUrl, {
        //             id: 'mapbox.light',
        //             attribution: mbAttr
        //         }),
        //             streets = L.tileLayer(mbUrl, {
        //                 id: 'mapbox.streets',
        //                 attribution: mbAttr
        //             });
    
        //         var map = L.map('map', {
        //             center: [data.Inmuebles[0].latitud, data.Inmuebles[0].longitud],
        //             zoom: 12,
        //             layers: [grayscale, cities]
        //         });
    
        //         var baseLayers = {
        //             "Grayscale": grayscale,
        //             "Streets": streets
        //         };
    
        //         var overlays = {
        //             "Cities": cities
        //         };
    
        //         L.control.layers(baseLayers, overlays).addTo(map);
        //     }
    
    
        // });


        window.location.href = 'inmuebles-a.php?ci=' + ciudad_buscar +
            '&bar=' + barrio_buscar +
            '&ge=' + gestion_buscar +
            '&in=' + tipo_inmueble_buscar +
            '&premin=' + precio_minimo_buscar +
            '&premax=' + precio_maximo_buscar +
            '';

           
    }
    
      
    
}



