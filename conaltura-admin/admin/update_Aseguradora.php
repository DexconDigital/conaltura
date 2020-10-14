<?php
require_once('conexion.php');
$id = $_REQUEST["id"];
$nombre = $_REQUEST["nombre_editAseguradora"];
$nombre_ar = $_FILES['archivo_Aseguradora']['name'];
$limite_kb = 850;
$tipo = $_FILES['archivo_Aseguradora']['type'];
$tamanio = $_FILES['archivo_Aseguradora']['size'];
$rutas = $_FILES['archivo_Aseguradora']['tmp_name'];
$nombre_archivo = str_replace(" ", "-", $nombre_ar);
$destinos = "archivo/" . $nombre_archivo;
$comparador_archivo = "archivo/";
if ($tamanio <= $limite_kb * 1024) {
    $nombre_archivo = str_replace(" ", "", $nombre_ar);
    $destinos = "archivo/" . $nombre_archivo;
} else {
    echo "Archivo demaciado Grande";
}

// No actualizar archivos 
if ($destinos == $comparador_archivo) {

    $con1 = Conect();
    $qry1 = "SELECT * FROM noticias where id = ?";
    $resultado=$con1->prepare($qry1);
    $resultado->execute(array($id));
    // $sql1 = mysqli_query($con1, $qry1);
    // $res =  mysqli_fetch_array($sql1);
    $res =  $resultado->fetch(PDO::FETCH_ASSOC);
   $con = Conect();
    $qry = ("update aseguradoras set nombre= ? where id=?");
    $resultado=$con->prepare($qry);
    $resultado->execute(array($nombre,$id));
    // $sql = mysqli_query($con, $qry);
    if (!$resultado) {
    } else {
        echo  "<script language='javascript'>
            alert('Aseguradora Actualizada con exito');
            window.location.href='index.php'
        </script>";
        // die();
    }

    
}

// actualizar los dos campos
if ($destinos != $comparador_archivo) {
    copy($rutas, $destinos);

    $con3 = Conect();
    $qry3 = ("update aseguradoras set nombre=?, archivo=? where id=?");
    $resultado=$con3->prepare($qry3);
    $resultado->execute(array($nombre,$destinos,$id));
    // $sql = mysqli_query($con, $qry);

    if (!$resultado) {
        
        echo  "<script language='javascript'>
                alert('No se logro insertar');
                window.location.href='index.php'
            </script>";
    } else {
        
        echo  "<script language='javascript'>
                    alert('Aseguradora Actualizada con exito');
                window.location.href='index.php'
              </script>";
        // die();
    }
}
