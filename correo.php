<?php
$destino = 'ramonantonio29970476@gmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = 'Enviado desde el portafolio';

$mensajeCompleto = $mensaje . "\nAtentamente" . $nombre;

mail($destino, $asunto, $mensajeCompleto, $header);

echo "<script>alert('correo enviado')</script>";
echo "<script> setTimeout(\"location.href='index.html'\"1000) </script>";

?>