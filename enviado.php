<?php
$myemail = 'hola@frankcatamo.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];
$message = $_POST['telefono'];
$to = $myemail;
$subject="Enviado de la web";
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";
mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
