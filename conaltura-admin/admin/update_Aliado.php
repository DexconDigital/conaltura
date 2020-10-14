<?php
require_once('conexion.php');


$id=$_REQUEST["id"];
$zona=$_REQUEST["nom_aliado_edit"];
$image=$_FILES["imagenAliado"]["name"];
$ruta=$_FILES["imagenAliado"]["tmp_name"];
$nombre_foto = str_replace(" ","",$image);
$destino="aliados/".$nombre_foto;
$comparador_fotos="aliados/";

// echo $id,$zona,$image,$ruta,$nombre_foto,$destino,$comparador_fotos;
// die();



    copy($ruta,$destino);
    $con2 = Conect();
    $qry2=("update aliados SET imagen=?, zona=?  WHERE `aliados`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($destino,$zona,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        echo  "<script language='javascript'>
        alert('Aliado Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }



?>