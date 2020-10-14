<?php
require_once('conexion.php');


$id=$_REQUEST["id"];
$nombre=$_REQUEST["nom_Servicio"];
$icono=$_REQUEST["icono_Servicio"];
$url=$_REQUEST["url_Servicio"];

// echo $id,$zona,$image,$ruta,$nombre_foto,$destino,$comparador_fotos;
// die();



if($icono != ''){
    $con2 = Conect();
    $qry2=("update servicio SET nom_servicio=?, icono=?, url=? WHERE `servicio`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($nombre,$icono,$url,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        
        echo  "<script language='javascript'>
        alert('Servicio Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }
}
if($icono == ''){
    $con2 = Conect();
    $qry2=("update servicio SET nom_servicio=?, url=? WHERE `servicio`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($nombre,$url,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        
        echo  "<script language='javascript'>
        alert('Servicio Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }
}

    



?>