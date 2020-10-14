<?php
require_once('conexion.php');

$id=$_REQUEST["id"];
$usuario=$_REQUEST["usuario"];
$pass=$_REQUEST["pass"];
// $nombre=$_REQUEST["nombre"];
// $telefono=$_REQUEST["telefono"];
// $cargo=$_REQUEST["cargo"];
// $dependencia=$_REQUEST["dependencia"];
// $foto=$_FILES["imagen"]["name"];
// $ruta=$_FILES["imagen"]["tmp_name"];
// $destino="images/".$foto;
// $comparador="images/";

// echo $id, $usuario,$pass;
// die();
    $con = Conect();
    
    //  $qry=mysqli_query($con,"UPDATE `usuarios` SET `usuario` = '$usuario', `password` = '$pass',  WHERE `usuarios`.`id_user` = $id;");
     $qry8= ("UPDATE `usuarios` SET `usuario` = ?, `password` = ? WHERE `usuarios`.`id_user` = ?");
     $resultado=$con->prepare($qry8);
     $resultado->execute(array($usuario,$pass,$id));
    //  echo var_dump($resultado);
    //  die();
        header("Location: index.php");
    // }else{
    //     copy($ruta,$destino);
    //     $qry=mysqli_query($con,"UPDATE `usuarios` SET `usuario` = '$usuario', `password` = '$pass', `nombre` = '$nombre', `telefono` = '$telefono', `cargo` = '$cargo', `dependencia` = '$dependencia', `imagen` = '$destino' WHERE `usuarios`.`id_user` = $id;");
    //     header("Location: index.php");
    // }
?>