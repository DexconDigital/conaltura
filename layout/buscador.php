<section id="parallax4" style="position: relative;">
    <div class="overlay"></div>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="images/banner-home.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="images/banner-home.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/banner-home.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" style="z-index: 600;" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" style="z-index: 600;" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<div id="texslider" class="container col-12 border text-center d-flex justify-content-center">
    <div class="col-9 border p-0">
        <p class="texto1_slider">Conaltura, empresa de construcción y proyectos inmobiliarios en Colombia</p>
        <h1 class="texto2_slider">Apartamentos nuevos en venta desde 100 millones de pesos.</h1>
    </div>
</div>

<section id="search-box" class="wrap search-box">
    <div class="gsearch" style="">
        <div class="container tamaño_buscador">
            <div class="gsearch-wrap">
                <div class="gsearch-content">
                    <div class="gsearch-field">
                        <div class="form-group gbath">
                            <span class="gprice-label tipo_open">Tipo de Operación</span>
                            <div class="label-select">
                                <select class="form-control operacion tipo_open_option">
                                    <option selected="" value="0">¿En venta o Arriendo?</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group gbed">
                            <span class="gprice-label tipo_open">Tipo de Inmueble</span>
                            <div class="label-select">
                                <select class="form-control tipo_open_option" id="tipo_inmueble_buscar">
                                    <option selected="" value="0">Tipo de Inmueble</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group gsub-location">
                            <span class="gprice-label tipo_open">Ciudad</span>
                            <div class="label-select">
                                <select class="form-control tipo_open_option" id="ciudad_buscar">
                                    <option selected="" value="0">Ciudad</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group gstatus">
                            <span class="gprice-label tipo_open">Barrio</span>
                            <div class="label-select">
                                <select class="form-control tipo_open_option" id="barrio_buscar">
                                    <option selected="" value="0">Barrio</option>
                                </select>
                            </div>
                        </div>
                        <div class="codigo">
                            <span class="gprice-label tipo_open">Código</span>
                            <input class="form-control tipo_open_option" id="codigo_buscar" placeholder="472-">
                        </div>
                        <div class="form-group gprice">
                            <span class="gprice-label tipo_open">Precio</span>
                            <div class="gslider-range gprice-slider-range"></div>


                            <span class="gslider-range-value gprice-slider-range-value-min" id="input-number-1"></span>
                            <span class="gslider-range-value gprice-slider-range-value-max" id="input-number"></span>
                        </div>

                    </div>
                    <div class="gsearch-action">
                        <div class="gsubmit">
                            <button class="btn btn-deault tipo_open" id="buscar">Buscar</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- <section id="search-box" class="wrap search-box">
    <div class="gsearch" style="background: #005f68;">
        <div class="container tamaño_buscador">
            <div class="gsearch-wrap">

                <div class="gsearch-content">
                    <div class="gsearch-field">
                        <div class="form-group gbath">
                            <span class="gprice-label">Tipo de Operación</span>
                            <div class="label-select">
                                <select class="form-control operacion">
                                    <option>¿En venta o Arriendo?</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group gbed">
                            <span class="gprice-label">Tipo de Inmueble</span>
                            <div class="label-select">
                                <select class="form-control inmueble">
                                    <option>Tipo de Inmueble</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group gsub-location">
                            <span class="gprice-label">Ciudad</span>
                            <div class="label-select">
                                <select class="form-control ciudad">


                                </select>
                            </div>
                        </div>
                        <div class="form-group gstatus">
                            <span class="gprice-label">Barrio</span>
                            <div class="label-select">

                                <select class="form-control zona">
                                    <option>Barrio</option>

                                </select>
                            </div>
                        </div>
                        <div class="codigo">
                            <span class="gprice-label">Código</span>
                            <input class="form-control codeInm" placeholder="472-">


                        </div>




                        <div class="form-group gprice">
                            <span class="gprice-label">Precio</span>
                            <div class="gslider-range gprice-slider-range"></div>


                            <span class="gslider-range-value gprice-slider-range-value-min" id="input-number-1"></span>
                            <span class="gslider-range-value gprice-slider-range-value-max" id="input-number"></span>
                        </div>

                    </div>
                    <div class="gsearch-action">
                        <div class="gsubmit">
                            <button class="btn btn-deault search-1">Buscar</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section> -->