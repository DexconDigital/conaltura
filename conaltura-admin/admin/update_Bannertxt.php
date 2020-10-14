<?php
require_once('conexion.php');


$id=$_REQUEST["id"];
$titulo=$_REQUEST["titulo_bannerindex"];
$image=$_FILES["imagenBannertxt"]["name"];
$ruta=$_FILES["imagenBannertxt"]["tmp_name"];
$nombre_foto = str_replace(" ","",$image);
$destino="banner/".$nombre_foto;
$comparador_fotos="banner/";


if($destino != $comparador_fotos){
    
    copy($ruta,$destino);
    $con2 = Conect();
    $qry2=("update banner_text SET titulo=?, imagen_url=? WHERE `banner_text`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($titulo,$destino,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        
        echo  "<script language='javascript'>
        alert('Banner Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }
}

if($destino == $comparador_fotos){
    $con2 = Conect();
    $qry2=("update banner_text SET titulo=? WHERE `banner_text`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($titulo,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        
        echo  "<script language='javascript'>
        alert('Banner Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }
}


?>