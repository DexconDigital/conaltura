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
    <div id="wrap-preload">
        <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
    </div>
    <script>
        var loader = document.getElementById("wrap-preload");
        window.addEventListener("load", function() {
            loader.style.visibility = "hidden";
        });
    </script>
    <!-- Fin de codigo preloader -->
    <header class="noo-header">

        <div class="top-header header-ppal">
        </div>
        <div class="main-nav-wrap container menu-ppal">
        </div>

    </header>