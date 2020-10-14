<?php
$user = $_SESSION["usuarioactual"];
$con = Conect();
$qry = "SELECT * FROM usuarios where usuario ='$user'";
$sql = mysqli_query($con, $qry);
$usuario =  mysqli_fetch_array($sql);
$imagen_inicio = $usuario[17];
$page = "Inicio";
$nombre_inmobiliaria = 'Inmobiliaria Alejandro Dominguez Parra - Bucaramanga';
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
</head>

<body>

  <div id="position-relative d-flex align-items-center justify-content-center">
        <div id="particles-js" class="position-absolute div_parti">

        </div>
        <div id="segundo_div" class="dashboard clearfix position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
            <ul class="tiles">

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
                    <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="s-page" data-page-name="random-restored-page">
                        <div>
                            <p class="icon-arrow-right"></p>
                        </div>
                        <div>
                            <p>Descargar Manual de Usuario</p>
                        </div>
                    </li>
                    <!-- configuracion de usuario -->
                    <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#config">
                        <p class="icon-calendar-alt-fill"></p>
                    </li>
                    <!--lista  Asesores -->
                    <li class="border tile2 tile-big tile-4 fig-tile" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#lista_asesores">
                        <figure id="asesor">
                            <img src="img/asesores.png" />
                            <figcaption class="tile-caption caption-left">Lista de mis Asesores</figcaption>
                        </figure>
                    </li>
                </div>

                <div class="col2">
                    <!-- publicaciones de noticias -->
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
                    <!-- vista previa -->
                    <li class="tile tile-small tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#vista">
                        <div class="faces">
                            <div class="front"><span class="icon-picassa"></span></div>
                            <div class="back">
                                <p>Vista Previa</p>
                            </div>
                        </div>
                    </li>
                    <!-- cerrer sesion -->
                    <li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page">
                        <div class="faces">
                            <div class="front"><span class="icon-instagram"></span></div>
                            <div class="back">
                                <p>Cerrar Sesión</p>
                            </div>
                        </div>
                    </li>
                </div>
                <!-- texto de bienvenida -->
                <div class="col3">
                    <li class="tile tile-2xbig tile-9 fig-tile" data-page-name="random-r-page" data-toggle="modal" data-target="#lista_asesores">
                        <figure class="border cont_logo">
                            <img src="img/logo dexcon digital_blanco.png" />
                            <figcaption class="tile-caption caption-bottom"> Bienvenido al administrador del blog y asesores de su pagina web.
                        </figure>
                    </li>
                    <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="custom-page">
                        <div>
                            <p>Diseñado y Desarrollado por <a href="">Dexcon Digital</a> ©Copyright 2020 para Inmobiliaria XXXXX. Todos los derechos reservados.</p>
                        </div>
                    </li>
                </div>
            </ul>

            <!-- Modal Publicacion de noticias-->
            <div class="modal fade" id="publicar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CREAR NUEVA PUBLICACIÓN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Título Publicación:</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título Noticia" required>
                                    <small id="tituloHepl" class="form-text text-muted">Titulo principal de la publicación</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-form-label">Descripción Corta:</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción Corta" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda no superar los 121 caracteres</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Publicación:</label>
                                    <textarea name="noticia" id="noticia"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato </small>

                                </div>
                                <div class="custom-file mb-5">
                                    <label class="custom-file-label" for="customFile">Abrir una Imagen</label>
                                    <input type="file" class="custom-file-input" name="archivo" id="archivo" accept="image/*">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una Archivo formato PDF que no supere las 2MB de peso</small>

                                </div>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Abrir un Archivo</label>
                                    <input type="file" class="custom-file-input" name="archivo" id="archivo" accept="application/pdf">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una Archivo formato PDF que no supere las 2MB de peso</small>

                                </div>

                                <input type="hidden" id="fecha" name="fecha">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Crear Publicación</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal lista publicaciones-->
            <div class="modal fade" id="lista_publicaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal lista publicaciones</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Publicacíon</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Últimas noticias</td>
                                        <td><a href="#editar_noticia" data-toggle="modal" data-target="#editar_noticia"><i style="color:black;" class="fas fa-edit"></i></a></td>
                                        <td><a href="#eliminar-noticias" data-toggle="modal" data-target=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Últimas noticias</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Últimas noticias</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Últimas noticias</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Últimas noticias</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Últimas noticias</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Últimas noticias</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Últimas noticias</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Últimas noticias</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
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
            <!-- Modal de editar noticia -->
            <div class="modal fade" id="editar_noticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modify Noticia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                    <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" placeholder="Nombre y apellido" required>
                                    <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular ó Teléfono:</label>
                                    <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" placeholder="Celular" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                                </div>
                                <div class="custom-file mb-5">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Descripcion:</label>
                                    <textarea name="descrip" id="descrip"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>

                                </div>
                                <div class="custom-file mt-3">
                                    <label for="" class="custom-file-label">Imagen Actual</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>

                                </div>
                                <input type="hidden" id="fecha" name="fecha">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal publicar asesores-->
            <div class="modal fade" id="publica_asesores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal publicar asesores</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                    <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" placeholder="Nombre y apellido" required>
                                    <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular ó Teléfono:</label>
                                    <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" placeholder="Celular" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                    <input type="email" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar correos corporativos.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Cargo del Asesor:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                                    <small id="tituloHepl" class="form-text text-muted">Es importante este campo.</small>
                                </div>
                                <div class="custom-file mb-5">
                                    <label for="inputPassword" class="col-form-label">Descripción del Asesor:</label>
                                    <textarea name="descrip" id="descrip"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>

                                </div>
                                <div class="custom-file mt-3">
                                    <label for="" class="custom-file-label">Subir la foto del asesor</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>

                                </div>
                                <input type="hidden" id="fecha" name="fecha">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" value="crear">Agregar asesor</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal lista de asesores-->
            <div class="modal fade" id="lista_asesores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal lista de asesores</h5>
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Daniel Solano</td>
                                        <td><a href="#editar_asesor" data-toggle="modal" data-target="#editar_asesor"><i style="color:black;" class="fas fa-edit"></i></a></td>
                                        <td><a href="#confirm-delete_Asesor" data-toggle="modal" data-target="#confirm-delete_Asesor"><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Daniel Solano</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Daniel Solano</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Daniel Solano</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Daniel Solano</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Daniel Solano</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Daniel Solano</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Daniel Solano</td>
                                        <td><a style="color:black" href=""><i class="fas fa-edit"></i></a></td>
                                        <td><a href=""><i style="color: black;" class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Publicar Asesor</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal de eliminar asesor -->
            <div class="modal fade" id="confirm-delete_Asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header modal_cabezera">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Asesor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal_cuerpo">
                            ¿Estas seguro de que quieres eliminar este asesor, recuerda que si lo eliminas no podra rehacer los cambios?
                            <br>

                        </div>
                        <div class="modal-footer modal_pie">
                            <button type="button" class="btn btn-secondary color_cancelar" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary color_aceptar btn-ok">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal de editar asesor -->
            <div class="modal fade" id="editar_asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modify Asesor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                    <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" placeholder="Nombre y apellido" required>
                                    <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular ó Teléfono:</label>
                                    <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" placeholder="Celular" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                    <input type="email" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar correos corporativos.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Cargo del Asesor:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                                    <small id="tituloHepl" class="form-text text-muted">Es importante llenar este campo.</small>
                                </div>
                                <div class="custom-file mb-5">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Descripcion:</label>
                                    <textarea name="descrip" id="descrip"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>

                                </div>
                                <div class="custom-file mt-3">
                                    <label for="" class="custom-file-label">Imagen Actual</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>

                                </div>
                                <input type="hidden" id="fecha" name="fecha">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal configuracion user-->
            <div class="modal fade" id="config" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal configuracion user</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <input type="hidden" name="id" value="<?php echo $usuario[0]; ?>">
                                <input type="hidden" name="usuario" value="<?php echo $usuario[1]; ?>">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Contraseña de Usuario:</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Mi contarseña">
                                    <!-- <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $usuario[2]; ?>" required> -->
                                    <small id="tituloHepl" class="form-text text-muted">Puede ingresar caracteres especiales @$#%&</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-form-label">Nombre de Usuario:</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción Corta">
                                    <small id="tituloHepl" class="form-text text-muted">Es un campo opcional</small>

                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Teléfono de Usuario:</label>
                                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
                                    <small id="tituloHepl" class="form-text text-muted"> Se recomienda agregar agregar solo numeros </small>
                                    <!-- <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $usuario[4]; ?>" required> -->
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Cargo de Usuario:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" placeholder="ejemplo: Administrador">
                                    <small id="tituloHepl" class="form-text text-muted"> Es un campo opcional</small>
                                    <!-- <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $usuario[5]; ?>" required> -->
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Dependencia:</label>
                                    <input type="text" class="form-control" name="dependencia" id="dependencia" placeholder="ejemplo: Área de Sistemas">
                                    <small id="tituloHepl" class="form-text text-muted"> Es un campo opcional </small>
                                    <!-- <input type="text" class="form-control" name="dependencia" id="dependencia" value="<?php echo $usuario[6]; ?>" required> -->
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Foto de perfil de Usuario:</label>
                                    <img width="70px" height="" src="img/no_image.png">
                                    <small id="tituloHepl" class="form-text text-muted">Esta es su foto de Usuario actualmente</small>
                                    <!-- <img width="70px" height="" src="<?php echo $usuario[7]; ?>"> -->
                                </div>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Subir una nueva foto de perfil</label>
                                    <input type="file" class="custom-file-input" name="archivo" id="archivo" accept="application/pdf">
                                    <small id="tituloHepl" class="form-text text-muted"> No se recomienda subir una foto que supere los 900 pixeles de Ancho por 500 pixeles </small>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Calcelar</button>
                            <button type="button" class="btn btn-primary">Actualizar Perfil</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de vista previa-->
            <div class="modal fade" id="vista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <h5>Vista previa de Asesores</h5>
                            <a href="#" role="button" class="btn btn btn-outline-dark">Ir a la publicaión</a>
                            <hr>
                            <h5>Vista previa de Publicaciones</h5>
                            <a href="#" role="button" class="btn btn-outline-dark">Ir a la publicaión</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>
<?php include('layout/archivosfooter.php'); ?>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor colorpicker'
        ],
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