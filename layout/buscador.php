<section id="search-box" class="wrap search-box">
    <div class="gsearch" style="background: #005f68;">
        <div class="container tamaño_buscador">
            <div class="gsearch-wrap">
                <div class="gsearch-content">
                    <div class="gsearch-field">
                        <div class="form-group gbath">
                            <span class="gprice-label">Tipo de Operación</span>
                            <div class="label-select">
                                <select class="form-control" id="tipo_gestion_buscar">
                                    <option selected="" value="0">¿En venta o Arriendo?</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group gbed">
                            <span class="gprice-label">Tipo de Inmueble</span>
                            <div class="label-select">
                                <select class="form-control" id="tipo_inmueble_buscar">
                                    <option selected="" value="0">Tipo de Inmueble</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group gsub-location">
                            <span class="gprice-label">Ciudad</span>
                            <div class="label-select">
                                <select class="form-control" id="ciudad_buscar">
                                    <option selected="" value="0">Ciudad</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group gstatus">
                            <span class="gprice-label">Barrio</span>
                            <div class="label-select">
                                <select class="form-control" id="barrio_buscar">
                                    <option selected="" value="0">Barrio</option>
                                </select>
                            </div>
                        </div>
                        <div class="codigo">
                            <span class="gprice-label">Código</span>
                            <input class="form-control" id="codigo_buscar" placeholder="472-">
                        </div>
                        <div class="form-group gprice">
                            <span class="gprice-label">Precio</span>
                            <div class="wrapper">
                                <div class="range-slider">
                                    <input type="text" class="js-range-slider" value="" />
                                </div>
                                <div class="extra-controls form-inline">
                                    <div class="form-group" style="display:none;">
                                        <input type="text" class="js-input-from form-control" id="precio_minimo_buscar" value="0" aria-describedby="emailHelp" />
                                        <input type="text" class="js-input-to form-control" id="precio_maximo_buscar" value="0" aria-describedby="emailHelp" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="gsearch-action">
                        <div class="gsubmit">
                            <button class="btn btn-deault" id="buscar">Buscar</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>