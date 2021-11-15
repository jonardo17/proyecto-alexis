<?php 

include ("conexion.php");
require "checkLogin.php";
$website=$_GET['Website'];
$query= "SELECT * FROM darsis WHERE Website='$website' LIMIT 1;";

$result= mysqli_query($mysqli,$query);
$result = mysqli_fetch_assoc($result);




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema Web Darsis</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        
        
        
        
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modificar Registro</h3></div>
                                    <div class="card-body">
                                        <form action="mod.php" method="post">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Website</label>
                                                  <input class="form-control py-4" id="inputFirstName" name="Website" type="text" placeholder="Escribe el Website" value="<?php echo $result['Website']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Hosting</label>
                                                    <input class="form-control py-4" id="inputLastName" type="text" name="Hosting" placeholder="Escribe el Hosting" value="<?php echo $result['Hosting']?>"/>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Hosting Vence</label>
                                                    <input class="form-control py-4" id="inputLastName" type="text" name="HostingVence" placeholder="Fecha de Vencimiento Hosting" value="<?php echo $result['Hosting_Vence']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Dominio</label>
                                                    <input class="form-control py-4" id="inputLastName" type="text" name="Dominio" placeholder="Escribe el Dominio" value="<?php echo $result['Dominio']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Dominio Vence</label>
                                                    <input class="form-control py-4" id="inputLastName" type="text" name="DominioVence" placeholder="Fecha de Vencimiento Dominio" value="<?php echo $result['DominioVence']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Nombre</label>
                                                    <input class="form-control py-4" id="inputLastName" type="text" name="Nombre" placeholder="Nombre de la Empresa" value="<?php echo $result['Nombre']?>"/></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Email</label>
                                                    <input class="form-control py-4" id="" type="" name="Email" placeholder="Escribe el Email" value="<?php echo $result['Email']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Telefono</label>
                                                    <input class="form-control py-4" id="" type="" name="Telefono" placeholder="Escribe El Telefono" value="<?php echo $result['Telefono']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Ciudad</label>
                                                    <input class="form-control py-4" id="" type="" name="Ciudad" placeholder="Escribe La Ciudad" value="<?php echo $result['Ciudad']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Status</label>
                                                    <input class="form-control py-4" id="" type="" name="Status" placeholder="Escribe El STATUS" value="<?php echo $result['Statuss']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">SSL</label>
                                                    <input class="form-control py-4" id="" type="" name="SSL" placeholder="Escribe el SSL" value="<?php echo $result['S_SL']?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Proveedor</label>
                                                    <input class="form-control py-4" id="" type="" name="Proveedor" placeholder="Escribe el Proveedor" value="<?php echo $result['Proveedor']?>"/></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><input type="submit"  class="btn-primary" value="Modificar Registro"></div>
                                            <input type="button" name="Cancelar" value="Cancelar" class="btn-danger" onClick="location.href='principal.php'">
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>