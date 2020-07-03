<?php 

// dos  propiedades destacadas  en venta
function propiedad_desc_venta($r, $cantidad_inmuebles)
{
    if (count($r) > 2) {
        $cantidad_inmuebles = 3;
    } else {
        $cantidad_inmuebles = count($r);
    }
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("472-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        if ($r[$i]['Gestion'] == "Venta" && $r[$i]['Gestion'] != ' ') {
            echo 
            '<li>
            <div class="featured-image">
                <a href="./detalle_inmueble.php?co=' . $codigo . '"><img src="' . $imagen . '" alt="" style="height: 55px; object-fit:container;"></a>
            </div>
            <div class="featured-decs">
                <span class="featured-status"><a href="index.php"></a></span>
                <h4 class="featured-title"><a href="./detalle_inmueble.php?co=' . $codigo . '">' . $api['Barrio'] . ',' . $api['Ciudad'] . '</a></h4>
            </div>
        </li>';
        }
    }
}

// dos propiedades destacadas en arriendo
function propiedad_desc_arriendo($r, $cantidad_inmuebles)
{
    if (count($r) > 2) {
        $cantidad_inmuebles = 3;
    } else {
        $cantidad_inmuebles = count($r);
    }
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("472-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        if ($r[$i]['Gestion'] == "Arriendo" && $r[$i]['Gestion'] != ' ') {
            echo 
            '<li>
            <div class="featured-image">
                <a href="./detalle_inmueble.php?co=' . $codigo . '"><img src="' . $imagen . '" alt="" style="height: 55px; object-fit:container;"></a>
            </div>
            <div class="featured-decs">
                <span class="featured-status"><a href="index.php"></a></span>
                <h4 class="featured-title"><a href="./detalle_inmueble.php?co=' . $codigo . '">' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</a></h4>
            </div>
        </li>';
        }
    }
}