<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/style.selector.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/btn_subir.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript"> 
        $(document).ready(function() {
            $('.one').click();
        });

        $(".js-tab").on("click", function(e) {
            e.stopPropagation();
            $(this).next().slideToggle();
            $(this).toggleClass('tab-active');
            $(this).next().toggleClass('content-active');
        });
    </script>