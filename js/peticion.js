$.ajax({
    url: "https://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
    type: "GET",
    beforeSend: function(xhr) {
        xhr.setRequestHeader(
            "Authorization",
            "Basic " +
            btoa("Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472")
        );
    },
    dataType: "html",
    success: function(data) {
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
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader(
                            "Authorization",
                            "Basic " +
                            btoa("Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472")
                        );
                    },
                    dataType: "json",
                    success: function(data) {
                        var resultado = '';
                        var informacion = (data);
                        for (var i = 0; i < informacion.length; i++) {
                            resultado += '<option value="' +
                                informacion[i].id +
                                '">' +
                                informacion[i].nombre +
                                "</option>";
                        }
                        $(".ciu").append(resultado);
                    }
                });
            }
        }
    }
});




$.ajax({
url: "https://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
type: "GET",
beforeSend: function(xhr) {
    xhr.setRequestHeader(
        "Authorization",
        "Basic " +
        btoa("Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472")
    );
},
dataType: "html",
success: function(data) {
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
                beforeSend: function(xhr) {
                    xhr.setRequestHeader(
                        "Authorization",
                        "Basic " +
                        btoa("Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472")
                    );
                },
                dataType: "json",
                success: function(data) {
                    var resultado = '';
                    var informacion = (data);
                    for (var i = 0; i < informacion.length; i++) {
                        }
                }
            });
        }
    }
}
});