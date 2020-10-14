<?php
require_once 'conexion.php';

$nombre = $_POST["nombre_Aseguradora"];
$nombre_ar = $_FILES['archivo_aseguradora']['name'];

$limite_kb = 2;
if ($nombre_ar != "") {
    $tipo = $_FILES['archivo_aseguradora']['type'];
    $tamanio = $_FILES['archivo_aseguradora']['size'];
    $rutas = $_FILES['archivo_aseguradora']['tmp_name'];
    $nombre_archivo = str_replace(" ", "", $nombre_ar);
    $destinos = "archivo/" . $nombre_archivo;
    if ($tamanio <= $limite_kb * 1024) {
        $nombre_archivo = str_replace(" ", "", $nombre_ar);
        $destinos = "archivo/" . $nombre_archivo;
    } else {
        echo "";
    }
    $con = Conect();
    copy($rutas, $destinos);
}

$con = Conect();

$pdoQuery = "INSERT INTO `aseguradoras` (`nombre`, `archivo`) VALUES (:nombre, :archivo)";
$pdoResult = $con->prepare($pdoQuery);
$pdoExec = $pdoResult->execute(array(':nombre' => $nombre, ':archivo' => $destinos));
echo  "<script language='javascript'>
        alert('Aseguradora Agregada Con Éxito');
        window.location.href='index.php'
        </script>";
