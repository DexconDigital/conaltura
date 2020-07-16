$(document).ready(function () {
    // window.onload = estoyencero;
    // si el campo codigo tiene un valor los demas  campos se desabilitan
    $('#codigo_buscar').keyup(function () {
        var value = $(this).val();
        if (value.length > 0) {
            $('#ciudad_buscar').attr("disabled", true);
            $('#barrio_buscar').attr("disabled", true);
            $('#tipo_inmueble_buscar').attr("disabled", true);
            $('.operacion').attr("disabled", true);
            $('#precio_minimo_buscar').attr("disabled", true);
            $('#precio_maximo_buscar').attr("disabled", true);
        } else {
            $('#ciudad_buscar').removeAttr("disabled");
            $('#barrio_buscar').removeAttr("disabled");
            $('#tipo_inmueble_buscar').removeAttr("disabled");
            $('.operacion').removeAttr("disabled");
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
        url: "https://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option" value="0">¿En venta o Arriendo?</option>';
            var operacion = localStorage.getItem("gestion");
            for (var i = 0; i < data.length; i++) {
                if (data[i].idGestion != 3) {
                    if (operacion == data[i].idGestion) {

                        resultado += '<option selected value="' +
                            data[i].idGestion + '">' +
                            data[i].Nombre +
                            "</option>";
                    }
                    else {
                        resultado += '<option value="' +
                            data[i].idGestion + '">' +
                            data[i].Nombre +
                            "</option>";
                    }
                }
                else {

                }

            }
            $(".operacion").html(resultado);

        }
    });

    $.ajax({
        url: "https://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option" value="0">¿En venta o Arriendo?</option>';
            var operacion = localStorage.getItem("gestion");
            for (var i = 0; i < data.length; i++) {
                if (data[i].idGestion != 3) {
                    if (operacion == data[i].idGestion) {

                        resultado += '<option selected value="' +
                            data[i].idGestion + '">' +
                            data[i].Nombre +
                            "</option>";
                    }
                    else {
                        resultado += '<option value="' +
                            data[i].idGestion + '">' +
                            data[i].Nombre +
                            "</option>";
                    }
                }
                else {

                }

            }
            $(".operacion").html(resultado);

        }
    });
    $(".operacion").change(function () {
        var operacion = $(".operacion option:selected").val();


        if (window.location.pathname == "/inmuebles.php") {
            sessionStorage.setItem("operacionselect", operacion);

        }
        if (window.location.pathname == "/") {
            sessionStorage.setItem("operacionselect", operacion);

        }
        if (window.location.pathname == "/index.html") {
            sessionStorage.setItem("operacionselect", operacion);

        }

        if (operacion == 1) {

            $(".gprice-slider-range").noUiSlider({
                start: [900000, 20000000],
                range: { 'min': 900000, 'max': 50000000 },
                step: 200000
            }, true);
        }
        else if (operacion == 2) {

            $(".gprice-slider-range").noUiSlider({
                start: [900000, 1500000000],
                range: { 'min': 900000, 'max': 1500000000 }
            }, true);

        }
        else if (operacion == 5) {

            $(".gprice-slider-range").noUiSlider({
                start: [2000000, 1500000000],
                range: { 'min': 2000000, 'max': 1500000000 }
            }, true);

        }

    });

    $(function () {

        if (localStorage.gestion == 1) {

            $(".gprice-slider-range").noUiSlider({
                start: [900000, 50000000],
                range: { 'min': 900000, 'max': 20000000 }
            }, true);
        }
        else if (localStorage.gestion == 2) {

            $(".gprice-slider-range").noUiSlider({
                start: [900000, 1500000000],
                range: { 'min': 900000, 'max': 1500000000 }
            }, true);

        }
        else if (localStorage.gestion == 5) {
            $(".gprice-slider-range").noUiSlider({
                start: [2000000, 1500000000],
                range: { 'min': 2000000, 'max': 1500000000 }
            }, true);
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
    operacion,
    tipo_inmueble_buscar,
    // precio_maximo_buscar,
    // precio_minimo_buscar;
    precio,
    precio1;


// Esta funcion trae los campos digitados en el buscador
var busqueda = function () {
    code = $("#codigo_buscar").val();
    ciudad_buscar = $('#ciudad_buscar option:selected').val();
    barrio_buscar = $('#barrio_buscar option:selected').val();
    operacion = $('.operacion   option:selected').val();
    tipo_inmueble_buscar = $('#tipo_inmueble_buscar option:selected').val();
    // precio_minimo_buscar = $('#precio_minimo_buscar').val();
    // precio_maximo_buscar = $('#precio_maximo_buscar').val();
    $(".gprice-slider-range").Link('lower').to('-inline-<div class="tooltip"></div>', function (value) {
        (
            precio = value.replace('.', '')
        );
    });

    $(".gprice-slider-range").Link('upper').to('-inline-<div class="tooltip"></div>', function (value) {
        (
            precio1 = value.replace('.', '')
        )
    });
    precio = precio.replace('&#36;', '')
    precio = precio.replace('.', '')
    precio = precio.replace('.', '')
    precio = precio.replace('.', '')
    precio = precio.replace('.', '')

    precio1 = precio1.replace('.', '')
    precio1 = precio1.replace('.', '')
    precio1 = precio1.replace('.', '')
    precio1 = precio1.replace('.', '')
    precio1 = precio1.replace('&#36;', '')

    sessionStorage.setItem("preciogeo1", precio);
    sessionStorage.setItem("preciogeo2", precio1);


    // precio_minimo_buscar = precio_minimo_buscar.replace('.', '');
    // precio_maximo_buscar = precio_maximo_buscar.replace('.', '');
    // Si no trae nada del buscador definirla en cero

    ciudad_buscar = existeCampo(ciudad_buscar);
    barrio_buscar = existeCampo(barrio_buscar);
    operacion = existeCampo(operacion);
    tipo_inmueble_buscar = existeCampo(tipo_inmueble_buscar);
    // precio_minimo_buscar = existeCampo(precio_minimo_buscar);
    // precio_maximo_buscar = existeCampo(precio_maximo_buscar);


    if (code !== "") {
        window.location.href = 'detalle_inmueble.php?co=' + code + '';
    } else {

        window.location.href = 'inmuebles-a.php?ci=' + ciudad_buscar +
            '&bar=' + barrio_buscar +
            '&ge=' + operacion +
            '&in=' + tipo_inmueble_buscar +
            '&premin=' + precio +
            '&premax=' + precio1 +
            '';


    }



}



