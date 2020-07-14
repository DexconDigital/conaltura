$(document).ready(function () {
    //guarda el id de los departamentos
    var res = new Array();

    //peticion departamentos
    $.ajax({
        url: "https://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472")
            );
        },
        dataType: "html",
        success: function (data) {
            var datos = data.trim();

            if (datos.localeCompare('"Sin resultados"') == 0) {
                res += "No hay Inmuebles destacados";
            } else {
                var informacion = JSON.parse(data);
                for (var i = 0; i < informacion.length; i++) {
                    //peticion ciudades
                    $.ajax({
                        url: "https://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/" + informacion[i].id + "",
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
                            var resultado = '<option class="bs-title-option"  value="0">Ciudad</option>';
                            var informacion = (data);
                            var ciudad = localStorage.getItem("ciudad");
                            for (var i = 0; i < informacion.length; i++) {
                                if (ciudad == informacion[i].id) {
                                    resultado += '<option selected value="' +
                                        informacion[i].id +
                                        '">' +
                                        informacion[i].nombre +
                                        "</option>";
                                }
                                else {
                                    resultado += '<option value="' +
                                        informacion[i].id +
                                        '">' +
                                        informacion[i].nombre +
                                        "</option>";

                                }
                            }
                            $(".ciudad").append(resultado);
                        }
                    });
                }
            }
        }
    });


    $(".ciudad").change(function () {
        var res_ciudad = $(".ciudad option:selected").val();
        if (window.location.pathname == "/inmuebles.php") {
            sessionStorage.setItem("ciudadselect", res_ciudad);
        }
        if (window.location.pathname == "/") {
            sessionStorage.setItem("ciudadselect", res_ciudad);
        }
        if (window.location.pathname == "/index.html") {
            sessionStorage.setItem("ciudadselect", res_ciudad);
        }
        
        $.ajax({
            url: "https://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/" +
                res_ciudad +
                "",
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
                var resultado = '<option class="bs-title-option"  value="0">Barrio</option>';
                var informacion = data;
                for (var i = 0; i < informacion.length; i++) {
                        resultado += '<option value="' + informacion[i].id + '">' +
                            informacion[i].nombre +
                            "</option>";

                    

                }


                $(".zona").html(resultado);
            }
        });
    });

    //get list of barrios

    //get list of properties
    $.ajax({
        url: "https://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
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
            var resultado = '<option class="bs-title-option" value="0">¿Qué buscas?</option>';
            var informacion = (data);
            var tipo = localStorage.getItem("tipo");

            for (var i = 0; i < informacion.length; i++) {
                if (tipo == informacion[i].idTipoInm) {
            
                    resultado +=
                        '<option selected value="' +
                        informacion[i].idTipoInm + '" >' +
                        informacion[i].Nombre +
                        "</option>";
                }
                else {
     

                    resultado +=
                        '<option value="' +
                        informacion[i].idTipoInm + '">' +
                        informacion[i].Nombre +
                        "</option>";
                }

            }
            $(".inmueble").html(resultado);
        }
    });

    //get list of the transactions
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
                step:200000
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


    $(".zona").change(function () {
        var zona = $(".zona option:selected").val();

        if (window.location.pathname == "/inmuebles.php") {
            sessionStorage.setItem("zonaselect", zona);

        }
       if (window.location.pathname == "/") {
            sessionStorage.setItem("zonaselect", zona);

        }

         if (window.location.pathname == "/index.html") {
            sessionStorage.setItem("zonaselect", zona);

        }


    });

    $(".inmueble").change(function () {
        var inmueble = $(".inmueble option:selected").val();

        if (window.location.pathname == "/inmuebles.php") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }
        if (window.location.pathname == "/") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }
         if (window.location.pathname == "/index.html") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }


    });

    var cuidad, inmueble, operacion, zona;

    $(".search-1").click(function () {
        localStorage.count=1;
        sessionStorage.cont = 0;
        zona = $(".zona option:selected").val();
        inmueble = $(".inmueble option:selected").val();
        ciudad = $(".ciudad option:selected").val();
        operacion = $(".operacion option:selected").val();
        var code = $(".codeInm").val();
        var precio, precio1;

        

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


        if (code !== "") {
            location.href = 'detalle_inmueble.php?dt=472-' + code + '';
        } else {
          
                location.href = 'inmuebles-b.php?gs=' + operacion + '&&ti=' + inmueble + '&&ci=' + ciudad + '&&zo=' + zona + '&&pre=' + precio + '&&pre1=' + precio1 + '';
                

        }
        
        sessionStorage.cont+=1;
        



    });


});