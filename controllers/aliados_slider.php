<?php 

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM aliados  order by id ASC";
$resultado = $link->prepare($sql);
$resultado->execute(array());

while ($field = $resultado->fetch(PDO::FETCH_ASSOC)) {
    
    $url = "{$field['imagen']}";
    
    $aliados_array[] = array(
        'imagen' => 'conaltura-admin/admin/' . $url,
    );
}

function aliados_slider($r)
{
     for ($i = 0; $i < count($r); $i++) {
        echo '

                        <div class="item">
                            <img class="item-image" style="padding-right: 2rem;" src="' . $r[$i]['imagen'] . '" alt="">
                        </div>
    ';
    }
}
