<?php 
require_once 'variables/config.php';
require_once 'modelo_inmueble.php';
require './vendor/autoload.php';
use JasonGrimes\Paginator;
$url_pagina = $_SERVER["REQUEST_URI"];  

$pag = 1;
$ciudad = 0;
$barrio = 0;
$gestion = 0;
$inmueble = 0;
$precio_minimo = 0;
$precio_maximo = 0;
$area_minimo = 0;
$area_minima= 0;
$area_maxima = 0;
$alcobas_buscar = 0;
$banio_buscar= 0;
$garaje_buscar =0;

if(isset($_GET['pag'])){
    $pag = $_GET['pag'];
}
if(isset($_GET['ci'])){
    $ciudad = $_GET['ci'];
    $barrio = $_GET['bar'];
    $gestion = $_GET['ge'];
    $inmueble = $_GET['in'];
    $precio_minimo = $_GET['premin'];
    $precio_maximo = $_GET['premax'];
}
if(isset($_GET['aremin'])){
    $area_minima = $_GET['aremin'];
    $area_maxima = $_GET['aremax'];
    $alcobas_buscar = $_GET['alcobas'];
    $banio_buscar = $_GET['banios'];
    $garaje_buscar = $_GET['garajes'];
}

$ch = curl_init();
    $headers =  'Authorization:' . TOKEN;
    curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/'.$pag.'/total/9/departamento/0/ciudad/'.$ciudad.'/zona/0/barrio/'.$barrio.'/tipoInm/'.$inmueble.'/tipOper/'.$gestion.'/areamin/'.$area_minima.'/areamax/'.$area_maxima.'/valmin/'.$precio_minimo.'/valmax/'.$precio_maximo.'/campo/0/order/desc/banios/'.$banio_buscar.'/alcobas/'.$alcobas_buscar.'/garajes/'.$garaje_buscar.'/sede/0/usuario/0');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $api = json_decode($result, true); 

    
    
	// echo "<pre>";
	// print_r($api);
	// echo "</pre>";

// for($i=0; $i<8; $i++){
//     print_r ($api['Inmuebles'][$i]['longitud'])."<br>";
// }
// for($i=0; $i<8; $i++){
//     print_r ($api['Inmuebles'][$i]['latitud'])."<br>";
// }
    // print_r ($api['Inmuebles'][0]['longitud']);
function listar_inmuebles($r)
{
            modelo_inmueble($r);
 
}





$totalinmuebles=0;
if(is_array($api)){
    $totalinmuebles = $api['datosGrales']['totalInmuebles'];
}

//Paginador
$valor_reemplazar = '&pag='.$pag.'';
$url_pagina = str_ireplace($valor_reemplazar, '', $url_pagina);
$totalItems = $totalinmuebles;
$itemsPerPage = 9;
$currentPage = $pag;
$urlPattern = $url_pagina.'&pag=(:num)';

$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
