<?php
require_once('conexion.php');


$id=$_REQUEST["id"];
$titulo=$_REQUEST["nombre_textos"];
$descrip=$_REQUEST["nombre_texto_descrip"];
$zona=$_REQUEST["zona_solo_texto"];

// echo $id,$zona,$image,$ruta,$nombre_foto,$destino,$comparador_fotos;
// die();




    $con2 = Conect();
    $qry2=("update textos SET titulo=?, descripcion=?, zona=? WHERE `textos`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($titulo,$descrip,$zona,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        
        echo  "<script language='javascript'>
        alert('Texto Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }



?>