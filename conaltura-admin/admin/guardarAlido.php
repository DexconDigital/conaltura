<?php
require_once 'conexion.php';

$fotoAlido=$_FILES["imagenAliado"]["name"];
$zona=$_POST["ZonaUbicacion"];
$ruta=$_FILES["imagenAliado"]["tmp_name"];
$nombre_fotoA = str_replace(" ","",$fotoAlido);
$destino="aliados/".$nombre_fotoA;

// echo $fotoAlido.'<br>'.$zona.'<br>'.$nombre_fotoA.'<br>'.$destino;
// die();
    $con = Conect();
    




$con = Conect();
    copy($ruta,$destino);

   
        $pdoQuery = "INSERT INTO `aliados` (`imagen`, `zona`) VALUES (:imagen, :zona)";
        $pdoResult = $con->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(':imagen'=>$destino, ':zona'=>$zona));
        // die();
        echo  "<script language='javascript'>
        alert('Aliado Agregado Con Éxito');
        window.location.href='index.php'
        </script>";
        
