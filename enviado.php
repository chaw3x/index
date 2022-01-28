<?php
$myemail = 'hola@frankcatamo.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];
$telefono = $_POST['telefono'];
$to = $myemail;
$subject="Enviado de la web";
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n $telefono \n Mensaje: \n $message";
$headers = "From: $email";
mail($to, $email_subject, $email_body, $headers);
$datos = array('success' => true);
echo json_encode($datos);
?>
