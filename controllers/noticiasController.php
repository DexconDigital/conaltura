<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM noticias  order by id desc";
$resultado = $link->prepare($sql);
$resultado->execute(array());
// $result = mysqli_query($link, $sql) or die(mysqli_error($link)); 
// echo var_dump($resultado);



while ($field = $resultado->fetch(PDO::FETCH_ASSOC)) {
    // $id = $field['id'];
    $id = "{$field['id']}";
    // $nombre = $field['nombre'];
    $nombre = "{$field['nombre']}";
    // $descripcion = $field['descripcion'];
    $descripcion = "{$field['descripcion']}";
    // $imagen = $field['imagen'];
    $imagen = "{$field['imagen']}";
    // $archivo = $field['archivo'];
    $archivo = "{$field['archivo']}";
    // $noticia = $field['noticia'];
    $noticia = "{$field['noticia']}";
    // $fecha = $field['fecha'];
    $fecha = "{$field['fecha']}";
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'conaltura-admin/admin/' . $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo,

    );
}
function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 80;
        $limite_de_cadena2 = 20;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        } else {
            $descrip = $descrip . '...';
        }
        echo '
                <div style="max-height:250px" class="col-12 mb-5 ">
                        <div class="h-100 d-flex flex-row align-items-center">
            
                            <div class="col-5 h-100 imagen">
                                <img style="object-fit:cover" src="' . $r[$i]['imagen'] . '"class="h-100 card-img-top" alt="...">
                            </div>
            
                            <div class="col-7 h-100 d-flex flex-column justify-content-between">
            
                                <div class="py-3 h-100 caja border-bottom d-flex align-items-baseline">
                                    <i class="mx-3 azul fas fa-calendar-alt"></i>
                                    <p class="pr-3 text-muted"> ' . $r[$i]['fecha'] . ' </p>
                                </div>
            
                                <div class="h-100 caja py-3 border-bottom">
                                    <h4 class="mb-2 px-3 font-weight-bold"> ' . $nombre . ' </h4>
                                    <p class="descripcion px-3"> ' . $descrip . ' </p>
                                </div>
            
                                <div class="h-100 d-flex align-items-center justify-content-center"> <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '" class="my-2 btn boton2"> Leer más </a></div>
            
            
                            </div>
            
                        </div>
                    </div>
                        
                        
                        ';
    }
}

function modelo_noticia2($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $nombre = $r[$i]['titulo'];
        // $descrip = $r[$i]['descripcion'];
        // $limite_de_cadena1 = 80;
        $limite_de_cadena2 = 60;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        echo '


        <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
                    <div class="post-item">
                        <div class="item-post">
                            <div class="imagen-destacada">
                                <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '" title="" class="">
                                    <img class="image" src="' . $r[$i]['imagen'] . '" alt="">
                                </a>
                            </div>
                            <div class="cuerpo">
                                <div class="post-header">
                                    <div class="date mb-4">' . $r[$i]['fecha'] . '</div>
                                    <p><a class="texto" href="detalle_noticia.php?co=' . $r[$i]['id'] . '">' . $nombre . '</a></p>
                                </div>
                                <a class="more-link" href="detalle_noticia.php?co=' . $r[$i]['id'] . '">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>                  
                        ';
    }
}

function modelo_ultimas_noticia($r)
{
    if (count($r) > 2) {
        $cantidad_noticias = 3;
    } else {
        $cantidad_noticias = count($r);
    }

    for ($i = 0; $i < $cantidad_noticias; $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 80;
        $limite_de_cadena2 = 60;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        } else {
            $descrip = $descrip . '...<br><br>';
        }
        echo '
        <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 mb-5">
        <div class="post-item">
            <div class="item-post">
                <div class="imagen-destacada">
                    <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '" title="" class="">
                        <img class="image" src="' . $r[$i]['imagen'] . '" alt="">
                    </a>
                </div>
                <div class="cuerpo">
                    <div class="post-header">
                        <div class="text-left date mb-4">' . $r[$i]['fecha'] . '</div>
                        <p><a class="texto" href="detalle_noticia.php?co=' . $r[$i]['id'] . '">' . $nombre . '</a></p>
                    </div>
                    <a class="more-link" href="detalle_noticia.php?co=' . $r[$i]['id'] . '">Leer más</a>
                </div>
            </div>
        </div>
    </div>';
    }
}
