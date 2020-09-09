<?php
$destino = 'vargo.jav@gmail.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];
$contenido = "nombre: " . $nombre . "\nemail: " . $email . "\nasunto: " . $asunto . "\nmensaje: " . $mensaje;

mail($destino,"contacto" ,$contenido);

header("location:index.html");

$header = "eviado desde el sitio web VARGO";

echo"<script>alert('correo enviado exitosamente')</script>";
echo"<script> setTimeout(\"location.href='formulario.html'\",1000)</script>";

?>
