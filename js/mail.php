<?php
if (isset($_POST['email'])) {

	$nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $codigo = $_POST['codigo'];
    $mensaje = $_POST['mensaje'];
    
	$email_from = "no-reply@conalturainmobiliaria.com";
	$email_to = "inmobiliaria@conaltura.com";
	$asunto = "Correo desde la Web de Conaltura";
	
	$email_fromcliente = "no-reply@conalturainmobiliaria.com";
	$email_tocliente = $email;
	$asuntocliente = "Correo desde la Web de Conaltura";


	$message = '<html>'.
	'<head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">'.
	'<title>Correo desde la Web de Conaltura</title>'.
	'</head>'.
	'<body>'.
	'<p>Este correo se ha inscrito desde la Web de Conaltura:</p>'.
        '<p>'.'Nombre: ' . $nombre .'</p>'.
        '<p>'.'Telefono: ' . $telefono .'</p>'.
        '<p>'.'Email : ' . $email . '</p>'.
        '<p>'.'Codigo del Inmueble : ' . $codigo . '</p>'.
         '<p>'.'Mensaje : ' . $mensaje .'</p>'.
	'</body>'.
	'</html>';
	
	$messagecliente = '<html>'.
	'<head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">'.
	'<title>Correo desde la Web de Conaltura</title>'.
	'</head>'.
	'<body>'.
	'<p>Este correo es para confirmar que se ha enviado su correo desde la pagina de Conaltura</p>'.
	'</body>'.
	'</html>';
	
	// create email headers
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'Reply-To:'. $email_from . "\r\n" .
			'From:' . $email_from . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	$email = @mail($email_to, $asunto, wordwrap($message), $headers);
	$headerscliente .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'Reply-To:'. $email_fromcliente . "\r\n" .
			'From:' . $email_fromcliente . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	$email = @mail($email_tocliente, $asuntocliente, wordwrap($messagecliente), $headerscliente);
	if ($email) {
			echo 1;
	} else {
			echo 2;
	}
} else {
	echo 2;
}
?>