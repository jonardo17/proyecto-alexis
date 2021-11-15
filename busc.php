<?php


include("conexion.php");
require "checkLogin.php";

$Website= $_POST['website'];

$sql= "SELECT * FROM darsis WHERE Website= '$Website'";

$resul= mysqli_query($mysqli,$sql);                                                          
while($row= mysqli_fetch_array($resul)){

echo $row['Website']."".$row['Hosting']."".$row['Dominio']."".$row['Telefono']."".$row['Ciudad']."".$row['S_SL']."".$row['Proveedor'];


}

?>






<DOCTYPE html>



<html lang="es">
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
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="formb.php">Sistema Web Darsis</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
			><!-- Navbar Search-->
			<ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        
                        <a class="dropdown-item" href="logout.php">Salir</a>
            
                </div>
			</form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
            <!--        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a> -->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Salir</a>
					</div>
				</li>
			</ul>
		</nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html"
							
							>
							
							<?php if($tipo_usuario == 1) { ?>
								
								<div class="sb-sidenav-menu-heading">Interface</div>
								<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
								>
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
									Clientes
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
									></a>
									<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
										<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="register.html">Registro de Cliente </a><a class="nav-link" href="register.html">Actualizar Cliente</a> <a class="nav-link" href="register.html">Eliminar Cliente</a></nav>
									</div>
									
										<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
											<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
												<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
												>Authentication
													<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
													></a>
													<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
														<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
													</div>
													<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
													>Error
														<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
														></a>
														<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
															<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
														</div>
											</nav>
										</div>
										
							<?php } ?>

							
						
							<a class="nav-link" href="charts.html"
							
								><a class="nav-link" href="tabla.php"
								><div class="sb-nav-link-icon"><i ></i></div>
									</a
								>
							</div>
					</div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                       
					</div>
				</nav>
			</div>
            <div id="layoutSidenav_content">
				<main>
					<div class="container-fluid">
						<h1 class="mt-4">Datos Encontrados</h1>
						<ol class="breadcrumb mb-4">
							
							
						</ol>
						<div class="card mb-4">
							
						</div>
						<div class="card mb-4">
							
							<div class="card-header"><i class="fas fa-table mr-1"></i>Datos De Cliente</div>
							<div class="card-body">
							<!-- se ajusta la tabla para que se va todo lo agregado stylos  en
						    .table-responsive-md > .table-bordered  --> 	
							<div class="table-responsive  table-hover">
								<!-- se agrego un table-hover--> 
								<table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
								<!--Alinear el boton a la derecha-->
								
								<thead>
											<tr>
											<th>Website</th>
												<th>Hosting</th>
												<th>Dominio</th>
												<th>Telefono</th>
												<th>Ciudad</th>
												<th>SSL</th>
												<th>Proveedor</th>
											</tr>
										</thead>
										
										<tbody>
										<?php
									//	$sql= "SELECT  * FROM darsis";
									//	$resul= mysqli_query($mysqli,$sql);  
                                        
                                    $Website= $_POST['website'];

                                    $sql= "SELECT * FROM darsis WHERE Website= '$Website'";
                                    
                                    $resul= mysqli_query($mysqli,$sql);                                                          
                                    
                                    
										
										while($row= mysqli_fetch_array($resul)){
										
										?>
										
										
												
												<tr>
													<td><?php echo $row['Website']; ?></td>
													<td><?php echo $row['Hosting']; ?></td>
													<td><?php echo $row['Dominio']; ?></td>
													<td><?php echo $row['Telefono']; ?></td>
													<td><?php echo $row['Ciudad']; ?></td>
													<td><?php echo $row['S_SL']; ?></td>
													<td><?php echo $row['Proveedor']; ?></td>
											
												
													
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								</div>
								</div>
											</div>
					</main>


<style>

form{
   
    /* Centrar el formulario en la página */
  margin: 0 auto;
  width: 400px;
  /* Esquema del formulario */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;

}

.form input {
  width: 90%;
  height: 30px;
  margin: 0.5rem;
}

.p{
 
    width: 400px;
    margin: 0 auto;
}






    </style>

			<div>
                    <form method="POST"  action="correo.php" name="enviar" id="enviar">

						<p>INGRESE LOS SIGUIENTES DATOS</p> 


						<p>NOMBRE</p>
						<input type="text" placeholder="Nombre" name="in-nombre" id="in-nombre" required>


						<br></br>
						<p>Email</p>
						<input type="text" placeholder="Email" name="in-email" id="in-email" required>

						
						<br></br>
						<p> Peticion</p>
						<p>
						<textarea placeholder="Comentarios y Sugerencias" name="in-comentarios" id="in-comentarios" required></textarea>
						</p>

						<input type="submit"  class="btn-primary" value="Enviar">
	
						


					</form>


			</div>

					<footer class="py-4 bg-light mt-auto">
						<div class="container-fluid">
						<div class="d-flex align-items-center justify-content-between small">
					<div class="text-muted"></div>
					<div>
						<a href="#"></a>
						
						<a href="#"></a>
					</div>
					</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
		<script src="assets/demo/datatables-demo.js"></script>
	</body>




</html>











