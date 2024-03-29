<?php
require_once '../variables/config.php';
require 'modelo_inmueble.php';

$ch = curl_init();
$headers =  'Authorization:' . TOKEN;
curl_setopt( $ch, CURLOPT_URL, 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/inmueblesDestacados/total/50/limit/50' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "GET" );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, TRUE );
curl_setopt( $ch, CURLOPT_USERPWD, $headers );
$result = curl_exec( $ch );
curl_close( $ch );
$r = json_decode( $result, true );

// inmuebles destacados en arriendo
if ( isset( $_POST['arriendo'] ) ) {
    if ( is_array( $r ) ) {
        $cantidad_inmuebles = count( $r )-1;
        modelo_inmueble_destacadas_arriendo( $r, $cantidad_inmuebles );
    } else {
        echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
    }
}

// inmuebles destacados en venta
if ( isset( $_POST['ventas'] ) ) {
    if ( is_array( $r ) ) {
        $cantidad_inmuebles = count( $r )-1;
        modelo_inmueble_destacadas_venta( $r, $cantidad_inmuebles );
    } else {
        echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
    }
}

function cantidad_inmuebles_imprimir( $r ) {
    if ( is_array( $r ) ) {
        $cantidad_inmuebles = count( $r )-1;
        echo '<script>var cantidad_inmuebles = '.$cantidad_inmuebles.'</script>';
    } else {
        echo '<script>var cantidad_inmuebles;</script>';
    }
}

