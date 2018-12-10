<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$tel = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = 'From' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por " . $nombre . ", con dirección de correo " . $mail . " y teléfono " . $tel . ".\r\n";
$message .= "Asunto del mensaje: " . $asunto . "\r\n";
$message .= "Enviado el " . date('d/m/Y', time());

$para = 'arubiocastellano@gmail.com';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
	echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
	echo "<script type='tect/javascript'>window.location.href='https://www.google.com';</script>";
?>