<?php 

require_once("conexion.php");

function textofooter()
{
    $id = 2;
    $link = Conect();
    $sql = "SELECT * FROM `textos` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];


    
    echo ' 
    <div class="ft-about-us">
            <h4 class="ft-col-title">'.$titulo.'</h4>
        <div class="text-block">
            <p>'.$descrip.'</p>
        </div>
    </div>';
}
