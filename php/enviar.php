<?php

//Llamando a los campos
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$subject = $_POST['subject'];

//Datos para el correo
$destinatario = "grlalejandra95@gmail.com";
$asunto = "Contácto desde mi página web";

$mensaje = "De: $nombre \n";
$mensaje.="Email: $email \n";
$mensaje.="Teléfono: $tel \n";
$mensaje.="Mensaje: $subject";

//Enviando mensaje
mail($destinatario, $asunto, $mensaje);
header('Location:../html/mensaje-enviado.html');
?>

