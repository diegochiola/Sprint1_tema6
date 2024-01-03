<?php
//se inicia sesion
session_start();

//variables para que se guarden los datos del input del formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario =$_POST['usuario'];
    $password =$_POST['password'];
    $email =$_POST['email'];
    
}
//Guardo el nombre del usuario en la sesion
/*
$_SESSION['usuario'] = $usuario;
$_SESSION['password'] = $password;
$_SESSION['email'] = $email;
*/
$arrayDatos = array('usuario' => $usuario, 'password' => $password, 'email'=> $email);
$_SESSION['datos']= $arrayDatos;
echo "Gracias por iniciar sesion";
echo'<pre>';
var_dump($_SESSION['datos']) ;
echo '</pre>';

//Redireccion cuando se rellena el form
//header('Location:mensaje.html');


//Destruir la sesion despues de mostrar datos de sesion por pantalla
session_destroy();
exit;

?>