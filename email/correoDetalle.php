<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';

function activeCorrDetalle()
{

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['correo'];
        $codigo = $_POST['codigo'];
        $emailAsesor = $_POST['corrasesor'];
        $nom_asesor = $_POST['nom_asesor'];
        $mensaje = $_POST['mensaje'];
    }

    
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
        // $mail->addAddress($emailAsesor);
        $mail->AddCC($email, "Persona Interesada");



        $mail->Subject = 'Mensaje desde la página web Conaltura Inmobiliaria';
        $mail->Body = '<span>Hola <strong>' . $nom_asesor . '</strong> , <strong>' . $nombre . '</strong> quiere recibir información sobre el inmueble con código: <strong>' . $codigo . '</strong>.</span>
        <h4>Sus datos de contacto son:</h4>
        <ul>
            <li>Nombre: <strong>' . $nombre . '</strong></li>
            <li>Correo: <strong>' . $email . '</strong></li>
            <li>Teléfono: <strong>' . $telefono . '</strong></li>
            <li>Mensaje: <strong>' . $mensaje . '</strong></li>
            <li>Nombre Asesor: <strong>' . $nom_asesor . '</strong></li>
            <li>Correo Asesor: <strong>' . $emailAsesor. '</strong></li>
        </ul>
      ';
        $mail->send();
        echo "
    <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../inmuebles.php?'</script>";
    } catch (Exception $e) {
        echo 'algo salio mal', $e->getMessage();
    }
}

require '../app/initdetalle.php';
