<?php 

require_once("conexion.php");

function bannertxt(){

    $id=1;
    $link = Conect();
    $sql = "SELECT * FROM `banner_text` where id = ?";
    
    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $imagenes = $resultado->fetchAll();
    $ruta = $imagenes[0]['imagen_url'];
    $url = 'conaltura-admin/admin/'.$ruta;
    
    echo 'style="background-image:url('.$url.')"';

}
function bannertexindex(){

    $id=1;
    $link = Conect();
    $sql = "SELECT * FROM `banner_text` where id = ?";
    
    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $imagenes = $resultado->fetchAll();
    $texto = $imagenes[0]['titulo'];
    
    
    echo '<h1 class="">'.$texto.'</h1>';

}

