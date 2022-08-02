<?php

$destinatario = 'milagrosrrr9@gmail.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "Enviado desde portfolio";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensaje, $header);
echo"<script>alert('Correo enviado')</script>";
echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";


?>
