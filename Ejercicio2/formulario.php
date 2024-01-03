<?php
//se inicia sesion
session_start();

//variables para que se guarden los datos del input del formulario
if($_SERVER["REQUEST_METOD"] == "POST"){
    $usuario =$_POST['usuario'];
    $password =$_POST['password'];
    $email =$_POST['email'];
    
}
//Guardo el nombre del usuario en la sesion
$_SESSION["usuario"] = $usuario;

//creo variable mensaje que incluya el mensaje que se imprimira por pantalla
$mensaje = "La sesion fue iniciada por el usuario: ".$usuario . " <br>" .
    "Con el password: " . $password."  <br>".
    "El email: ".$email . " <br>";
echo $mensaje;

//Redireccion cuando se rellena el form
//header('Location:mensaje.html');
exit();
?>