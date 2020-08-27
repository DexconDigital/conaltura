<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';

function activeCorreo()
{

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['correo'];
        $codigo = $_POST['codigo'];
        $mensaje = $_POST['mensaje'];
        

    }

    // Importante 
    require '../emailvalida/validacont.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();

        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        //acceso
        $mail->CharSet = 'UTF-8';
        $mail->Username = 'masivoinmobiliarias@gmail.com';
        $mail->Password = 'Dexc@n2020@';

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Mensaje para enviar

        $mail->isHTML(true);
        //Cabecera
        $mail->setFrom('Conaltura@ConalturaInmobiliaria.com', 'Conaltura@ConalturaInmobiliaria.com');
        //destinos

        // $mail->addAddress('wdsp9898@gmail.com');
        //  $mail->addAddress('desarrollo2@dexcondigital.com');
        $mail->AddCC($email,"Persona Interesada");
        


        $mail->Subject = 'Mensaje desde la página web Conaltura Inmobiliaria';
        $mail->Body = '<span>Hola, <strong>' . $nombre . '</strong> quiere contactarse con ustedes.</span>
                    <h4>Datos de contacto:</h4>
                    <ul>
                        <li>Correo: <strong>' . $email . '</strong></li>
                        <li>Teléfono: <strong>' . $telefono . '</strong></li>
                        <li>Códgio del inmueble: <strong>' . $codigo . '</strong></li>
                        <li>Mensaje: <strong>' . $mensaje . '</strong></li>
                    </ul>
    ';
        $mail->send();
        echo "
    <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../contactanos.php'</script>";
    } catch (Exception $e) {
        echo 'algo salio mal', $e->getMessage();
    }
}

require '../app/initcont.php';