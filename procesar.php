<?php

$destino = "rrodriguezalmada@gmail.com ";

$name = $_POST["name"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$header = "Envio desde formulario de contacto";
$mensajeCompleto = "\n Nombre :" . $name . "\n" . "Telefono :" . $telefono . "\n" . "Email :" . $email . "\n" . "Mensaje :" . $mensaje;
mail($destino, $header, $mensajeCompleto);

header('Location: index.html'); 



