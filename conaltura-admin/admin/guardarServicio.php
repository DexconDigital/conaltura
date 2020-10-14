<?php
require_once 'conexion.php';


$nombre=$_POST["Nom_Servi"];
$icono=$_POST["Icono_Servi"];
$url=$_POST["Url_Servi"];


// echo $fotoAlido.'<br>'.$zona.'<br>'.$nombre_fotoA.'<br>'.$destino;
// die();
    $con = Conect();
    




$con = Conect();
    

   
        $pdoQuery = "INSERT INTO `servicio` (`nom_servicio`, `icono`, `url`) VALUES (:nom_servicio, :icono, :url)";
        $pdoResult = $con->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(':nom_servicio'=>$nombre, ':icono'=>$icono, ':url'=>$url));
        // die();
        echo  "<script language='javascript'>
        alert('Servicio Agregado Con Éxito');
        window.location.href='index.php'
        </script>";
        
