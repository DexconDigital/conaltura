<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/btn_subir.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<!-- <script type="text/javascript" src="js/SmoothScroll.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery.cookie.js"></script> -->
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script> -->
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.nouislider.all.min.js"></script>
<!-- <script type="text/javascript" src="js/style.selector.js"></script> -->
<!-- <script type="text/javascript" src="js/property-slider.js"></script> --> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/owlcarousel.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/menu.js?v=5"></script>

<script>
    $(document).ready(function(){
	var altura = $('.menu').offset().top;
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});

});
</script>