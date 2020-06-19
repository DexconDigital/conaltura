$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        var j = 0;
        for (var indice in data) {
            result += '<div class="col-xs-12 col-sm-4 col-md-4 ">' +
                '<article class="hentry has-featured">' +
                '<div class="property-featured">' +
                '<a class="content-thumb" href="detalle-noticia.php?codigo=' + data[j].id + '">' +
                '<img src="https://www.conalturainmobiliaria.com/conaltura-noticias/admin/' + data[j].imagen + '" alt="' + data[j].descripcion + '"  class="attachment-agent-thumb" alt="" style="width: 100%;height: 245px; "/>' +
                '</a>' +
                '</div>' +
                '<div class="agent-wrap">' +
                '<div class="agent-summary">' +
                '<div class="agent-info">' +
                '<hr>' +
                '<div>' + data[j].titulo + '</div>' +
                '<div class="buttton ver-mas"><a href="detalle-noticia.php?codigo=' + data[j].id + '" style="color: #fff; font-size: 15px; ">Ver más</a></div>' +
                '<div><i class="fa fa-calendar-alt"></i>  ' + data[j].fecha + '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</article>' +
                '</div>';

            j++;
            if (j > 2) {
                break;
            }
        }


        $("#ulti-noticias").append(result);


    },
    error: function (data) {
    }
});
$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        for (var j in data) {
            result += '<article class="hentry format-standard has-featured">' +
                '<div class="content-wrap">' +
                '<header class="content-header">' +
                '<h2 class="content-title">' +
                '<a href="detalle-noticia.php?codigo=' + data[j].id + '">' + data[j].titulo + '</a>' +
                '</h2>' +
                '<p class="content-meta">' +
                '<i class="fa fa-calendar-alt"></i>' +
                '<span>' +
                '<time class="entry-date" >' + data[j].fecha + '</time></span>' +
                '</p>' +
                '</header>' +
                '<div class="content-featured">' +
                '<a class="content-thumb" href="detalle-noticia.php?codigo=' + data[j].id + '">' +
                '<img src="https://www.conalturainmobiliaria.com/conaltura-noticias/admin/' + data[j].imagen + '" alt="' + data[j].descripcion + '"  class="attachment-property-image" alt="">' +
                '</a>' +
                '</div>' +
                '<div class="content-excerpt">' +
                '<p>' + data[j].descripcion + '</p>' +
                '<div><a href="detalle-noticia.php?codigo=' + data[j].id + '" class="read-more">Ver Más</a>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</article>';


        }
        $("#notices-info").append(result);


    },
    error: function (data) {
    }
});




