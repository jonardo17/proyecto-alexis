<?php

include("conexion.php");

$id=$_GET['Website'];

$sql= "DELETE FROM darsis WHERE  Website='$id'";

$elimina= mysqli_query($mysqli,$sql);


if($elimina){

    echo "<script> alert('Registro Exitoso') </script>";
    header("location:borra.php");
}else{
    echo "<script> alert('Error') </script>";
}








?>