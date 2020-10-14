<?php

require_once("conexion.php");

function direccion()
{

    $conexion = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $conexion->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $resultnombre = $Total[0]['nombre'];
    $recorte1 = substr($resultnombre, 0, -27);
    $recorte2 = substr($resultnombre, 30);

    echo ' <li><i class="fa fa-map-marker-alt"></i>&nbsp;<label>' . $recorte1 . '</label>
                <br>
                <label style="margin-left: 47px;">' . $recorte2 . '</label>
            </li> ';
}
function telefono1()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[1]['nombre'];
    $redirect = $Total[1]['link'];
    echo ' <li><a href="' . $redirect . '" target="_blank"><i class="fa fa-phone"></i>&nbsp;' . $nombre . '</a></li>';
}
function telefono2()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[2]['nombre'];
    $redirect = $Total[2]['link'];

    echo ' <li><a href="' . $redirect . '" target="_blank"><i class="fa fa-phone"></i>&nbsp;' . $nombre . '</a></li>';
}
function telefono3()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[3]['nombre'];
    $redirect = $Total[3]['link'];

    echo ' <li><a href="' . $redirect . '" target="_blank"><i class="fa fa-phone"></i>&nbsp;' . $nombre . '</a></li>';
}
function WappF()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[4]['nombre'];
    $redirect = $Total[4]['link'];

    echo ' <li><a href="' . $redirect . '" target="_blank"><i class="fab fa-whatsapp"></i>&nbsp; ' . $nombre . ' </a></li>';
}
function correoF()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[5]['nombre'];
    $redirect = $Total[5]['link'];

    echo ' <li><i class="fa fa-envelope"></i>&nbsp;<a class="text-break" href="' . $redirect . '" target=":_blank">' . $nombre . '</span></a></li>';
}
function horario()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[6]['nombre'];
    $recorte1 = substr($nombre, 0, -54);
    $recorte2 = substr($nombre, 21, -37);
    $recorte3 = substr($nombre, 38, -18);
    $recorte4 = substr($nombre, 58);

    echo '
                        <li><i class="fa fa-calendar-alt"></i>&nbsp;<label>' . $recorte1 . '</label>
                                <br>
                                <label style="margin-left: 47px;">' . $recorte2 . '</label>
                                <br>
                                <label style="margin-left: 47px;">' . $recorte3 . '</label>
                                <br>
                                <label style="margin-left: 47px;">' . $recorte4 . '</label>
                            </li>
    ';
}
function faceGlobal()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $redirect = $Total[7]['link'];

    echo ' <a href="' . $redirect . '" class="elementor-icon elementor-social-icon" target="_blank"><i class="fab fa-facebook-f "></i></a>';
}
function instaGlobal()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $redirect = $Total[8]['link'];

    echo ' <a href="' . $redirect . '" class="elementor-icon elementor-social-icon" target="_blank"><i class="fab fa-instagram"></i> </a>';
}
function youtubeGlobal()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $redirect = $Total[9]['link'];

    echo ' <a href="' . $redirect . '" class="elementor-icon elementor-social-icon" target="_blank"><i class="fab fa-youtube"></i> </a>';
}
function wappGlobal()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $redirect = $Total[10]['link'];

    echo ' <a href="' . $redirect . '" class="elementor-icon elementor-social-icon" target="_blank"><i class="fab fa-whatsapp"></i> </a>';
}
function PSE()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $redirect = $Total[11]['link'];

    echo '   <a class=" btn_pagos" style="text-transform:capitalize;" href="' . $redirect . '" target="_blank">pagos en línea</a>';
}
function PSEClinetes()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $redirect = $Total[11]['link'];

    echo '   <a href="'.$redirect.'" target="blank">
                <h5 style=" margin: 0 0 12px;font-weight: 700;font-size: 27px;color: #095C70;">PSE</h5>
            </a>';
}
function PSEClinetes2()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $redirect = $Total[11]['link'];

    echo '<a href="'.$redirect.'" target="blank"><i class="fa fa-file-invoice-dollar" style=" color:  #4d4d4d"></i></a>';
}
function mapa()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $redirect = $Total[12]['link'];

    echo '  <iframe src="'.$redirect.'" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
}
function correoC()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[13]['nombre'];
    $redirect = $Total[13]['link'];

    echo '<p class="correo_cont"><a class="color_gris" href="'.$redirect.'" target=":_blank">'.$nombre.'</a></p>';
}
function telefono1C()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[14]['nombre'];
    $redirect = $Total[14]['link'];
    echo '  <p class="cont_tel"><a class="color_gris" href="'.$redirect.'" target="_blank">'.$nombre.'</a></p>';
}
function telefono2C()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[15]['nombre'];
    $redirect = $Total[15]['link'];

    echo '  <p class="cont_tel"><a class="color_gris" href="'.$redirect.'" target="_blank">'.$nombre.'</a></p>';
}
function telefono3C()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[16]['nombre'];
    $redirect = $Total[16]['link'];

    echo '  <p class="cont_tel"><a class="color_gris" href="'.$redirect.'" target="_blank">'.$nombre.'</a></p>';
}
function wappC()
{
    $link = Conect();
    $sql = "SELECT * FROM `links`  order by id ASC";

    $resultado = $link->prepare($sql);
    $resultado->execute(array());
    $Total = $resultado->fetchAll();
    $nombre = $Total[17]['nombre'];
    $redirect = $Total[17]['link'];

    echo ' <p class="cont_tel"><a class="color_gris" href="'.$redirect.'" target="_blank">'.$nombre.'</a></p>';
}
