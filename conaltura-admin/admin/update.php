<?php
require_once('conexion.php');
$id = $_REQUEST["id"];
$nombre = $_REQUEST["nom_edit"];
// $descripcion = $_REQUEST["descrip_edit"];
$noticia = $_REQUEST["noticia_edit"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ", "", $foto);
$destino = "fotos/" . $nombre_foto;
$comparador_fotos = "fotos/";


$nombre_ar = $_FILES['archivo_edit']['name'];
$limite_kb = 850;
$tipo = $_FILES['archivo_edit']['type'];
$tamanio = $_FILES['archivo_edit']['size'];
$rutas = $_FILES['archivo_edit']['tmp_name'];
$nombre_archivo = str_replace(" ", "-", $nombre_ar);
$destinos = "archivo/" . $nombre_archivo;
$comparador_archivo = "archivo/";
if ($tamanio <= $limite_kb * 1024) {
    $nombre_archivo = str_replace(" ", "", $nombre_ar);
    $destinos = "archivo/" . $nombre_archivo;
} else {
    echo "Archivo demaciado Grande";
}


// No actualizar ni archivos ni imagenes
if ($destino == $comparador_fotos && $destinos == $comparador_archivo) {
    $con1 = Conect();
    $qry1 = "SELECT * FROM noticias where id = ?";
    $resultado=$con1->prepare($qry1);
    $resultado->execute(array($id));
    // $sql1 = mysqli_query($con1, $qry1);
    // $res =  mysqli_fetch_array($sql1);
    $res =  $resultado->fetch(PDO::FETCH_ASSOC);
    $destino = $res["imagen"];
    $con = Conect();
    $qry = ("update noticias set nombre= ?, noticia=? where id=?");
    $resultado=$con->prepare($qry);
    $resultado->execute(array($nombre,$noticia,$id));
    // $sql = mysqli_query($con, $qry);
    if (!$resultado) {
    } else {
        echo  "<script language='javascript'>
            alert('Se inserto con exito');
            window.location.href='index.php'
        </script>";
        // die();
    }

    // actualizar fotos pero no archivo
}
if ($destino != $comparador_fotos && $destinos == $comparador_archivo) {
    copy($ruta, $destino);
    $con2 = Conect();
    $qry2 = ("update noticias set nombre=?,imagen=?, noticia=? where id=?");
    $resultado=$con2->prepare($qry2);
    $resultado->execute(array($nombre,$destino,$noticia,$id));
    // $sql = mysqli_query($con, $qry);

    if (!$resultado) {
        
        echo  "<script language='javascript'>
                    alert('No se logro insertar Imagen');
                // window.location.href='index.php'
              </script>";
    } else {
      
        echo  "<script language='javascript'>
                    alert('Se inserto con exito');
                window.location.href='index.php'
              </script>";
        // die();
    }
    
}

// actualizar archivo pero no imagen
if ($destino == $comparador_fotos && $destinos != $comparador_archivo) {
    copy($rutas, $destinos);

    $con3 = Conect();
    $qry3 = ("update noticias set nombre=?, archivo=?,noticia=? where id=?");
    $resultado=$con3->prepare($qry3);
    $resultado->execute(array($nombre,$destinos,$noticia,$id));
    // $sql = mysqli_query($con, $qry);

    if (!$resultado) {
        
        echo  "<script language='javascript'>
                alert('No se logro insertar');
                window.location.href='index.php'
            </script>";
    } else {
        
        echo  "<script language='javascript'>
                    alert('Se inserto con exito');
                window.location.href='index.php'
              </script>";
        // die();
    }
}
// actualizar  ambas cosas
if ($destino != $comparador_fotos && $destinos != $comparador_archivo) {
    copy($rutas, $destinos);
    copy($ruta, $destino); 
    $con4 = Conect();
    $qry4 = ("UPDATE `noticias` SET nombre=?,noticia=?, imagen = ?, archivo = ? WHERE id = ?");
    $resultado=$con4->prepare($qry4);
    $resultado->execute(array($nombre,$noticia,$destino,$destinos,$id));
    // $sql = mysqli_query($con, $qry);
    if (!$resultado) {
        echo  "<script language='javascript'>
                alert('No se logro insertar');
                window.location.href='index.php'
            </script>";
    } else {
        
        echo 'se actualiza todo';
        echo  "<script language='javascript'>
            alert('Se inserto con exito');
            window.location.href='index.php'
            </script>";
        // die();

    }
}
