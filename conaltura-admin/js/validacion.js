$(document).ready(function () {
    // si el campo url_Video tiene un valor los demas  campos se desabilitan
    $('#url').keyup(function () {
        var value = $(this).val();
        if (value.length > 0) {
            $('#insta_url').attr("disabled", true);
           
        } else {
            $('#insta_url').removeAttr("disabled");
           
        }
    });
   
});
$(document).ready(function () {
    // si el campo instagram_url tiene un valor los demas  campos se desabilitan
    $('#insta_url').keyup(function () {
        var value = $(this).val();
        if (value.length > 0) {
            $('#url').attr("disabled", true);
           
        } else {
            $('#url').removeAttr("disabled");
           
        }
    });
   
});
