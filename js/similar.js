setTimeout(function() {
    $.ajax({
        url: 'https://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/200/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
        type: 'GET',
        cache: true,
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:67YGONEOnLdTmlYuToDOh8sULqFCJqmMLAaj8j4z-472'));
        },
        'dataType': "json",
        success: function(data) {
            console.log(data)

            var res = "";
            var nInmb = 0;
            var j = 0;
            
            for (var i = 0; i < data.totalInmuebles; i++) {
                if (data[i].Codigo_Inmueble != localStorage.codigo) {
                    if ((data[i].Tipo_Inmueble == localStorage.gestion) && (data[i].Ciudad == localStorage.ciudad)) {
                    
                        res += '<li>'+
                        '<div class="featured-image">';
                        if (data[i].foto1 != "") {
                            res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><img src="' + data[i].foto1 + '" alt="" style="height: 60px;"></a>';
                          
                        } else {
                            res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><img src="images/no_image.png" alt="" style="height: 60px;"></a>';
                         
                        }
                        res +='</div>'+
                        '<div class="featured-decs">'+
                        '<span class="featured-status"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >' + data[i].Codigo_Inmueble + '</a></span>'+
                        '<h4 class="featured-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" >' + data[i].Ciudad +', '+data[i].Departamento + '</a></h4>'+
                        '</div>'+
                        '</li>';

                            j++;
                    } else {
                        nInmb++;
                    }
                    if(j > 2){
                        break;
                    }
                }
            }


            if(j == 0){

                res +=   '<div class="media feature-item">'+
                         '<div class="title-widget">No hay Propiedades Similares</div>'+
                            '</div>';
                $(".similarListing").append(res);
                return;
            }
            $(".similarListing").append(res);

        }

    });
});
