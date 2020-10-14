<?php
require_once 'conexion.php';

$nombre=$_POST["titulo"];
// $descripcion=$_POST["descripcion"];
$fecha=$_POST["fecha"];
$noticia= $_POST["noticia"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$fecha = date("d M Y");
// $id_inmo = 17;
$nombre_ar = $_FILES['archivo']['name'];

$limite_kb = 2;
if($nombre_ar != ""){
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $rutas = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = str_replace(" ","",$nombre_ar);
    $destinos="archivo/".$nombre_archivo; 
    if($tamanio <= $limite_kb * 1024){
        $nombre_archivo = str_replace(" ","",$nombre_ar);
        $destinos="archivo/".$nombre_archivo; 
    }else{
        echo "";
    }
    $con = Conect();
    copy($rutas,$destinos);
}



$con = Conect();
    copy($ruta,$destino);

    if($nombre_ar!=""){
        $pdoQuery = "INSERT INTO `noticias` (`nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`) VALUES (:nombre, :descripcion, :imagen, :archivo, :noticia, :fecha)";
        $pdoResult = $con->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(':nombre'=>$nombre, ':descripcion'=>'', ':imagen'=>$destino, ':archivo'=>$destinos, ':noticia'=>$noticia, ':fecha'=>$fecha));
        
        // $pdoResult->execute(array(":id"=>NULL,":nombre"=>$nombre,":descripcion"=>$descripcion,":destino"=>$destino,":destinos"=>$destinos,"",":noticia"=>$noticia,":fecha"=>$fecha,":video_url"=>'',":instagram_url"=>'',":id_inmo"=>$id_inmo));
        // mysqli_query($con, "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `video_url`, `instagram_url`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$destino', '$destinos', '$noticia', '$fecha', '', '', $id_inmo)");
        echo  "<script language='javascript'>
        alert('Publicación Agregada Con Éxito');
        window.location.href='index.php'
        </script>";
            
    }else{
        $pdoQuery = "INSERT INTO `noticias` (`nombre`, `descripcion`, `imagen`, `noticia`, `fecha`) VALUES (:nombre, :descripcion, :imagen, :noticia, :fecha)";
        $pdoResult = $con->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(':nombre'=>$nombre, ':descripcion'=>'', ':imagen'=>$destino, ':noticia'=>$noticia, ':fecha'=>$fecha,));
        // mysqli_query($con, "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `video_url`, `instagram_url`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$destino', '', '$noticia', '$fecha', '', '', $id_inmo)");
        echo  "<script language='javascript'>
        alert('Publicación Agregada Con Éxito');
        window.location.href='index.php'
        </script>";
    }
