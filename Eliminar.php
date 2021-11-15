<?php

include("conexion.php");
require "checkLogin.php";
$delete=$_GET['Website'];

$sql= "DELETE FROM darsis WHERE  Website='$delete'";

$elimina= mysqli_query($mysqli,$sql);

if($elimina){

    echo "<script> alert ('Eliminacion Exitosa') </script>";
echo "<script>window.location='principal.php';</script>";
}else{
    echo "<script> alert('Error No se pudo Eliminar') </script>";
    echo "<script>window.location='principal.php';</script>";
    
}


?>