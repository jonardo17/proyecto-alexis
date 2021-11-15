<?php
    session_start();
	if(!isset($_SESSION['ide'])){        
		header("Location: index.php");
	}


	// if(!isset($_SESSION['ide'])){        
	// 	header("Location: index.php");
	// }else{
    //     if($_SESSION['tipo_usuario'] == 1){
    //         header("Location: principal.php");
    //     }else{
    //         header("Location: formb.php");
    //     }
    // }

?>