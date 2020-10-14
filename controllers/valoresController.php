<?php

require_once("conexion.php");

function valoruno()
{

    $id = 1;
    $link = Conect();
    $sql = "SELECT * FROM `valores` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];
    $ruta = $Textos[0]['imagen'];
    $url = 'conaltura-admin/admin/' . $ruta;

    echo '
    <div class="accordion__item js-accordion-item">
        <div class="accordion-header js-accordion-header">' . $titulo . '</div>
        <div class="accordion-body js-accordion-body">
        <div class="accordion-body__contents">
            <div class="col-12 d-flex flex-wrap">
                <div class="col-lg-6 col-md-12 col-12">
                    <p class="text_justify_somos">' . $descrip . '</p>
                </div>
                <div class="col-lg-6 col-md-12 col-12 text-center">
                    <img src="' . $url . '" alt="" class="noo-image" style="height: 150px;" />
                </div>
                 </div>
             </div>
         </div>
    </div>
    ';
}
function valordos()
{

    $id = 2;
    $link = Conect();
    $sql = "SELECT * FROM `valores` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];
    $ruta = $Textos[0]['imagen'];
    $url = 'conaltura-admin/admin/' . $ruta;

    echo '
    <div class="accordion__item js-accordion-item">
        <div class="accordion-header js-accordion-header">' . $titulo . '</div>
        <div class="accordion-body js-accordion-body">
        <div class="accordion-body__contents">
            <div class="col-12 d-flex flex-wrap">
                <div class="col-lg-6 col-md-12 col-12">
                    <p class="text_justify_somos">' . $descrip . '</p>
                </div>

                <div class="col-lg-6 col-md-12 col-12 text-center">
                    <img src="' . $url . '" alt="" class="noo-image" style="height: 150px;" />
                </div>
                </div>
            </div>
        </div>
    </div>
    ';
}
function valortres()
{

    $id = 3;
    $link = Conect();
    $sql = "SELECT * FROM `valores` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];
    $ruta = $Textos[0]['imagen'];
    $url = 'conaltura-admin/admin/' . $ruta;

    echo '
    <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">'.$titulo.'</div>
        <div class="accordion-body js-accordion-body">
        <div class="accordion-body__contents">
            <div class="col-12 d-flex flex-wrap">
                <div class="col-lg-6 col-md-12 col-12">
                    <p class="text_justify_somos">'.$descrip.'</p>
                </div>
                <div class="col-lg-6 col-md-12 col-12 text-center">
                    <img src="'.$url.'" alt="" class="noo-image" style="height: 150px;" />
                </div>
              </div>
            </div>
        </div>
    </div>
    ';
}
function valorcuatro()
{

    $id = 4;
    $link = Conect();
    $sql = "SELECT * FROM `valores` where id = ?";

    $resultado = $link->prepare($sql);
    $resultado->execute(array($id));
    $Textos = $resultado->fetchAll();
    $titulo = $Textos[0]['titulo'];
    $descrip = $Textos[0]['descripcion'];
    $ruta = $Textos[0]['imagen'];
    $url = 'conaltura-admin/admin/' . $ruta;
    echo '
    <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">'.$titulo.'</div>
    <div class="accordion-body js-accordion-body">
        <div class="accordion-body__contents">
            <div class="col-12 d-flex flex-wrap">
                <div class="col-lg-6 col-md-12 col-12">
                    <p class="text_justify_somos">'.$descrip.'</p>
                </div>
                <div class="col-lg-6 col-md-12 col-12 text-center">
                    <img src="'.$url.'" alt="" class="noo-image" style="height: 150px;" />
                </div>
             </div>
            </div>
        </div>
    </div>
    ';
}

// echo valordos();
