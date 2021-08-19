    <!-- Codigo del preloader -->
    <style>
        #wrap-preload {
            position: fixed;
            z-index: 10;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: #fff;
            opacity: 1;
            visibility: visible;
            transition: opacity .5s ease, visibility .5s ease;
            z-index: 1032;
        }

        #wrap-preload.close {
            opacity: 0;
            visibility: hidden;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 10;
        }

        #wrap-preload>img.gif {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -50%, 0);
            z-index: 1032;
            height: 20%;
        }
    </style>
    <!--<div id="wrap-preload">
        <img src="images/Preloader.gif" alt="gif" class="gif" id="gif">
    </div>-->
    <script>
        var loader = document.getElementById("wrap-preload");
        window.addEventListener("load", function() {
            loader.style.visibility = "hidden";
        });
    </script>
    <!-- Fin de codigo preloader -->
    <header class="noo-header superposicion menu sticky-top">
    <?php include './controllers/linkController.php'; ?>    
        <div class="top-header header-ppalL">
            <div class="container">
                <div class="top-header-inner">

                    <div class="top-header-content">
                        <ul class="social-top">
                            <!-- // <li><a href="https://www.facebook.com/Conalturainmobiliaria" title="Facebook" target="_blank"><i class="fab fa-facebook-f "></i></a></li> -->
                        </ul>
                        <!-- // <div class="emailto content-item"> -->
                        <!-- // <a href="mailto:inmobiliaria@conaltura.com" target="_blank"><i class="fa fa-envelope"></i>&nbsp;Email: -->
                        <!-- // <span>inmobiliaria@conaltura.com</span></a> -->
                        <!-- // </div> -->
                        <div class="register content-item">
                            <a class=" btn_pagos" style="text-transform:capitalize;" href="clientes.php">iniciar sesión </a>
                            <?php PSE(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav-wrap container menu-ppal color_blanco">
        </div>

    </header>