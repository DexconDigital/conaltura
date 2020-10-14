<?php
require_once('conexion.php');


$id=$_REQUEST["id"];
$texto=$_REQUEST["titulo_textosS"];
// $orden=$_REQUEST["Ubicion_textoS"];

    $con2 = Conect();
    $qry2=("update texto_slider SET texto_slider=? WHERE `texto_slider`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($texto,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        
        echo  "<script language='javascript'>
        alert('Texto Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }



?>