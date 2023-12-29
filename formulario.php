<?php
//variables para que se guarden los datos del imput del formulario
$nombre = $_POST['name'];
$usuario =$_POST['usuario'];
$email =$_POST['email'];
$textArea =$_POST['textArea'];


//elegimos como llega la informacion
$mensaje = "El formulario fue rellenado por: ".$nombre . " \r\n" .
    "Con nombre de usuario: " . $usuario." \r\n".
    "El email es: ".$email . ",\r\n";
$mensaje .= "El mensaje que envio dice: ".$_POST['textArea']."\r\n";

//Redireccion cuando se rellena el form
header('Location:mensaje.html');

?>