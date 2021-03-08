<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$header = 'Página de CarolineSpa From: ' . $email . "\r\n";
$header .= 'X.Mailer: PHP/' . phpversion() . "\r\n";
$header .= 'Mime-Version: 1.0 "\r\n"';
$header .= 'Content-Type: text/plain';
$mensajeCorreo = "this message was sent by: " . $nombre . "\r\n";
$mensajeCorreo = "Email: " . $email . "\r\n";
$mensajeCorreo = "mensaje: " . $mensaje . "\r\n";
$para = "estefano.jesus6@gmail.com";
$asunto = "Contacto de sitio web";
$respuesta = mail($para, $asunto, utf8_encode($mensajeCorreo), $header );

echo json_encode(array(
    'mensaje' => sprintf('El mensaje se ha enviado!'),
    'datos' => array(
        'nombre' => $nombre,
        'email' => $email,
        'mensaje' => $mensaje
    )
));