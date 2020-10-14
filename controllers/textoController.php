<?php

require_once("conexion.php");

function textoindex()
{

    $id = 1;
    $link = Conect();
    $sql = "SELECT * FROM `textos` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];


    echo '
    <div class="col-12  d-flex justify-content-center flex-wrap">
            <div class=" col-lg-5 col-md-7 col-10 text-center cont_texto">
                <h3 class="texto_style1">' . $titulo . '</h3>
            </div>
            <div class=" col-lg-8 col-md-10 col-11 text-center cont_texto2">
                <p class="texto_style2">' . $descrip . '</p>
            </div>
    </div>';
}

function textoquienessomos()
{
    $id = 3;
    $link = Conect();
    $sql = "SELECT * FROM `textos` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];


    // echo $titulo , $descrip;
    echo '
    <div class="text-block">
        <h4>' . $titulo . '</h4>
        ' . $descrip . '
    </div>
    ';
}

function textomision()
{
    $id = 4;
    $link = Conect();
    $sql = "SELECT * FROM `textos` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];


    echo '
    <div class="accordion__item js-accordion-item active">
        <div class="accordion-header js-accordion-header">' . $titulo . '</div>
            <div class="accordion-body js-accordion-body">
                <div class="accordion-body__contents">
                ' . $descrip . '
                </div>
        </div>
    </div>
    ';
}

function textovision()
{
    $id = 5;
    $link = Conect();
    $sql = "SELECT * FROM `textos` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];

    echo '
            <div class="accordion__item js-accordion-item">
                <div class="accordion-header js-accordion-header">'.$titulo.'</div>
                    <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                           '.$descrip.'
                        </div>
                    </div><!-- end of accordion body -->
             </div><!-- end of accordion item -->
    ';
}

