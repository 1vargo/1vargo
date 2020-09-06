<?php
$destinatario = 'daraujo@coarsm.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];
$contenido = "nombre:" . $nombre . "\nemail: " . $correo . "\nasunto:" . $asunto . "\mensaje:" . $mensaje;

header("location:index.html");

mail($destinatario, $asunto , $mensajeCompleto,"contacto" ,$contenido);

$header = "eviado desde el sitio web VARGO";

echo"<script>alert('correo enviado exitosamente')</script>";
echo"<script> setTimeout(\"location.href='formulario.html'\",1000)</script>";

?>