<?php 

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM servicio  order by id ASC";
$resultado = $link->prepare($sql);
$resultado->execute(array());

while ($field = $resultado->fetch(PDO::FETCH_ASSOC)) {
    
    $nombre = "{$field['nom_servicio']}";
    $icono = "{$field['icono']}";
    $url = "{$field['url']}";
    $Servicio_array[] = array(
        'nom_servicio' => $nombre,
        'icono' => $icono,
        'url' => $url,
        

    );
}

function Servicios($r)
{
     for ($i = 0; $i < count($r); $i++) {
        echo '

                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 our-sevices-col">
                                <span class="service-icon">
                                    <a href="' . $r[$i]['url'] . '" style="color: #fff; ">
                                        <i class="' . $r[$i]['icono'] . '"></i></a>
                                </span>
                                <hr class="noo-gap">
                                <div class="text-block">

                                    <h5 class="text-light" style="color: #fff; ">' . $r[$i]['nom_servicio'] . '</h5>

                                </div>
                            </div>
    ';
    }
}

