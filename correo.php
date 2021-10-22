<?php

//se verifica que si el boton enviar es precionado si hace un if 
if(isset($_POST['enviar'])){

    //verifica cada campo este este lleno 
if(!empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['edad']) && !empty($_POST['email'])
&& !empty($_POST['informacion']) ){

//se crean las variables 
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$informacion = $_POST['informacion'];

//se establece para quien lo manda se hace una replica
$header = "From: antoniohg158@gmail.com" . "\r\n";
$header.= "Reply-To: antoniohg158@gmail.com" . "\r\n";
$header.= "X-Mailer PHP/" . phpversion();

//se toma el email y los datos del formulario
$mail= @mail($email,$informacion,$header);

//entra en otro if donde si la variable email se establecio correctamente, se mandan los datos 
if($mail){

    echo"<h4>MI TRABAJO AQUI HA TERMINADO</h4> ";

}


}


}



?>