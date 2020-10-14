<?php
require_once('conexion.php');


$id=$_REQUEST["id"];
$image=$_FILES["imagenAliado"]["name"];
$ruta=$_FILES["imagenAliado"]["tmp_name"];
$nombre_foto = str_replace(" ","",$image);
$destino="banner/".$nombre_foto;
$comparador_fotos="banner/";

// echo $id,$zona,$image,$ruta,$nombre_foto,$destino,$comparador_fotos;
// die();



    copy($ruta,$destino);
    $con2 = Conect();
    $qry2=("update imagenes SET imagen=? WHERE `imagenes`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($destino,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        
        echo  "<script language='javascript'>
        alert('Banner Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }



?>