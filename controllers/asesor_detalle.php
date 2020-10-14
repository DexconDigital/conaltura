<?php 

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM asesores  order by id desc";
$resultado = $link->prepare($sql);
$resultado->execute(array());
// $result = mysqli_query($link, $sql) or die(mysqli_error($link));
// echo var_dump($resultado);



while ($field = $resultado->fetch(PDO::FETCH_ASSOC)) {
    // $id = $field['id'];
    // $id = "{$field['id']}";
    // $nombre = $field['nombre'];
    $nombre = "{$field['nombre']}";
    // $descripcion = $field['descripcion'];
    // $descripcion = "{$field['descripcion']}";
    $telefono = "{$field['telefono']}";
    $exten = "{$field['exten']}";
    $telefono2 = "{$field['telefonop']}";
    $wapp = "{$field['wapp']}";
    $correo = "{$field['correo']}";
    // $imagen = $field['imagen'];
    $imagen = "{$field['imagen']}";
    // $archivo = $field['archivo'];
    // $archivo = "{$field['archivo']}";
    // $noticia = $field['noticia'];
    // $noticia = "{$field['noticia']}";
    // $fecha = $field['fecha'];
    // $fecha = "{$field['fecha']}";
    $cargo = "{$field['cargo']}";
    $asesor_array[] = array(
        'nombre' => $nombre,
        'imagen' => 'conaltura-admin/admin/' . $imagen,
        'telefono' => $telefono,
        'wapp' => $wapp,
        'correo' => $correo,
        'telefonop' => $telefono2,
        'cargo' => $cargo,
        'exten' => $exten,

    );
}
// echo var_dump($imagen);

function modelo_asesor($r)
{
     for ($i = 0; $i < count($r); $i++) {
        // $ruta_imagen = "./conaltura-admin/admin/" . $r[$i]['imagen'];
        echo '

        <div class="item col-12 col-lg-12 col-md-12 d-flex justify-content-center p-0">
        <article class="hentry has-featured div_asesor_color">
            <div class="agent-featured div_asesor_secundario">
                <img src="' . $r[$i]['imagen'] . '" alt="">
            </div>
            <div class="agent-wrap div_text_asesor">
                <h2 class="agent-title titulo_style_asesor">
                    <font class="style_sub_asesor">
                        <font class="style_sub_asesor">' . $r[$i]['nombre'] . '</font>
                    </font>
                </h2>
                <div class="agent-excerpt" style="padding:15px 20px;">
                    <p>
                        <font class="style_sub_asesor">
                            <font class="style_sub_asesor color_asesor_sub">' . $r[$i]['cargo'] . '</font>
                        </font>
                    </p>
                </div>
                <div class="agent-social-wrap redes_div_asesor">
                    <div class="social-list agent-social d-flex justify-content-center redes_seg_div_asesor">
                        <a class="hint--top" data-hint="' . $r[$i]['correo'] . '" href="mailto:' . $r[$i]['correo'] . '" target="_blank"><i class="fa fa-envelope"></i></a>
                        ';
                        if($r[$i]['exten'] != ""){
                        echo '<a class="hint--top" data-hint="' . $r[$i]['telefono'] . ' ext '.$r[$i]['exten'].'" href="tel:034' . $r[$i]['telefono'] . '" target="_blank"><i class="fa fa-phone"></i></a>';
                    } echo'
                      '; if($r[$i]['exten'] == ""){
                        echo '<a class="hint--top" data-hint="' . $r[$i]['telefono'] . ''.$r[$i]['exten'].'" href="tel:034' . $r[$i]['telefono'] . '" target="_blank"><i class="fa fa-phone"></i></a>';
                      }echo'
                      ';
                        if( $r[$i]['telefonop'] != ""){
                                echo '<a class="hint--top" data-hint="' . $r[$i]['telefonop'] . '" href="tel:' . $r[$i]['telefonop'] . '" target="_blank"><i class="fa fa-mobile-alt"></i></a>';
                         }
                       echo  ' ';

                       if( $r[$i]['wapp'] != ""){
                        echo '<a class="hint--top" data-hint="' . $r[$i]['wapp'] . '" href="https://wa.me/57' . $r[$i]['wapp'] . '" target="_blank"><i class="fab fa-whatsapp"></i></a>';
                 }     echo  '
                       
                    </div>
                </div>
            </div>
        </article>
    </div>
    ';
    }
}
