<?php 

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM aseguradoras order by id ASC";
$resultado = $link->prepare($sql);
$resultado->execute(array());

while ($field = $resultado->fetch(PDO::FETCH_ASSOC)) {
    
    $nombre = "{$field['nombre']}";
    $url = "{$field['archivo']}";
    
    $aseguradoras_array[] = array(

        'nombre' => $nombre,
        'archivo' => 'conaltura-admin/admin/' . $url,
    );
}

function Aseguradoras($r)
{
     for ($i = 0; $i < count($r); $i++) {
        echo '

        <li class="menu-item"><a href="' . $r[$i]['archivo'] . '" target="_blank">' . $r[$i]['nombre'] . '</a></li>
    ';
    }
}

// echo Aseguradoras($aseguradoras_array);
