<?php
$mysqli = new mysqli('localhost','root','','conaltura_admin');
if($mysqli->connect_errno):
    echo "Error al conectarse con Mysql debiado al error" , $mysqli->connect_errno;
endif;
?>