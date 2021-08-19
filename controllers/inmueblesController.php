<?php
require_once '../variables/config.php';
require_once 'modelo_inmueble.php';
require '../vendor/autoload.php';
use JasonGrimes\Paginator;
$url_pagina =  $_POST['REQUEST_URI'];

$pag = $_POST['pag'];
$ciudad = $_POST['ciudad'];
$barrio = $_POST['barrio'];
$gestion = $_POST['gestion'];
$inmueble = $_POST['inmueble'];
$precio_minimo = $_POST['precio_minimo'];
$precio_maximo = $_POST['precio_maximo'];
$area_minima = $_POST['area_minima'];
$area_maxima = $_POST['area_maxima'];
$alcobas_buscar = $_POST['alcobas_buscar'];
$banio_buscar = $_POST['banio_buscar'];
$garaje_buscar = $_POST['garaje_buscar'];

$ch = curl_init();
$headers =  'Authorization:' . TOKEN;
curl_setopt( $ch, CURLOPT_URL, 'https://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/'.$pag.'/total/9/departamento/0/ciudad/'.$ciudad.'/zona/0/barrio/'.$barrio.'/tipoInm/'.$inmueble.'/tipOper/'.$gestion.'/areamin/'.$area_minima.'/areamax/'.$area_maxima.'/valmin/'.$precio_minimo.'/valmax/'.$precio_maximo.'/campo/0/order/desc/banios/'.$banio_buscar.'/alcobas/'.$alcobas_buscar.'/garajes/'.$garaje_buscar.'/sede/0/usuario/0' );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "GET" );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, TRUE );
curl_setopt( $ch, CURLOPT_USERPWD, $headers );
$result = curl_exec( $ch );
curl_close( $ch );
$api = json_decode( $result, true );
$inmuebles = ( is_array( $api )) ? modelo_inmueble( $api['Inmuebles'] ) : "<h2>No se encontraron inmuebles</h2>";
$totalinmuebles = ( is_array( $api )) ? $api['datosGrales']['totalInmuebles'] : 0;
//Paginador
$valor_reemplazar = '&pag='.$pag.'';
$url_pagina = str_ireplace( $valor_reemplazar, '', $url_pagina );
$totalItems = $totalinmuebles;
$itemsPerPage = 9;
$currentPage = $pag;
$urlPattern = $url_pagina.'&pag=(:num)';
$paginator = new Paginator( $totalItems, $itemsPerPage, $currentPage, $urlPattern );
$cadena = "";
if ( is_array( $api ) ) {
    $cadena .= "<ul class='pagination mt-4 align-items-end justify-content-center'>";
    if ( $paginator->getPrevUrl() ) {
        $cadena .= "<li class='page-item'><a href='{$paginator->getPrevUrl()}' class='page-link'>&laquo; Atras</a></li>";
    }
    foreach ( $paginator->getPages() as $page ) {
        if ( $page['url'] ) {
            $active = $page['isCurrent'] ? 'class="page-item active"' : '';
            $cadena .= "<li {$active}><a href='{$page['url']}' class='page-link'>{$page['num']}</a></li>";
        } else {
            $cadena .= "<li class='page-item disabled'><span>{$page['num']}</span></li>";
        }
    }
    if ( $paginator->getNextUrl() ) {
        $cadena .= "<li class='page-item'><a href='{$paginator->getNextUrl()}' class='page-link'>Siguiente &raquo;</a></li>";
    }
    $cadena .= "</ul>";
}

if ( isset( $_POST['datos'] ) ) {
    header( 'Content-Type:application/json' );
    echo json_encode( ["total_inmuebles" => $totalinmuebles, "inmuebles" => $inmuebles, "paginacion" => $cadena] );
}