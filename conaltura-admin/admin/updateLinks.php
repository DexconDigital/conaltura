<?php
require_once('conexion.php');

$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre_editlink"];
$link=$_REQUEST["link_editlink"];
$zona=$_REQUEST["zona_link_edit"];


$con2 = Conect();
$qry2=("update links SET nombre=?, link=?, zona=?  WHERE `links`.id=? ");
// $sql=mysqli_query($con,$qry);  
$resultado=$con2->prepare($qry2);
$resultado->execute(array($nombre,$link,$zona,$id));

if(!$resultado){
    echo 'No se logro actualizar';
}else{
    echo  "<script language='javascript'>
    alert('Link Modificado con Éxito');
     window.location.href='index.php'
  </script>";
}
