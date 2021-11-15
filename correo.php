<?php

//se verifica que si el boton enviar es precionado si hace un if 
if(isset($_POST['enviar'])){

        echo "Enviando correo";
        if(!empty($_POST['in-nombre'])  && !empty($_POST['in-email']) && !empty($_POST['in-comentarios']) ){

            //se crean las variables 
            $nombre = $_POST['in-nombre'];
            //$telefono = $_POST['telefono'];
            //$edad = $_POST['edad'];
            $email = $_POST['in-email'];
            //$informacion = $_POST['informacion'];
            $comentarios = $_POST['in-comentarios'];
            
            //se establece para quien lo manda se hace una replica
            $header = "From: nofx_96@hotmail.com" . "\r\n";
            $header.= "Reply-To: nofx_96@hotmail.com" . "\r\n";
            $header.= "X-Mailer PHP/" . phpversion();
        
            //se toma el email y los datos del formulario
            $mail= @mail($email,$comentarios,$header);
        
            //entra en otro if donde si la variable email se establecio correctamente, se mandan los datos 
                if($mail){
                    echo "<script>alert('Correo enviado')</script>";
                    //echo"<h4>MI TRABAJO AQUI HA TERMINADO</h4> ";
                    header("Location: formb.php");
        
                }else{
                    echo "<script>alert('Correo no enviado')</script>";
                    header("Location: formb.php");
                }
        
        
            }else{
                var_dump($_POST['in-nombre']);
                var_dump($_POST['in-email']);
                var_dump($_POST['in-comentarios']);
                echo "<script>alert('Campos incompletos')</script>";
                header("Locarion: formb.php");
            }
        

}




?>