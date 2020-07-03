<?php
require_once 'variables/config.php';
require 'modelo_mini_footer.php';

$ch = curl_init();
    $headers =  'Authorization:' . TOKEN;
    curl_setopt($ch, CURLOPT_URL,'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/inmueblesDestacados/total/50/limit/50');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $api = json_decode($result, true);
    

// dos  propiedades destacadas  en venta
function inmuebles_destacados3($r)
{
    if (is_array($r)) {
            $cantidad_inmuebles= count($r)-1;
            propiedad_desc_venta($r, $cantidad_inmuebles);
    } else {
        echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
    }
}
// dos  propiedades destacadas  en arriendo
function inmuebles_destacados4($r)
{
    if (is_array($r)) {
            $cantidad_inmuebles= count($r)-1;
            propiedad_desc_arriendo($r, $cantidad_inmuebles);
    } else {
        echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
    }
}
?>