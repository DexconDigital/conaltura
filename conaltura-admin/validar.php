<?php 
require './conexion2.php';
$id_inmobiliaria = 0 ;
sleep(2);
$usuarios = $mysqli->query("SELECT id_user
FROM usuarios WHERE id_user = '$id_inmobiliaria' AND usuario = '".$_POST['usuariolg']."' 
AND password = '".$_POST['passlg']."'");
if($usuarios->num_rows == 1):
    $datos = $usuarios->fetch_assoc();
    echo json_encode(array('error' => false, 'tipo' => $datos['id_user']));
    
else:
    echo json_encode(array('error' => true));
endif;
$mysqli->close();
?>

