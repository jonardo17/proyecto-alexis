<?php
include ("conexion.php");
$Website = $_POST["Website"];
$Hosting = $_POST["Hosting"];
$HostingVence = $_POST["HostingVence"];
$Dominio = $_POST["Dominio"];
$DominioVence = $_POST["DominioVence"];
$Nombre = $_POST["Nombre"];
$Email = $_POST["Email"];
$Telefono = $_POST["Telefono"];
$Ciudad = $_POST["Ciudad"];
$Status = $_POST["Status"];
$SSL = $_POST["SSL"];
$Proveedor = $_POST["Proveedor"];

$insertar = "INSERT INTO darsis (Website,Hosting,Hosting_Vence,Dominio, DominioVence,Nombre, Email, Telefono, Ciudad ,Statuss, S_SL,Proveedor)
VALUES ('$Website', '$Hosting','$HostingVence','$Dominio','$DominioVence','$Nombre','$Email','$Telefono','$Ciudad','$Status','$SSL','$Proveedor')";

$resultado = mysqli_query($mysqli,$insertar);

if($resultado){

echo "<script> alert ('Registro Exitoso') </script>";


}else {
    echo "<script> alert ('Error') </script>";
}