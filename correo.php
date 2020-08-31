<?php

//Llamando a los campos y asignandoles a las variables
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destinatario = 'ejemplo@gmail.com';
$asunto = 'Contacto desde nuestra web';

$carta = "De : ".$nombre."\n";
//Para agregar se utiliza el ".="
$carta .= "Correo : ".$correo."\n";
$carta .= "Telefono : ".$telefono."\n";
$carta .= "Mensaje : ".$mensaje;

//Enviar mensaje
mail($destinatario, $asunto, $carta);
sleep(2);
header("Location:index.php");

?>