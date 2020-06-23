// Boton de subir
$(document).ready(function() {

    $('.subir').click(function() {
        $('body, html').animate({
            scrollTop: '0px'
        }, 500);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.subir').fadeIn(500);
            
        } else {
            $('.subir').fadeOut(500);
            
        }
    });

    
    
});
// fin de boton subir

