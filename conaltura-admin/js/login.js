jQuery(document).on('submit', '#formlg', function (event) {
    event.preventDefault();

    jQuery.ajax(
        {
            url: 'validar.php',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function () {

                $('.botonlg').val('Validando...');
            }
        })
        .done(function (respuesta) {
            console.log(respuesta);
            if (!respuesta.error) {

                toastr["success"]("Bienvenido a su Administrador", "Usuario Correcto");

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "800",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }
                setTimeout(function () {
                    location.href = 'admin/index.php'
                }, 2000);
            } else {

                toastr["error"]("Por favor verificar la información e ingresar nuevamente", "Datos incorrectos");

                toastr.options = {
                    //primeras opciones
                    "closeButton": false, //boton cerrar
                    "debug": false,
                    "newestOnTop": false, //notificaciones mas nuevas van en la parte superior
                    "progressBar": true, //barra de progreso hasta que se oculta la notificacion
                    "preventDuplicates": false, //para prevenir mensajes duplicados

                    "onclick": null,

                    //Posición de la notificación
                    //toast-bottom-left, toast-bottom-right, toast-bottom-left, toast-top-full-width, toast-top-center
                    "positionClass": "toast-top-right",

                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false
                };
                $('.botonlg').val('Iniciar Sesión');
            }

        })
        .fail(function (resp) {
            console.log(resp.responseText)
        })
        .always(function () {
            console.log("complete");
        });
});