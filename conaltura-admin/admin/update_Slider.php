<?php
require_once('conexion.php');


$id = $_REQUEST["id"];
$ubicacion = $_REQUEST["Ubicacion_img"];
$image = $_FILES["primera_img"]["name"];
$ruta = $_FILES["primera_img"]["tmp_name"];
$nombre_foto = str_replace(" ", "", $image);
$destino = "slider/" . $nombre_foto;
$comparador_fotos = "slider/";

// echo $id,$textS,$ubicacion,$destino,$comparador_fotos;
// die();




    // echo "Se actualiza la iamgen";
    copy($ruta, $destino);
    $con2 = Conect();
    $qry2 = ("update slider SET  ruta_imagen=?, alt_imagen=? WHERE `slider`.id=? ");
    // $sql=mysqli_query($con,$qry);  
    $resultado = $con2->prepare($qry2);
    $resultado->execute(array($destino, $ubicacion, $id));

    if (!$resultado) {
        echo 'No se logro actualizar';
    } else {

        echo  "<script language='javascript'>
      alert('Imagen Modificado con Éxito');
       window.location.href='index.php'
    </script>";
    }