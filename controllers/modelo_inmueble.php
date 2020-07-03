<?php

// modelo inmueble propiedades destacadas en arriendo
function modelo_inmueble_destacadas_arriendo($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("472-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        if ($r[$i]['Gestion'] == "Arriendo" && $r[$i]['Gestion'] != ' ') {
            echo '
        <div class="container">
        <article class="hentry arriendo">
            <div class="property-featured">
                <a class="content-thumb" href="./detalle_inmueble.php?co=' . $codigo . '">
                    <img src="' . $imagen . '" style="object-fit: cover;" alt="">
                    <span class="property-label"> Código: ' . $codigo . '</span>
                    <span class="property-category-2"> ' . $api['Tipo_Inmueble'] . '</span>
            </div>
            <div class="property-wrap">
                <h2 class="property-title"><a href="./detalle_inmueble.php?co=' . $codigo . '">' . $api['Barrio'] . '</a></h2>
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
        if ($r[$i]['Gestion'] == "Venta" && $r[$i]['Gestion'] != ' ') {
            echo '         <div class="container">
                            <article class="hentry arriendo">
                                <div class="property-featured">
                                    <a class="content-thumb" href="./detalle_inmueble.php?co=' . $codigo . '">
                                        <img src="' . $imagen . '" class="cont_img" alt="">
                                        <span class="property-label"> Código: ' . $codigo . '</span>
                                        <span class="property-category-2"> ' . $api['Tipo_Inmueble'] . '</span>
                                </div>
                                <div class="property-wrap">
                                    <h2 class="property-title"><a href="./detalle_inmueble.php?co=' . $codigo . '">' . $api['Barrio'] . '</a></h2>
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
//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("472-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        echo '
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <article class="hentry arriendo">
            <div class="property-featured">
            <a class="content-thumb" href="./detalle_inmueble.php?co=' . $codigo . '">
                <img src="' . $imagen . '" style="object-fit: cover;" alt="">
                <span class="property-label"> Código: ' . $codigo . '</span>
                <span class="property-category-2"> ' . $api['Tipo_Inmueble'] . ' </span>
            </a>
        </div>
        <div class="property-wrap">
            <h2 class="property-title"><a href="./detalle_inmueble.php?co=' . $codigo . '">' . $api['Barrio'] . '</a></h2>
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
                        <span><span class="amount"> $';
        if ($api['Gestion'] == 'Arriendo') {
            echo $api['Canon'];
        } else if ($api['Gestion'] == 'Venta') {
            echo $api['Venta'];
        } else {
            echo $api['Canon'] . '/ $' . $api['Venta'];
        }
        echo '</span></span>
                    </div>
                </div>
            </div>
        </article>
    </div>';
    }
}
//similares detalle inmueble
function modelo_inmueble_similare($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("472-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '<li>
        <div class="featured-image">
            <a href="./detalle_inmueble.php?co=' . $codigo . '"><img src="' . $imagen . '" alt="" style="height: 60px; object-fit:contain;"></a>
        </div>
        <div class="featured-decs">
            <span class="featured-status"><a href="./detalle_inmueble.php?co=' . $codigo . '">472-' . $codigo . '</a></span>
            <h4 class="featured-title"><a href="./detalle_inmueble.php?co=' . $codigo . '">' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</a></h4>
        </div>
    </li>';
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
