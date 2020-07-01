<?php

// modelo inmueble propiedades destacadas en arriendo
function modelo_inmueble_destacadas_arriendo($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("472-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        if ($r[$i]['Gestion']== "Arriendo" && $r[$i]['Gestion'] != ' '){
        echo '
        <div class="container">
        <article class="hentry arriendo">
            <div class="property-featured">
                <a class="content-thumb" href="detalle_inmueble.php">
                    <img src="' . $imagen . '" style="object-fit: cover;" alt="">
                    <span class="property-label"> Código: ' . $codigo . '</span>
                    <span class="property-category-2"> ' . $api['Tipo_Inmueble'] . '</span>
            </div>
            <div class="property-wrap">
                <h2 class="property-title"><a href="detalle_inmueble.php">' . $api['Barrio'] . '</a></h2>
                <div class=" property-summary">
                    <div class="property-detail">
                        <div class="size"><span>' . $api['AreaConstruida'] . 'm<sup>2 </span>
                        </div>
                        <div class="bathrooms"><span> ' . $api['banios'] . ' </span>
                        </div>
                        <div class="bedrooms"><span> ' . $api['Alcobas'] . ' </span>
                        </div>
                    </div>
                    <div class="property-info">
                        <div class="property-price">
                            <span><span class="amount">';
                                         if ($api['Gestion'] == 'Arriendo') {
                                            echo '$' . $api['Canon'];
                                         } else {
                                             echo '$' . $api['Venta'];
                                         }
                             echo '</span></span>
                        </div>
                    </div>
                </div>
        </article>
        </div>
        ';
                                        }
    }
}

// modelo inmueble propiedades destacadas en venta
function modelo_inmueble_destacadas_venta($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("472-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        if ($r[$i]['Gestion']== "Venta" && $r[$i]['Gestion'] != ' '){
        echo '         <div class="container">
                            <article class="hentry arriendo">
                                <div class="property-featured">
                                    <a class="content-thumb" href="detalle_inmueble.php">
                                        <img src="' . $imagen . '" class="cont_img" alt="">
                                        <span class="property-label"> Código: ' . $codigo . '</span>
                                        <span class="property-category-2"> ' . $api['Tipo_Inmueble'] . '</span>
                                </div>
                                <div class="property-wrap">
                                    <h2 class="property-title"><a href="detalle_inmueble.php">' . $api['Barrio'] . '</a></h2>
                                    <div class=" property-summary">
                                        <div class="property-detail">
                                            <div class="size"><span>' . $api['AreaConstruida'] . 'm<sup>2 </span>
                                            </div>
                                            <div class="bathrooms"><span> ' . $api['banios'] . '</span>
                                            </div>
                                            <div class="bedrooms"><span> ' . $api['Alcobas'] . ' </span>
                                            </div>
                                        </div>
                                        <div class="property-info">
                                            <div class="property-price">
                                                <span><span class="amount">';
                                                if ($api['Gestion'] == 'Arriendo') {
                                                    echo '$' . $api['Canon'];
                                                } else {
                                                    echo '$' . $api['Venta'];
                                                }
                                                echo '</span></span>
                                            </div>
                                        </div>
                                    </div>
                            </article>
                        </div>
        ';
                                            }
    }
}



// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
