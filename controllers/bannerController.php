<?php 

require_once("conexion.php");

function bannerquienes(){

    $id=1;
    $link = Conect();
    $sql = "SELECT * FROM `imagenes` where id = ?";
    
    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $imagenes = $resultado->fetchAll();
    $ruta = $imagenes[0]['imagen'];
    $url = 'conaltura-admin/admin/'.$ruta;
    
    echo '<img src="'.$url.'" class="attachment-property-slider" alt="" />';

}
function bannervalores(){

    $id=2;
    $link = Conect();
    $sql = "SELECT * FROM `imagenes` where id = ?";
    
    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $imagenes = $resultado->fetchAll();
    $ruta = $imagenes[0]['imagen'];
    $url = 'conaltura-admin/admin/'.$ruta;
    
    echo '<div class="bg parallax-bg" style="background: url('.$url.') 50% 0 repeat-y fixed"></div>';

}
function bannerblog(){

    $id=3;
    $link = Conect();
    $sql = "SELECT * FROM `imagenes` where id = ?";
    
    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $imagenes = $resultado->fetchAll();
    $ruta = $imagenes[0]['imagen'];
    $url = 'conaltura-admin/admin/'.$ruta;
    
    echo '<img src="'.$url.'" class="attachment-property-slider img-banner" alt="" />';

}
function bannercliente(){

    $id=4;
    $link = Conect();
    $sql = "SELECT * FROM `imagenes` where id = ?";
    
    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $imagenes = $resultado->fetchAll();
    $ruta = $imagenes[0]['imagen'];
    $url = 'conaltura-admin/admin/'.$ruta;
    
    echo '<img src="'.$url.'" class="attachment-property-slider img-banner" alt="" />';

}


