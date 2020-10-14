<?php
require_once("conexion.php");
function wappDetalle()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[18]['nombre'];
    $redirect = $Total[18]['link'];

    echo ' <a href="'.$redirect.'"><i class="fab fa-whatsapp"></i> '.$nombre.'</p>';
}
// echo wappDetalle();


?>