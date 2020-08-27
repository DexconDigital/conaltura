<?php
use ReCaptcha\ReCaptcha;
require_once '../variables/captcha.php';
$SecretK = Secret_Key;

 
$recaptcha  = new ReCaptcha($SecretK);
$response = $recaptcha->verify($_POST['g-recaptcha-response']);
if ($response->isSuccess()) {

    activeCorrDetalle();
} else {

    
    echo "<script>alert('¡Captcha Invalido! , Su mensaje no fue enviado.');window.location.href='../inmuebles.php?'</script>";
}

?>