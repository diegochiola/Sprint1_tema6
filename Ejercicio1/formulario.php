<?php
//variables para que se guarden los datos del input del formulario
$nombre = $_POST['name'];
$usuario =$_POST['usuario'];
$email =$_POST['email'];
$textArea =$_POST['textArea'];

//imprimir por pantalla al dar al boton submit
/*
echo "Su nombre es: " . $nombre . ", el usuario es: " . $usuario . " <br>". 
    " El email ingresado es: ". $email . "  <br>".
    " El mensaje que $nombre dejo es: ". $textArea;
*/
//creo variable mensaje que incluya el mensaje que se imprimira por pantalla
$mensaje = "El formulario fue rellenado por: ".$nombre . " <br>" .
    "Con usuario: " . $usuario."  <br>".
    "El email es: ".$email . " <br>";
$mensaje .= "El mensaje que envio dice: ".$_POST['textArea']." <br>"; //el .= me permite seguir concatenando 
echo $mensaje;

//Redireccion cuando se rellena el form
//header('Location:mensaje.html');

?>