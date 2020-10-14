<?php
require_once('conexion.php');
$id = $_REQUEST["id"];
$titulo = $_REQUEST["titulo_Valores"];
$descripcion = $_REQUEST["descrip_Valores"];

$image = $_FILES["actualizaValoreimg"]["name"];
$ruta = $_FILES["actualizaValoreimg"]["tmp_name"];
$nombre_foto = str_replace(" ", "", $image);
$destino = "valores/" . $nombre_foto;
$comparador_fotos = "valores/";

// copy($ruta, $destino);

// No actualizar imagen
if ($destino == $comparador_fotos) {

    $con1 = Conect();
    $qry1 = "SELECT * FROM valores where id = ?";
    $resultado=$con1->prepare($qry1);
    $resultado->execute(array($id));
    $res =  $resultado->fetch(PDO::FETCH_ASSOC);
   $con = Conect();
    $qry = ("update valores set titulo= ?, descripcion=? where id=?");
    $resultado=$con->prepare($qry);
    $resultado->execute(array($titulo,$descripcion,$id));
    // $sql = mysqli_query($con, $qry);
    if (!$resultado) {
    } else {
        echo  "<script language='javascript'>
            alert('Valor Actualizado con Éxito');
            window.location.href='index.php'
        </script>";
        // die();
    }

    
}

// actualizar los dos campos
if ($destino != $comparador_fotos) {
    
    copy($ruta, $destino);

    $con3 = Conect();
    $qry3 = ("update valores set titulo=?, descripcion=?, imagen=? where id=?");
    $resultado=$con3->prepare($qry3);
    $resultado->execute(array($titulo,$descripcion,$destino,$id));
    // $sql = mysqli_query($con, $qry);

    if (!$resultado) {
        
        echo  "<script language='javascript'>
                alert('No se logro insertar');
                window.location.href='index.php'
            </script>";
    } else {
        
        echo  "<script language='javascript'>
                    alert('Valor Actualizado con Éxito');
                window.location.href='index.php'
              </script>";
        // die();
    }
}
