<?php $page = "Inicio | Administrador";
require_once("seguridad.php");
require_once("conexion.php");
?>
<?php
$user = $_SESSION["usuarioactual"];
// echo implode( $_SESSION) ; 
$con = Conect();
$qry = "SELECT * FROM usuarios where id_user ='$user'";
// $sql = mysqli_query($con, $qry);
$resultado = $con->prepare($qry);
$resultado->execute(array($user));
// $usuario =  mysqli_fetch_array($resultado);
$usuario =  $resultado->fetch(PDO::FETCH_ASSOC);
// echo var_dump($usuario);
$imagen_inicio = $usuario["usuario"];
$page = "Inicio";
$nombre_inmobiliaria = 'Conaltura Inmobiliaria';
?>
<?php
$id_inmobiliria = 17;
$con = Conect();
// $qry = "select * from noticias where id_inmobiliaria2 = '$id_inmobiliria' order by id DESC ";
$qry = "select * from noticias order by id DESC ";
$resultadoNoticia = $con->prepare($qry);
$resultadoNoticia->execute(array($id_inmobiliria));
// $sql = mysqli_query($con, $qry);    
?>
<?php
$qry = "SELECT * FROM `usuarios` WHERE id_user = '$user'";
$resultado = $con->prepare($qry);
$resultado->execute(array($user));
// $sql = mysqli_query($con, $qry);
$usuario_admin =  $resultado->fetch(PDO::FETCH_ASSOC);
// $usuario =  $resultado->fetch(PDO::FETCH_NUM);
// echo var_dump($usuario_admin);
?>
<?php
$id_inmobiliria = 17;
$con = Conect();
$qry = "select * from asesores  order by id DESC ";
$resultadoAsesor = $con->prepare($qry);
$resultadoAsesor->execute(array());
// $sql = mysqli_query($con, $qry);
?>
<?php
$con = Conect();
$qry = "select * from imagenes  order by id ASC ";
$resultadoImages = $con->prepare($qry);
$resultadoImages->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from aliados  order by id ASC ";
$resultadoAliados = $con->prepare($qry);
$resultadoAliados->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from links  order by id ASC ";
$resultadoLinks = $con->prepare($qry);
$resultadoLinks->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from aseguradoras order by id ASC ";
$resultadoAseguradora = $con->prepare($qry);
$resultadoAseguradora->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from textos order by id ASC ";
$resultadoTextos = $con->prepare($qry);
$resultadoTextos->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from  slider ";
$resultadoSlider = $con->prepare($qry);
$resultadoSlider->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from  texto_slider ";
$resultadotextoSlider = $con->prepare($qry);
$resultadotextoSlider->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from  banner_text ";
$resultadobannertext = $con->prepare($qry);
$resultadobannertext->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from  valores ";
$resultadovalores = $con->prepare($qry);
$resultadovalores->execute(array());
?>
<?php
$con = Conect();
$qry = "select * from  servicio";
$resultadoservicios = $con->prepare($qry);
$resultadoservicios->execute(array());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'layout/archivosheader.php'; ?>
    <script src="tinymce/tinymce.min.js"></script>


    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
    <!-- ACTUALIZAR -->
    <!-- Noticias -->
    <script>
        function dataEdit($event) {
            var idnew = $($event).data('id');
            $.get("mi_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#nom_edit').val(custom.nombre);
                    // $('#cel_edit').val(custom.telefono);
                    $('#descrip_edit').val(custom.descripcion);
                    $('#cor_asesor_edit').val(custom.correo);
                    $('#cargo_edit').val(custom.cargo);
                    tinymce.get('noticia_edit').setContent(custom.noticia);
                    $('#img_edit').prop('src', custom.imagen);
                    $('#archivo_edit').prop('src', custom.archivo);
                    $('#id_edit').val(idnew);
                });
        }
    </script>
    <!-- Asesor -->
    <script>
        function dataEditAsesor($event) {
            var idnew = $($event).data('id');
            $.get("asesor_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#nom_asesor_edit').val(custom.nombre);
                    $('#cel_asesor_edit').val(custom.telefono);
                    $('#tel_exten_edit').val(custom.exten);
                    $('#wapp_asesor_edit').val(custom.telefonop);
                    $('#wappdos_asesor_edit').val(custom.wapp);
                    $('#cor_asesor_edit').val(custom.correo);
                    $('#cargo_edit').val(custom.cargo);
                    // tinymce.get('descrip_edit').setContent(custom.descripcion);
                    $('#img_editA').prop('src', custom.imagen);
                    $('#id_editA').val(idnew);
                });
        }
    </script>
    <!-- Aliados -->
    <script>
        function dataEditAliado($event) {
            var idnew = $($event).data('id');
            $.get("Aliado_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#img_editAliado').prop('src', custom.imagen);
                    $('#nom_aliado_edit').val(custom.zona);
                    $('#id_editAliado').val(idnew);
                });
        }
    </script>
    <!-- Banner -->
    <script>
        function dataEditBanner($event) {
            var idnew = $($event).data('id');
            $.get("Banners_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#img_editbanner').prop('src', custom.imagen);
                    $('#nom_banner_edit').val(custom.zona);
                    $('#id_editBanner').val(idnew);
                });
        }
    </script>
    <!-- Links -->
    <script>
        function dataEditLinks($event) {
            var idnew = $($event).data('id');
            $.get("Links_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#nombre_editlink').val(custom.nombre);
                    $('#link_editlink').val(custom.link);
                    $('#zona_link_edit').val(custom.zona);
                    $('#id_editLink').val(idnew);
                });
        }
    </script>
    <!-- Aseguradoras -->
    <script>
        function dataEditAseguradora($event) {
            var idnew = $($event).data('id');
            $.get("Aseguradora_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#nombre_editAseguradora').val(custom.nombre);
                    $('#nombre_archivoAseguradora').val(custom.archivo);
                    $('#id_editAseguradora').val(idnew);
                });
        }
    </script>
    <!-- Textos -->
    <script>
        function dataEditTextos($event) {
            var idnew = $($event).data('id');
            $.get("Textos_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#nombre_textos').val(custom.titulo);
                    tinymce.get('nombre_texto_descrip').setContent(custom.descripcion);
                    // $('#nombre_texto_descrip').val(custom.descripcion);
                    $('#zona_solo_texto').val(custom.zona);
                    $('#id_Texto').val(idnew);
                });
        }
    </script>
    <!-- Slider -->
    <script>
        function dataEditSlider($event) {
            var idnew = $($event).data('id');
            $.get("Slider_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    // $('#nombre_textos').val(custom.titulo);
                    // tinymce.get('nombre_Slider_descrip').setContent(custom.texto_slider);
                    $('#primera_img').prop('src', custom.ruta_imagen);
                    $('#Ubicacion_img').val(custom.alt_imagen);
                    $('#id_Slider_Img').val(idnew);
                });
        }
    </script>
    <!-- Slider Texto -->
    <script>
        function dataEditTextoSlider($event) {
            var idnew = $($event).data('id');
            $.get("Texto_Slider.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#titulo_textosS').val(custom.texto_slider);
                    $('#Ubicion_textoS').val(custom.orden);
                    $('#id_Slider_Tex').val(idnew);
                });
        }
    </script>
    <!-- Banner index -->
    <script>
        function dataEditBanners($event) {
            var idnew = $($event).data('id');
            $.get("Texto_Banner_index.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#img_bannersindex').prop('src', custom.imagen_url);
                    $('#titulo_bannersindex').val(custom.titulo);
                    $('#id_editBannersindex').val(idnew);
                });
        }
    </script>
    <!-- Valores -->
    <script>
        function dataEditValores($event) {
            var idnew = $($event).data('id');
            $.get("Valores_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#img_Valores').prop('src', custom.imagen);
                    $('#titulo_Valores').val(custom.titulo);
                    tinymce.get('descrip_Valores').setContent(custom.descripcion);
                    $('#id_editValores').val(idnew);
                });
        }
    </script>
    <!-- Servicios -->
    <script>
        function dataEditServicios($event) {
            var idnew = $($event).data('id');
            $.get("Servicios_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    // $('#img_Valores').prop('src', custom.imagen);
                    $('#nom_Servicio').val(custom.nom_servicio);
                    $('#icono_Servicio').val(custom.icono);
                    $('#url_Servicio').val(custom.url);
                    //  tinymce.get('descrip_Valores').setContent(custom.descripcion);
                    $('#id_editServicio').val(idnew);
                });
        }
    </script>
</head>

<style>
    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #1FACE1;
        outline: 0;
        /* box-shadow: 0 0 0 0.2rem rgba(31, 172, 225, 0.85); */

    }

    .centericon {
        vertical-align: middle !important;
        text-align: center;
    }

    .tamaño_images {
        width: 150px;
    }

    .color_icon_actu {
        color: #095C70;
    }

    .color_icon_elimina {
        color: #80BC00;
    }

    .btn {
        border-radius: 0px !important;
    }

    .iconos_link {
        color: #80BC00;
    }
</style>


<body onload="deshabilitaRetroceso()">

    <div id="position-relative d-flex align-items-center justify-content-center">
        <div id="particles-js" class="position-absolute div_parti">

        </div>

        <div id="segundo_div" class="dashboard clearfix position-absolute w-100 h-100 d-flex align-items-center justify-content-center">

            <ul class="tiles w-100">

                <div class="col1">
                    <!-- publicar -->
                    <li class="tile tile-big tile-1 slideTextLeft" data-toggle="modal" data-target="#publicar">
                        <div>
                            <p><span class="icon-skype"></span> Agregar</p>
                        </div>
                        <div>
                            <p>Nueva publicación</p>
                        </div>
                    </li>
                    <!-- manual de usuario -->
                    <a href="archivo/Instructivo_Administracion_noticias.pdf" download="Instructivo Administración Noticias.pdf">
                        <li class="tile tile-small tile tile-2 slideTextLeft" data-page-type="s-page" data-page-name="random-restored-page">
                            <div>
                                <p class="icon-arrow-right"></p>
                            </div>
                            <div>
                                <p>Descargar Manual de Usuario</p>
                            </div>
                        </li>
                    </a>
                    <!-- configuracion de usuario -->
                    <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#config">
                        <p class="icon-calendar-alt-fill"></p>
                    </li>
                    <!--lista  Asesores -->
                    <li class="border tile2 tile-big tile-4 fig-tile" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#lista_asesores">
                        <figure id="asesor">
                            <img src="images/asesores.png" />
                            <figcaption class="tile-caption caption-left">Lista de mis Asesores</figcaption>
                        </figure>
                    </li>
                    <!-- publicaciones de noticias -->
                    <!-- <li class="tile tile-big tile-5" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#lista_publicaciones">
                        <div>
                            <p><span class="icon-cloudy"></span> Publicaciones</p>
                        </div>
                    </li> -->
                </div>

                <div class="col2">

                    <!-- publicar -->
                    <li class="tile tile-big tile-5" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#lista_publicaciones">
                        <div>
                            <p><span class="icon-cloudy"></span> Publicaciones</p>
                        </div>
                    </li>
                    <!-- agregar nuevo asesor -->
                    <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#publica_asesores">
                        <div>
                            <p><span class="icon-skype"></span> Agregar</p>
                        </div>
                        <div>
                            <p>Nuevo Asesor</p>
                        </div>
                    </li>
                    <!-- Editar texto con links -->
                    <li class="tile tile-small tile-7 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#optionTextLin">
                        <div class="faces">
                            <div class="front"><span class="icon-picassa_link"></span></div>
                            <div class="back">
                                <p>Editar texto con links</p>
                            </div>
                        </div>
                    </li>
                    <!-- cerrer sesion -->
                    <a href="../salir.php">
                        <li class="tile tile-small last tile-8 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page">
                            <div class="faces">
                                <div class="front"><span class="icon-instagram"></span></div>
                                <div class="back">
                                    <p>Cerrar Sesión</p>
                                </div>
                            </div>
                        </li>
                    </a>
                </div>
                <!-- texto de bienvenida -->

                <!-- footer -->
                <div class="col3">
                    <li class="tile tile-big" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#lista_publicaciones">
                        <figure class="border cont_logo">
                            <img src="images/Logo-Conaltura_white.png" />
                        </figure>
                    </li>
                    <!-- Editar solo Textos -->
                    <li class="tile tile-small tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#SoloTexto">
                        <div class="faces">
                            <div class="front"><span class="icon-picassa_text"></span></div>
                            <div class="back">
                                <p>Editar solo Textos</p>
                            </div>
                        </div>
                    </li>
                    <!-- Editar Texto con imágenes -->
                    <li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#option_textoimg">
                        <div class="faces">
                            <div class="front"><span class="icon-instagram_img"></span></div>
                            <div class="back">
                                <p>Editar Texto con imágenes</p>
                            </div>
                        </div>
                    </li>
                    <!-- Actualizar imagenes -->
                    <li class="tile tile-small tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#Banners">
                        <div class="faces">
                            <div class="front"><span class="icon-skype_img"></span></div>
                            <div class="back">
                                <p>Actualizar Imágenes Banners</p>
                            </div>
                        </div>
                    </li>
                    <!-- Imagenes aliados -->
                    <li class="tile tile-small last tile-8 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#optionAliado">
                        <div class="faces">
                            <div class="front"><span class="icon-instagram_img_alidos"></span></div>
                            <div class="back">
                                <p>Imagenes Aliados</p>
                            </div>
                        </div>
                    </li>

                </div>

            </ul>

            <!-- Modal Publicacion de noticias-->
            <div class="modal fade" id="publicar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Crear nueva noticia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="guardar.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Título Publicación:</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título Noticia" required>
                                    <small id="tituloHepl" class="form-text text-muted">Titulo principal de la publicación</small>
                                </div>
                                <!-- <div class="form-group ">
                                    <label for="inputPassword" class="col-form-label">Descripción Corta:</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción Corta" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda no superar los 121 caracteres</small>

                                </div> -->
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Publicación:</label>
                                    <textarea name="noticia" id="noticia"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato </small>

                                </div>
                                <div class="custom-file mb-5">
                                    <label class="custom-file-label" for="customFile">Abrir una Imagen</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*" required>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB (Tamaño sugerido para la imagen es de 1520 de ancho x 1080 alto).</small>

                                </div>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Abrir un Archivo</label>
                                    <input type="file" class="custom-file-input" name="archivo" id="archivo" accept="application/pdf">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una Archivo formato PDF que no supere las 2MB de peso</small>

                                </div>

                                <input type="hidden" id="fecha" name="fecha">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn_publicar" value="crear">Crear Publicación</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal lista publicaciones-->
            <div class="modal fade" id="lista_publicaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lista Noticias</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Título de publicación</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($res =  $resultadoNoticia->fetch(PDO::FETCH_ASSOC)) {

                                        echo '<tr>
                                       <td>' . $res["id"] . '</td>
                                       <td>' . $res["nombre"] . '</td>

                                      <td><a href="mi_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#editar_noticia" onclick="dataEdit(this)"><i style="color: #095C70;" class="fas fa-edit"></i></a></td>

                                      <td><a href="#" data-href="eliminar.php?id=' . $res["id"] . '" data-toggle="modal"  data-target="#confirm-delete"><i style="color: #80BC00;"class="fas fa-trash-alt"></i></a></td>
                                           </tr>';
                                    }

                                    echo '
                                    <div class="modal fade" id="editar_noticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualiza tu Noticia</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_edit" value="">
                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Título Publicación</label>
                                                            <input type="text" class="form-control" name="nom_edit" id="nom_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                                        </div>
                                                       
                                                        <div class="form-group ">
                                                        <label for="inputPassword" class="col-sm-3 col-form-label">Descripción:</label>
                                                             <div class="col-sm-12">
                                                                 <textarea name="noticia_edit" id="noticia_edit"></textarea>
                                                                 <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato </small> 
                                                             </div>
                                                          </div>
                                                        <div class="form-group mt-3 d-blok">
                                                            <label for="" class="col-sm-3 col-form-label">Imagen actual:</label>
                                                            <div class="col-sm-9">
                                                                <img src="" alt="" id="img_edit" width="200px" height="auto">
                                                            </div>
                                                            <small id="tituloHepl" class="form-text text-muted"> Esta es la imagen que tienes actualmente.</small>
                                                        </div>
                                                        <div class="custom-file mt-3">
                                                            <label for="" class="custom-file-label">Actualizar imagen</label>
                                                            <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB (Tamaño sugerido para la imagen es de 1520 de ancho x 1080 alto).</small>
                                                        </div>
                                                    <div class="custom-file mt-3">
                                                        <label for="" class="custom-file-label">Archivos</label>
                                                        <input type="file" class="custom-file-input" name="archivo_edit" id="archivo_edit" accept="application/pdf">
                                                        <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                    </div>
                                                        <input type="hidden" id="fecha" name="fecha">
                                                </div>
                                              
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro que quieres eliminar esta noticia, recuerda que si lo eliminas no podra rehacer los cambios?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn_publicar btn-ok">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $('#confirm-delete').on('show.bs.modal', function(e) {
                                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                                $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                            });
                        </script>
                    </div>
                </div>
            </div>
            <!-- Modal eliminar noticia -->
            <div class="modal fade" id="eliminar-noticias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header modal_cabezera">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Publicación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal_cuerpo">
                            ¿Estas seguro de que quieres eliminar esta publicación, recuerda que si la eliminas no podra rehacer los cambios?
                            <br>

                        </div>
                        <div class="modal-footer modal_pie">
                            <button type="button" class="btn btn-secondary color_cancelar" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary color_aceptar btn-ok">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal publicar asesores-->
            <div class="modal fade" id="publica_asesores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Asesor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="agregar_asesor.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                    <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" placeholder="Nombre y apellido" required>
                                    <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Teléfono:</label>
                                    <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" placeholder="Teléfono" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Extensión:</label>
                                    <input type="text" class="form-control" name="exten" id="exten" placeholder="Extensión">
                                    <small id="tituloHepl" class="form-text text-muted">Este campo es Opcional.</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Celular (Opcional):</label>
                                    <input type="text" class="form-control" name="tel_asesor" id="tel_asesor" placeholder="Celular">
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.(Opcional)</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">WhatsApp (Opcional):</label>
                                    <input type="text" class="form-control" name="wapp_asesor" id="wapp_asesor" placeholder="WhatsApp">
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.(Opcional)</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                    <input type="email" class="form-control" name="cor_asesor" id="cor_asesor" placeholder="Asesor comercial" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar correos corporativos.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Cargo del asesor:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                                    <small id="tituloHepl" class="form-text text-muted">Es importante este campo.</small>
                                </div>
                                <!-- <div class="custom-file mb-5">
                                    <label for="inputPassword" class="col-form-label">Descripción del Asesor:</label>
                                    <textarea name="descrip" id="descrip"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>

                                </div>  -->
                                <div class="custom-file mt-3">
                                    <label for="" class="custom-file-label">Subir la foto del asesor</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*" required>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB (Tamaño sugerido para la imagen es de 294 de ancho x 351 alto).</small>
                                    

                                </div>
                                <input type="hidden" id="fecha" name="fecha">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn_publicar" value="crear">Agregar asesor</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal lista de asesores-->
            <div class="modal fade" id="lista_asesores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                <Lista class="modal-title" id="exampleModalLabel">Lista de mis Asesores
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Asesor</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadoAsesor->fetch(PDO::FETCH_ASSOC)) {

                                        echo '<tr>
                                       <td>' . $res["id"] . '</td>
                                       <td>' . $res["nombre"] . '</td>

                                      <td><a href="asesor_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_asesor" onclick="dataEditAsesor(this)"><i class="fas fa-edit color_icon_actu"></i></a></td>

                                      <td><a href="#" data-href="eliminar_asesor.php?id=' . $res["id"] . '" data-toggle="modal"    data-target="#confirm-delete-Asesor"  onclick="eliminarAsesor();"><i class="fas fa-trash-alt color_icon_elimina"></i></a></td>
                                           </tr>';
                                    }

                                    echo '
                                    <div class="modal fade" id="edit_asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_asesor.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualiza tu Asesor</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_editA" value="">
                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                                            <input type="text" class="form-control" name="nom_asesor_edit" id="nom_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Telefono:</label>
                                                            <input type="text" class="form-control" name="cel_asesor" id="cel_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Extensión:</label>
                                                            <input type="text" class="form-control" name="tel_exten_edit" id="tel_exten_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Este campo es Opcional.</small>

                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-4 col-form-label">Celular (Opcional):</label>
                                                            <input type="text" class="form-control" name="wapp_asesor" id="wapp_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-4 col-form-label">WhatsApp (Opcional):</label>
                                                            <input type="text" class="form-control" name="wappdos_asesor" id="wappdos_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                                            <input type="text" class="form-control" name="cor_asesor" id="cor_asesor_edit" value="" required>
                                                            <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar correos corporativos.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Cargo del asesor:</label>
                                                            <input type="text" class="form-control" name="cargo" id="cargo_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Es importante llenar este campo.</small>
                                                        </div>
                                                      
                                                        <div class="form-group mt-3 d-blok">
                                                            <label for="" class="col-sm-3 col-form-label">Imagen actual:</label>
                                                            <div class="col-sm-9">
                                                                <img src="" alt="" id="img_editA" width="200px" height="auto">
                                                            </div>
                                                            <small id="tituloHepl" class="form-text text-muted"> Esta es la imagen que tienes actualmente.</small>
                                                        </div>
                                                        <div class="custom-file mt-3">
                                                            <label for="" class="custom-file-label">Actualizar imagen</label>
                                                            <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB (Tamaño sugerido para la imagen es de 294 de ancho x 351 alto).</small>
                                                        </div>
                                                        <input type="hidden" id="fecha" name="fecha">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                        <div class="modal fade" id="confirm-delete-Asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro que quieres eliminar este asesor, recuerda que si lo eliminas no podra rehacer los cambios?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn_publicar btn-ok-A">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function eliminarAsesor() {
                                $('#confirm-delete-Asesor').on('show.bs.modal', function(e) {
                                    $(this).find('.btn-ok-A').attr('href', $(e.relatedTarget).data('href'));
                                    $('.debug-url-a').html('Delete URL: <strong>' + $(this).find('.btn-ok-A').attr('href') + '</strong>');
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
            <!-- Modal configuracion user-->
            <div class="modal fade" id="config" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Configuración de Usuario Administrador</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="updateperfil.php" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $usuario_admin['id_user']; ?>">
                                <input type="hidden" name="usuario" value="<?php echo $usuario_admin['usuario']; ?>">
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-form-label">Nombre:</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $usuario_admin['usuario'] ?>">
                                    <small id="tituloHepl" class="form-text text-muted">Puede ingresar letras y numeros, recuerde que si lo cambia debe ingresar con este nuevo usuario</small>

                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Contraseña:</label>
                                    <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $usuario_admin['password'] ?>">
                                    <small id="tituloHepl" class="form-text text-muted">Puede ingresar caracteres especiales @$#%&</small>
                                </div>

                                <!-- <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Teléfono de Usuario:</label>
                                    <input type="number" class="form-control" name="telefono" id="telefono" value="<?php echo $usuario[4]; ?>">
                                    <small id="tituloHepl" class="form-text text-muted"> Se recomienda agregar agregar solo numeros </small>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Cargo de Usuario:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $usuario[5]; ?>">
                                    <small id="tituloHepl" class="form-text text-muted"> Es un campo opcional</small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Dependencia:</label>
                                    <input type="text" class="form-control" name="dependencia" id="dependencia" value="<?php echo $usuario[6]; ?>">
                                    <small id="tituloHepl" class="form-text text-muted"> Es un campo opcional </small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Foto de perfil de Usuario:</label>
                                    <div>
                                        <img width="200px" height="" src="<?php echo $usuario[7]; ?>">
                                    </div>

                                    <small id="tituloHepl" class="form-text text-muted">Esta es su foto de Usuario actualmente</small>
                                </div>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Subir una nueva foto de perfil</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="application/jpg">
                                    <small id="tituloHepl" class="form-text text-muted">Ingrese una imagen que no supere las 2MB de peso y tamaño de 900 pixeles de Ancho por 500 pixeles de Alto </small>
                                </div> -->
                        </div>

                        <div class="modal-footer">
                            <button type="submint" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn_publicar">Actualizar Perfil</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Modal Option Aliados-->
            <div class="modal fade" id="optionAliado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="col-12 d-flex">
                                <div class="col-6">
                                    <h5 class="mb-3">Lista de mis Aliados</h5>
                                    <a data-toggle="modal" data-target="#ListaAli" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-3">Agregar nuevo Aliado</h5>
                                    <a data-toggle="modal" data-target="#AgregarAliado" target="_blank" role="button" class="btn btn_publicar">Agregar</a>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Banners -->
            <div class="modal fade" id="Banners" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Imagenes Banner</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="centericon">
                                        <th scope="col">Imagenes</th>
                                        <th scope="col">Ubicación</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadoImages->fetch(PDO::FETCH_ASSOC)) {
                                        echo '
                                        <tr>
                                        <td class="text-center"><img src="' . $res["imagen"] . '" class="tamaño_images" alt=""></td>
                                        <td class="centericon">' . $res["zona"] . '</td>
                                        <td class="centericon"><a href="Banners_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Banner" onclick="dataEditBanner(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>
                                        </tr>
                                        ';
                                    }
                                    echo '
                                    <div class="modal fade" id="edit_Banner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                      <form method="post" id="form_data_1" action="update_Banner.php" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Actualizar Banner </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    <input type="hidden" name="id" id="id_editBanner" value="">
                                                   
                                                    <div class="form-group mt-3 d-blok">
                                                        <label for="" class="col-sm-3 col-form-label">Imagen actual:</label>
                                                        <div class="col-sm-9">
                                                            <img src="" alt="" id="img_editbanner" width="200px" height="auto">
                                                        </div>
                                                        <small id="tituloHepl" class="form-text text-muted"> Esta es la imagen que tienes actualmente.</small>
                                                    </div>

                                                    <div class="form-group d-flex mt-5">
                                                      <label for="staticEmail" class="col-sm-4 col-form-label">Ubicación de la imagen:</label>
                                                      <div class="col-sm-8">
                                                          <input type="text" readonly class="form-control-plaintext" name="nom_banner_edit" id="nom_banner_edit" >
                                                       </div>
                                                  </div>
                                                  

                                                <div class="custom-file mb-5 mt-4">
                                                    <label class="custom-file-label" for="customFile">Abrir una nueva Imagen</label>
                                                    <input type="file" class="custom-file-input" name="imagenAliado" id="imagenAlido" accept="image/*" required>
                                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                </div>
                                                <select name="ZonaUbicacion" style="display:none">
                                                    <option value="Slider Aliados"></option>
                                                </select>
                                                   
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn_publicar">Actualizar</button>
                                            </div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                    ';

                                    ?>
                                </tbody>
                                <tbody>



                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Lista Aliados -->
            <div class="modal fade" id="ListaAli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lista de Aliados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="centericon">
                                        <th scope="col">Imagenes</th>
                                        <th scope="col">Ubicación</th>
                                        <th scope="col">Actualizar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadoAliados->fetch(PDO::FETCH_ASSOC)) {
                                        echo '
                                        <tr>
                                        <td class="text-center"><img src="' . $res["imagen"] . '" class="tamaño_images" alt=""></td>
                                        <td class="centericon">' . $res["zona"] . '</td>
                                        <td class="centericon"><a href="Aliado_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Aliado" onclick="dataEditAliado(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>
                                        <td class="centericon"><a href="#" data-href="eliminar_Aliado.php?id=' . $res["id"] . '" data-toggle="modal"    data-target="#confirm-delete-Aliado"  onclick="eliminarAliado();"><i class="fas fa-trash-alt color_icon_elimina"></i></a></td>
                                        </tr>';
                                    }
                                    echo '
                                    <div class="modal fade" id="edit_Aliado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_Aliado.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Aliado </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_editAliado" value="">
                                                       
                                                        <div class="form-group mt-3 d-blok">
                                                            <label for="" class="col-sm-3 col-form-label">Imagen actual:</label>
                                                            <div class="col-sm-9">
                                                                <img src="" alt="" id="img_editAliado" width="200px" height="auto">
                                                            </div>
                                                            <small id="tituloHepl" class="form-text text-muted"> Esta es la imagen que tienes actualmente.</small>
                                                        </div>

                                                        <div class="form-group d-flex mt-5">
                                                          <label for="staticEmail" class="col-sm-4 col-form-label">Ubicación de la imagen:</label>
                                                          <div class="col-sm-8">
                                                              <input type="text" readonly class="form-control-plaintext" name="nom_aliado_edit" id="nom_aliado_edit" >
                                                           </div>
                                                      </div>
                                                      

                                                    <div class="custom-file mb-5 mt-4">
                                                        <label class="custom-file-label" for="customFile">Abrir una nueva Imagen</label>
                                                        <input type="file" class="custom-file-input" name="imagenAliado" id="imagenAlido" accept="image/*" required>
                                                        <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                    </div>
                                                    <select name="ZonaUbicacion" style="display:none">
                                                        <option value="Slider Aliados"></option>
                                                    </select>
                                                       
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>
                                </tbody>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                        <div class="modal fade" id="confirm-delete-Aliado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro que quieres eliminar este Aliado, recuerda que si lo eliminas no podra rehacer los cambios?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn_publicar btn-ok-Ali">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function eliminarAliado() {
                                $('#confirm-delete-Aliado').on('show.bs.modal', function(e) {
                                    $(this).find('.btn-ok-Ali').attr('href', $(e.relatedTarget).data('href'));
                                    $('.debug-url-a').html('Delete URL: <strong>' + $(this).find('.btn-ok-Ali').attr('href') + '</strong>');
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
            <!-- Modal Agregar Aliado -->
            <div class="modal fade" id="AgregarAliado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Imagen de Aliados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="guardarAlido.php" method="POST" enctype="multipart/form-data">
                                <div class="custom-file mb-5">
                                    <label class="custom-file-label" for="customFile">Abrir una Imagen</label>
                                    <input type="file" class="custom-file-input" name="imagenAliado" id="imagenAlido" accept="image/*" required>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                </div>
                                <select name="ZonaUbicacion" style="display:none">
                                    <option value="index/Slider Aliados"></option>
                                </select>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn_publicar" value="crear">Guardar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Option Texto y links-->
            <div class="modal fade" id="optionTextLin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="col-12 d-flex">
                                <div class="col-6">
                                    <h5 class="mb-3">Textos y Links</h5>
                                    <a data-toggle="modal" data-target="#Link_Texto" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-3">Formulario Aseguradoras</h5>
                                    <a data-toggle="modal" data-target="#optionAseguradoras" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Option Aseguradoras-->
            <div class="modal fade" id="optionAseguradoras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="col-12 d-flex">
                                <div class="col-6">
                                    <h5 class="mb-3">Lista de Aseguradoras</h5>
                                    <a data-toggle="modal" data-target="#Aseguradora" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-3">Agregar Nueva Aseguradora</h5>
                                    <a data-toggle="modal" data-target="#AgregarAseguradora" target="_blank" role="button" class="btn btn_publicar">Agregar</a>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Texto y Link-->
            <div class="modal fade" id="Link_Texto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Textos y links</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Link</th>
                                        <th scope="col">Zona</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadoLinks->fetch(PDO::FETCH_ASSOC)) {
                                        echo '
                                        <tr>
                                        <td class="text-left">' . $res["nombre"] . '</td>
                                        <td class="text-break">' . $res["link"] . '</td>
                                        <td class="">' . $res["zona"] . '</td>
                                        <td class="centericon"><a href="Links_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Link" onclick="dataEditLinks(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>
                                        </tr>
                                        ';
                                    }
                                    echo '
                                    <div class="modal fade" id="edit_Link" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="updateLinks.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Link</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_editLink" value="">
                                                        <div class="form-group mb-5">
                                                            <label for="" class="col-sm-3 col-form-label">Nombre:</label>
                                                            <input type="text" class="form-control" name="nombre_editlink" id="nombre_editlink">
                                                            <small id="tituloHepl" class="form-text text-muted">Este texto es el que se ve reflejado en la Página</small>
                                                        </div>
                                                        <div class="form-group mb-5">
                                                            <label for="" class="col-sm-3 col-form-label">Link:</label>
                                                            <input type="text" class="form-control" name="link_editlink" id="link_editlink">
                                                            <small id="tituloHepl" class="form-text text-muted">Este es el llamado a la acción (Redireccionamiento)</small>
                                                        </div>
                                                        <div class="form-group mt-5 mb-5">
                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Zona:</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" readonly class="form-control-plaintext" name="zona_link_edit" id="zona_link_edit" >
                                                            <small id="tituloHepl" class="form-text text-muted text-left">Esta es la Ubicación donde se encuentra el texto</small>
                                                         </div>
                                                    </div>
                                                       
                                                </div>
                                              
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Lista Aseguradoras -->
            <div class="modal fade" id="Aseguradora" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lista de Aseguradoras</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Archivo</th>
                                        <th scope="col">Actualizar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadoAseguradora->fetch(PDO::FETCH_ASSOC)) {

                                        echo '<tr>
                                       <td>' . $res["nombre"] . '</td>
                                       <td>' . $res["archivo"] . '</td>

                                      <td class="centericon"><a href="Aseguradora_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Aseguradoras" onclick="dataEditAseguradora(this)"><i class="fas fa-edit color_icon_actu"></i></a></td>

                                      <td class="centericon"><a href="#" data-href="eliminar_Aseguradora.php?id=' . $res["id"] . '" data-toggle="modal"    data-target="#confirm-delete-Aseguradora"  onclick="eliminarAseguradora();"><i class="fas fa-trash-alt color_icon_elimina"></i></a></td>
                                           </tr>';
                                    }

                                    echo '
                                    <div class="modal fade" id="edit_Aseguradoras" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_Aseguradora.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Aseguradora</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_editAseguradora" value="">
                                                        <div class="form-group mt-3 mb-5">
                                                            <label for="" class="col-sm-3 col-form-label">Nombre: </label>
                                                            <input type="text" class="form-control" name="nombre_editAseguradora" id="nombre_editAseguradora" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Nombre Actual de la Aseguradora.</small>
                                                        </div>
                                                        
                                                        <div class="form-group d-flex mt-5 mb-5">
                                                          <label for="staticEmail" class="col-sm-1 col-form-label">Archivo:</label>
                                                            <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" name="nombre_archivoAseguradora" id="nombre_archivoAseguradora" >
                                                            </div>
                                                        </div>
                                                        <div class="custom-file mt-5 mb-5">
                                                            <label class="custom-file-label" for="customFile">Abrir un Archivo</label>
                                                            <input type="file" class="custom-file-input" name="archivo_Aseguradora" id="" accept="application/pdf">
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese una Archivo formato PDF que no supere las 2MB de peso</small>

                                                        </div>
                                                        
                                                        <input type="hidden" id="fecha" name="fecha">
                                                </div>
                                                <div class="modal-footer mt-4">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="confirm-delete-Aseguradora" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro que quieres eliminar esta Aseguradora, recuerda que si lo eliminas no podra rehacer los cambios?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn_publicar btn-ok-Ase">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function eliminarAseguradora() {
                                $('#confirm-delete-Aseguradora').on('show.bs.modal', function(e) {
                                    $(this).find('.btn-ok-Ase').attr('href', $(e.relatedTarget).data('href'));
                                    $('.debug-url-a').html('Delete URL: <strong>' + $(this).find('.btn-ok-Ase').attr('href') + '</strong>');
                                });
                            }
                        </script>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Agregar Aseguradora links -->
            <div class="modal fade" id="AgregarAseguradora" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Aseguradora</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="guardarAseguradora.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nombre Aseguradora:</label>
                                    <input type="text" class="form-control" name="nombre_Aseguradora" placeholder="Nueva Aseguradora" required>
                                    <small id="tituloHepl" class="form-text text-muted">Este nombre es el que se vera en la página </small>
                                </div>

                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Abrir un Archivo</label>
                                    <input type="file" class="custom-file-input" name="archivo_aseguradora" accept="application/pdf" required>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una Archivo formato PDF que no supere las 2MB de peso</small>

                                </div>

                                <input type="hidden" id="fecha" name="fecha">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn_publicar" value="crear">Agregar Aseguradora</button>
                        </div>
                        </form>


                    </div>

                </div>
            </div>
            <!-- Solo Textos -->
            <div class="modal fade" id="SoloTexto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lista de Textos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="">
                                        <th scope="col">Título</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Ubicación</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadoTextos->fetch(PDO::FETCH_ASSOC)) {
                                        echo '
                                        <tr>
                                        <td class="">' . $res["titulo"] . '</td>
                                        <td class="">' . $res["descripcion"] . '</td>
                                        <td class="centericon">' . $res["zona"] . '</td>
                                        <td class="centericon"><a href="Textos_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Textos" onclick="dataEditTextos(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>
                                        </tr>
                                        ';
                                    }
                                    echo '
                                    <div class="modal fade" id="edit_Textos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                      <form method="post" id="form_data_1" action="update_Textos.php" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Actualizar Texto </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    <input type="hidden" name="id" id="id_Texto" value="">
                                                   
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 col-form-label">Titulo:</label>
                                                        <input type="text" class="form-control" name="nombre_textos" id="nombre_textos" placeholder="" required>
                                                        <small id="tituloHepl" class="form-text text-muted">Tener en cuentas las Mayúsculas y Minúsculas</small>
                                                    </div>
                                                    <div class="custom-file mb-5">
                                                        <label for="inputPassword" class="col-sm-3 col-form-label">Descripción:</label>
                                                        <textarea name="nombre_texto_descrip" id="nombre_texto_descrip"></textarea>
                                                        <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>
                
                                                    </div>
                                                    
                                                    <div class="form-group d-flex mt-5">
                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Ubicación del Texto:</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" readonly class="form-control-plaintext" name="zona_solo_texto" id="zona_solo_texto" >
                                                     </div>
                                                
                                                   
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn_publicar">Actualizar</button>
                                            </div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                    ';

                                    ?>
                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Option texto con imagenes-->
            <div class="modal fade" id="option_textoimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="col-12 d-flex flex-wrap">
                                <div class="col-6 mb-3">
                                    <h5 class="mb-3">Slider Index</h5>
                                    <a data-toggle="modal" data-target="#Slider_Img" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                                <div class="col-6 mb-3">
                                    <h5 class="mb-3">Banner Index</h5>
                                    <a data-toggle="modal" data-target="#Banner_Index" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                                <hr class="w-100">
                                <div class="col-6 mt-3">
                                    <h5 class="mb-3">Valores Conócenos</h5>
                                    <a data-toggle="modal" data-target="#Valores_con" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                                <div class="col-6 mt-3">
                                    <h5 class="mb-3">Nuestros Servicios</h5>
                                    <a data-toggle="modal" data-target="#option_Servicios" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal slider img-->
            <div class="modal fade" id="Slider_Img" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Información del Slider </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped mt-4">
                                <thead>
                                    <tr class="">
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Orden de Secuencia</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadoSlider->fetch(PDO::FETCH_ASSOC)) {
                                        echo '
                                        <tr>
                                        <td class="centericon"><img src="' . $res["ruta_imagen"] . '" class="tamaño_images" alt=""></td>
                                        <td>' . $res["alt_imagen"] . '</td>
                                        <td class="centericon"><a href="Slider_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Slider" onclick="dataEditSlider(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>
                                        </tr>';
                                    }
                                    echo '
                                    <div class="modal fade" id="edit_Slider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_Slider.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Slider </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    
                                                        <input type="hidden" name="id" id="id_Slider_Img" value="">

                                                        <div class="form-group mt-4 d-blok">
                                                            <label for="" class="col-sm-3 col-form-label">Imagen del Slider:</label>
                                                            <div class="col-sm-9">
                                                                <img src="" alt="" id="primera_img" width="200px" height="auto">
                                                            </div>
                                                            <small id="tituloHepl" class="form-text text-muted"> Esta es la primera imagen que tienes actualmente.</small>
                                                        </div>
                                                    <div class="custom-file mb-5 mt-4">
                                                        <label class="custom-file-label" for="customFile">Abrir una nueva Imagen</label>
                                                        <input type="file" class="custom-file-input" name="primera_img" id="" accept="image/*" required>
                                                        <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB, el tamaño recomendado para la imagen es de 1920 Ancho x 640 Alto</small>
                                                    </div>

                                                    <div class="form-group d-flex mt-4">
                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Ubicación de la imagen:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" name="Ubicacion_img" id="Ubicacion_img" >
                                                        </div>
                                                    </div>
                                                    
                                                <div class="modal-footer mt-3">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>
                                </tbody>

                            </table>
                            <table class="table table-bordered table-hover table-striped mt-4">
                                <thead>
                                    <tr class="">
                                        <th scope="col">Texto Slider</th>
                                        <th scope="col">Secuencia</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadotextoSlider->fetch(PDO::FETCH_ASSOC)) {
                                        echo '
                                        <tr>
                                        <td >' . $res["texto_slider"] . '</td>
                                        <td >' . $res["orden"] . '</td>
                                        <td class="centericon"><a href="Texto_Slider.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Texto_Slider" onclick="dataEditTextoSlider(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>
                                        </tr>';
                                    }
                                    echo '
                                    <div class="modal fade" id="edit_Texto_Slider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_Textos_Slider.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Slider </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    
                                                        <input type="hidden" name="id" id="id_Slider_Tex" value="">

                                                     <div class="form-group">
                                                        <label for="" class="col-sm-3 col-form-label">Texto:</label>
                                                        <input type="text" class="form-control" name="titulo_textosS" id="titulo_textosS" placeholder="" required>
                                                        <small id="tituloHepl" class="form-text text-muted">Tener en cuentas las Mayúsculas y Minúsculas</small>
                                                    </div>
                                                    <div class="form-group d-flex mt-4">
                                                        <label for="staticEmail" class="col-sm-2 col-form-label">Ubicación del Texto:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" readonly class="form-control-plaintext" name="Ubicion_textoS" id="Ubicion_textoS" >
                                                        </div>
                                                    </div>
                                                       
                                                <div class="modal-footer mt-3">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <div class="modal-footer mt-5">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Info Banner Index-->
            <div class="modal fade" id="Banner_Index" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Información Banner Index </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped mt-4">
                                <thead>
                                    <tr class="">
                                        <th scope="col">Título</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadobannertext->fetch(PDO::FETCH_ASSOC)) {
                                        echo '
                                        <tr>
                                        <td class="">' . $res["titulo"] . '</td>
                                        <td class="text-center"><img src="' . $res["imagen_url"] . '" class="tamaño_images" alt=""></td>
                                        <td class="centericon"><a href="Texto_Banner_index.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Banner_index" onclick="dataEditBanners(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>
                                        </tr>
                                        ';
                                    }
                                    echo '
                                    <div class="modal fade" id="edit_Banner_index" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                      <form method="post" id="form_data_1" action="update_Bannertxt.php" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Actualizar Texto </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    <input type="hidden" name="id" id="id_editBannersindex" value="">

                                                <div class="form-group mt-4 d-blok">
                                                    <label for="" class="col-sm-3 col-form-label">Imagen del Banner:</label>
                                                    <div class="col-sm-9">
                                                        <img src="" alt="" id="img_bannersindex" width="200px" height="auto">
                                                    </div>
                                                    <small id="tituloHepl" class="form-text text-muted"> Esta es la primera imagen que tienes actualmente.</small>
                                                </div>
                                                <div class="custom-file mb-5 mt-4">
                                                    <label class="custom-file-label" for="customFile">Abrir una nueva Imagen</label>
                                                    <input type="file" class="custom-file-input" name="imagenBannertxt" id="imagenBannertxt" accept="image/*">
                                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 col-form-label">Titulo:</label>
                                                        <input type="text" class="form-control" name="titulo_bannerindex" id="titulo_bannersindex" placeholder="" >
                                                        <small id="tituloHepl" class="form-text text-muted">Tener en cuentas las Mayúsculas y Minúsculas</small>
                                                    </div>
                                                   
                                                   
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn_publicar">Actualizar</button>
                                            </div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                    ';

                                    ?>
                                </tbody>
                                <!-- <tbody>
                                    <tr>
                                        <td class="centericon">Hay una vivienda para cada necesidad</td>
                                        <td class="centericon"><img src="images/no_image.png" width="20%" alt=""></td>
                                        <td class="centericon"><i class="fas fa-sync color_icon_actu"></i></td>
                                    </tr>
                                </tbody> -->
                            </table>

                        </div>
                        <div class="modal-footer mt-5">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Valores -->
            <div class="modal fade" id="Valores_con" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Valores Conócenos </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="">
                                        <th scope="col">Título</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadovalores->fetch(PDO::FETCH_ASSOC)) {

                                        echo '<tr>
                                       <td>' . $res["titulo"] . '</td>
                                       <td>' . $res["descripcion"] . '</td>
                                       <td class="centericon"><img src="' . $res["imagen"] . '" class="w-50" alt=""></td>
                                      <td class="centericon"><a href="Valores_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_valores" onclick="dataEditValores(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>

                                           </tr>';
                                    }

                                    echo '
                                    <div class="modal fade" id="edit_valores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_valores.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Valores</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_editValores" value="">
                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Titulo:</label>
                                                            <input type="text" class="form-control" name="titulo_Valores" id="titulo_Valores" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Tener en cuenta la buena ortografia</small>
                                                        </div>

                                                        <div class="custom-file mb-5">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Descripción:</label>
                                                            <textarea name="descrip_Valores" id="descrip_Valores"></textarea>
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>
                                                        </div>
                                                       
                                                        <div class="form-group mt-3 d-blok">
                                                            <label for="" class="col-sm-3 col-form-label">Imagen actual:</label>
                                                            <div class="col-sm-9">
                                                                <img src="" alt="" id="img_Valores" width="200px" height="auto">
                                                            </div>
                                                            <small id="tituloHepl" class="form-text text-muted"> Esta es la imagen que tienes actualmente.</small>
                                                        </div>
                                                        <div class="custom-file mt-3">
                                                            <label for="" class="custom-file-label">Actualizar imagen</label>
                                                            <input type="file" class="custom-file-input" name="actualizaValoreimg" id="actualizaValoreimg" accept="image/*">
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>

                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Option Servicios-->
            <div class="modal fade" id="option_Servicios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="col-12 d-flex flex-wrap">
                                <div class="col-6 mt-5 mb-5">
                                    <h5 class="mb-3">Lista de Servicios</h5>
                                    <a data-toggle="modal" data-target="#List_Servicios" target="_blank" role="button" class="btn btn_publicar">Ver más</a>
                                </div>
                                <div class="col-6 mt-5 mb-5">
                                    <h5 class="mb-3">Agregar Nuevo Servicio</h5>
                                    <a data-toggle="modal" data-target="#Agregar_Servicio" target="_blank" role="button" class="btn btn_publicar">Agregar</a>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer mt-5">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Lista de Servicios-->
            <div class="modal fade" id="List_Servicios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lista de Servicios</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="">
                                        <th scope="col">Nombre del Servicio</th>
                                        <th scope="col">Ícono</th>
                                        <th scope="col">Link (Redireccionamiento)</th>
                                        <th scope="col">Actualizar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  $resultadoservicios->fetch(PDO::FETCH_ASSOC)) {

                                        echo '<tr>
                                       <td class="centericon">' . $res["nom_servicio"] . '</td>
                                       <td class="centericon"><i class="' . $res["icono"] . ' color_icon_actu"></i></td>
                                       <td class="centericon">' . $res["url"] . '</td>
                                      <td class="centericon"><a href="Servicios_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#edit_Servicios" onclick="dataEditServicios(this)"><i class="fas fa-sync color_icon_actu"></i></a></td>
                                      <td class="centericon"><a href="#" data-href="eliminar_Servicio.php?id=' . $res["id"] . '" data-toggle="modal"    data-target="#confirm-delete-Servicio"  onclick="eliminarServicio();"><i class="fas fa-trash-alt color_icon_elimina"></i></a></td>
                                           </tr>';
                                    }

                                    echo '
                                    <div class="modal fade" id="edit_Servicios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_servicios.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Servicios</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    
                                                        <input type="hidden" name="id" id="id_editServicio" value="">
                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Nombre del Servicio:</label>
                                                            <input type="text" class="form-control" name="nom_Servicio" id="nom_Servicio" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Tener en cuenta la buena ortografía</small>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Url (Redireccionamiento):</label>
                                                            <input type="text" class="form-control" name="url_Servicio" id="url_Servicio" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Este campo es Opcional</small>
                                                        </div>
                                                        <div class="form-group d-flex mt-5">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Clase de Ícono Actual:</label>
                                                            <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" name="" id="icono_Servicio" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Actualizar Ícono:</label>
                                                            <input type="text" class="form-control" name="icono_Servicio" id="_______" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Agregar Unicamente el texto que se encuentra Negrita en este campo Ej: < i class=" <strong>fa fa-key</strong> > < / i > <a href="https://fontawesome.com/icons?d=gallery" target="_blank">Ver más Íconos</a></small>
                                                        </div>
                                                       
                                                       
                                                       
                                                       
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>

                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                    <div class="modal fade" id="confirm-delete-Servicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ¿Estas seguro que quieres eliminar este Servicio, recuerda que si lo eliminas no podra rehacer los cambios?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                                    <a class="btn btn_publicar btn-ok-Servi">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function eliminarServicio() {
                            $('#confirm-delete-Servicio').on('show.bs.modal', function(e) {
                                $(this).find('.btn-ok-Servi').attr('href', $(e.relatedTarget).data('href'));
                                $('.debug-url-a').html('Delete URL: <strong>' + $(this).find('.btn-ok-Servi').attr('href') + '</strong>');
                            });
                        }
                    </script>
                </div>
            </div>
            <!-- Modal Agregar Servicio-->
            <div class="modal fade" id="Agregar_Servicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Servicio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="guardarServicio.php" method="POST">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Nombre del Servicio:</label>
                                    <input type="text" class="form-control" name="Nom_Servi" placeholder="Nueva Servicio" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda no superar los 35 Caráctere</small>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">Ícono del Servicio:</label>
                                    <input type="text" class="form-control" name="Icono_Servi" placeholder="Ícono Servicio" required>
                                    <small id="tituloHepl" class="form-text text-muted">Agregar Unicamente el texto que se encuentra Negrita en este campo Ej: < i class=" <strong>fa fa-key</strong>">
                                            < /> <a href="https://fontawesome.com/icons?d=gallery" target="_blank">Ver más Íconos</a></small>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">Link (Redireccionamiento):</label>
                                    <input type="text" class="form-control" name="Url_Servi" placeholder="Link Servicio (Opcional)">
                                    <small id="tituloHepl" class="form-text text-muted">Agregue el nombre de la vista que desea Redireccionar (Opcional)</small>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn_publicar" value="crear">Agregar Servicio</button>
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="col-12" style="position: absolute;bottom: 0; width: 100%; height: 40px;color:white">
                <p class="text-center px-2 text-justify"> Diseñado y Desarrollado por <a class="mx-1 hover_footer" target="blank" href="https://www.dexcondigital.com"> Dexcon Digital </a> ©Copyright 2020 para
                    Conaltura Inmobiliaria. Todos los derechos reservados. </p>
            </div>
        </div>

</body>

<?php include('layout/archivosfooter.php'); ?>
<script>
    tinymce.init({
        selector: ' textarea',
        height: 300,
        menubar: false,
        plugins: ['advlist autolink lists link image charmap print preview anchor textcolor colorpicker'],
        language: 'es_MX',
        toolbar: 'undo redo cut copy paste selectall |  fontsizeselect | bold italic underline forecolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | print link',
        fontsize_formats: '8pt 10pt 12pt 13pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt 32pt 34pt 36pt 42pt'
    });
</script>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

</html>

<?php include 'layout/layoutFooter.php'; ?>