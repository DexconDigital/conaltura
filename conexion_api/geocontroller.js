$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/13/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
    },
    'dataType': "json",
    success: function(data) {
        console.log(data);
        var res = "";
        if(data = "Sin resultados") {} else {

            for ($i = 0; $i < count($r); $i++){
                $data = $r[$i]
                
            }
        }
    }

});