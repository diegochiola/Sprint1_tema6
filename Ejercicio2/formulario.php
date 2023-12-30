<?php
//se inicia sesion
session_start();

//variables para que se guarden los datos del input del formulario
if($_SERVER["REQUEST_METOD"] == "POST"){
    $nombre = $_POST['name'];
    $usuario =$_POST['usuario'];
    $email =$_POST['email'];
    $textArea =$_POST['textArea'];
}
//Guardo el nombre del usuario en la sesion
$_SESSION["usuario"] = $usuario;

//creo variable mensaje que incluya el mensaje que se imprimira por pantalla
$mensaje = "El formulario fue rellenado por: ".$nombre . " <br>" .
    "Con usuario: " . $usuario."  <br>".
    "El email es: ".$email . " <br>";
$mensaje .= "El mensaje que envio dice: ".$_POST['textArea']." <br>"; //el .= me permite seguir concatenando 
echo $mensaje;

//Redireccion cuando se rellena el form
//header('Location:mensaje.html');
exit();
?>