
<?php
require_once 'conexion.php';

$nom_asesor = $_REQUEST["nom_asesor"];
$cel_asesor = $_REQUEST["cel_asesor"];
$cor_asesor = $_POST["cor_asesor"];
$extension = $_POST["exten"];
$image = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ", "", $image);
$destino = "asesores/" . $nombre_foto;
$fecha = $_REQUEST["fecha"];
$fecha = date("Y-m-d");
$cargo = $_REQUEST["cargo"];
// $descrip = $_REQUEST["descrip"];
$tel_asesor = $_REQUEST["tel_asesor"];
$wapp_asesor = $_REQUEST["wapp_asesor"];
// $id_inmo = 15;
//  echo $nom_asesor, '', $cel_asesor, '',$tel_asesor,'', $cor_asesor ,'',$image ,'',$ruta ,'', $nombre_foto ,'', $destino ,'',$fecha, '',$cargo, '',$id_inmo;
//  die();

$con = Conect();
copy($ruta, $destino);
$pdoQuery = "INSERT INTO `asesores` (`nombre`, `telefono` , `exten`, `telefonop`, `wapp`, `correo`, `imagen`,`fecha`,`cargo`) VALUES (:nombre, :telefono, :exten, :telefonop, :wapp, :correo, :imagen, :fecha, :cargo)";
$pdoResult = $con->prepare($pdoQuery);
$pdoExec = $pdoResult->execute(array(':nombre'=>$nom_asesor, ':telefono'=>$cel_asesor , ':exten'=>$extension, ':telefonop'=>$tel_asesor, ':wapp'=>$wapp_asesor, ':correo'=>$cor_asesor,':imagen'=>$destino, ':fecha'=>$fecha, ':cargo'=>$cargo));
echo  "<script language='javascript'>
    alert('Asesor Agregado Con Éxito');
    window.location.href='index.php'
    </script>";




?>