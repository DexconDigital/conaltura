<?php 

require_once("conexion.php");



function slider_index()
{
    $link = Conect();
    // $array = array();
    
    $sql = "SELECT * FROM slider";
    $resultadoSlider = $link->prepare($sql);
    $resultadoSlider->execute(array());
    
    while ($field = $resultadoSlider->fetch(PDO::FETCH_ASSOC)) {
        
        echo '
        <div class="carousel-item" data-interval="10000">
            <img src="conaltura-admin/admin/'.$field["ruta_imagen"].'" class="d-block w-100" alt="'.$field["alt_imagen"].'">
        </div>
        ';
    
    }
}

function textouno_slider(){
    $id = 1;
    $link = Conect();
    $sql = "SELECT * FROM `texto_slider` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['texto_slider'];
    

    echo '<p class="texto1_slider text-break">'.$titulo.'</p>';


}
function textodos_slider(){
    $id = 2;
    $link = Conect();
    $sql = "SELECT * FROM `texto_slider` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['texto_slider'];
    

    echo '<h1 class="texto2_slider text-break">'.$titulo.'</h1>';


}

// echo textouno_slider();