<?php 

require("admin/conexion.php");

$con=conect();
// $con2=conect();
// var_dump($con);
// var_dump($con2);
// die();
// $id_inmobiliaria = 17;

// $qry="SELECT * FROM usuarios WHERE  id_inmobiliaria1 = '$id_inmobiliaria'";
$qry="SELECT * FROM usuarios WHERE  id_user = ?";
$resultado=$con->prepare($qry);
$resultado->execute(array('0'));

// $sql=mysqli_query($con,$qry);


// $row = mysqli_fetch_row($sql);
$row = $resultado->fetch(PDO::FETCH_ASSOC);
// var_dump($row);
// die();
// if (mysqli_num_rows($resultado) > 0) {
if ($resultado->rowCount() > 0) {
    // output data of each row
    session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] =  $row['id_user']; 
    //  echo $row['id_user'];
    //  die();
      //nombre del usuario logueado. 
      //Direccionamos a nuestra página principal del sistema. 

} 

?>