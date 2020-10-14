<?php
require_once('conexion.php');


$id=$_REQUEST["id"];
$nom_asesor=$_REQUEST["nom_asesor_edit"];
$cel_asesor=$_REQUEST["cel_asesor"];
$cor_asesor= $_POST["cor_asesor"];
$extension = $_POST["tel_exten_edit"];
$image=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$image);
$destino="asesores/".$nombre_foto;
$comparador_fotos="asesores/";
$cargo=$_REQUEST["cargo"];
$wapp_asesor=$_REQUEST["wapp_asesor"];
$wappdos_asesor=$_REQUEST["wappdos_asesor"];
// $descrip=$_REQUEST ["descrip"];

// echo $nom_asesor,$cel_asesor,$cor_asesor,$destino,$cargo,$wapp_asesor;
// die();

// No actualizar ni archivos ni noticias
if($destino == $comparador_fotos){
    $con = Conect();
    $qry = "SELECT * FROM asesores where id = ?";
    $resultado=$con->prepare($qry);
    $resultado->execute(array($id));
    $res =  $resultado->fetch(PDO::FETCH_ASSOC);
    $destino = $res["imagen"];
    $con = Conect();
    $qry=("update asesores SET nombre=?, telefono=?, exten=?, telefonop=?, wapp=?, correo=?, cargo=? where  `asesores`.id=? ");
    // $sql=mysqli_query($con,$qry);
    $resultado=$con->prepare($qry);
    $resultado->execute(array($nom_asesor,$cel_asesor,$extension,$wapp_asesor,$wappdos_asesor,$cor_asesor,$cargo,$id));
        if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        // die();
       echo  "<script language='javascript'>
        alert('Asesor Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }
    // actualizar fotos pero no archivo
}
if($destino != $comparador_fotos){
    copy($ruta,$destino);
    $con2 = Conect();
    $qry2=("update asesores SET nombre=?, telefono=?, exten=?, telefonop=?, wapp=?, correo=?, imagen=?, cargo=? WHERE `asesores`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($nom_asesor,$cel_asesor,$extension,$wapp_asesor,$wappdos_asesor,$cor_asesor,$destino,$cargo,$id));

    if(!$resultado){
        echo 'No se logro actualizar';
    }else{
        // die();
        echo  "<script language='javascript'>
        alert('Asesor Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }
}


?>