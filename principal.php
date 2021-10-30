<?php
	
	session_start();
	
	if(!isset($_SESSION['ide'])){
		header("Location: index.php");
	}
	
	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	
?>

<?php
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION['ide'])){
		header("Location: index.php");
	}
	
	$id = $_SESSION['ide'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	if($tipo_usuario == 1){
		$where = "";
		} else if($tipo_usuario == 2){
		// $where = "WHERE ide=$ide";
	}
	
	
	
	
?>


<!DOCTYPE html>
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
            <a class="navbar-brand" href="principal.php">Sistema Web Darsis</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
			><!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
				<div class="input-group-append">
				<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
				</div>
                </div>
			</form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
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
                            
							<div class="sb-nav-link-icon"><i class=""></i></div>
                            
							
							
							<?php if($tipo_usuario == 1) { ?>
								
								
								<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
								>
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
									Clientes
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
									></a>
									<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
										<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="Register.html">Registrar Nuevo Cliente </a><a class="nav-link" href="Register.html"></a> <a class="nav-link" href="Register.html"></a></nav>
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
							
							
								
								
							</div>
					</div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                
					</div>
				</nav>
			</div>
            <div id="layoutSidenav_content">
				<main>
					
						<h1 class="mt-4">TABLA DE CLIENTES</h1>
						
							
						</ol>
						<div class="card mb-4">
							<div class="card-body"><a target="_blank" href="https://datatables.net/"></a></div>
						</div>
						<div class="card mb-4">
							<div class="card-header"><i class="fas fa-table mr-1"></i>Datos De Clientes</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Website</th>
												<th>Hosting</th>
												<th>Hosting Vence</th>
												<th>Dominio</th>
												<th>Dominio Vence</th>
												<th>Nombre</th>
												<th>Email</th>
												<th>Telefono</th>
												<th>Ciudad</th>
												<th>Status</th>
												<th>S_SL</th>
												<th>Proveedor</th>
												<th>Seleccionar</th>
											</tr>
										</thead>
										
										<tbody>
									<!--################################################ PRINT TABLE-->
									<!--################################################ ############## OBTENER DATOS DE TABLA darsis-->
									<?php //INICIO DE SCRIPT
											$sql= "SELECT * FROM darsis";
											$result = mysqli_query($mysqli,$sql);

											while ($row=mysqli_fetch_array($result)){ // ########### APERTURA DE WHILE
									?> <!--CIERRE DE SCRIPT-->

									<tr>
										<td><?php echo $row['Website']; ?></td>
										<td><?php echo $row['Hosting']; ?></td>
										<td><?php echo $row['Hosting_Vence']; ?></td>
										<td><?php echo $row['Dominio']; ?></td>
										<td><?php echo $row['DominioVence']; ?></td>
										<td><?php echo $row['Nombre']; ?></td>
										<td><?php echo $row['Email']; ?></td>
										<td><?php echo $row['Telefono']; ?></td>
										<td><?php echo $row['Ciudad']; ?></td>
										<td><?php echo $row['Statuss']; ?></td>
										<td><?php echo $row['S_SL']; ?></td>
										<td><?php echo $row['Proveedor']; ?></td>
										
										<?php
										if($tipo_usuario == 1){
										?>
										<td><a href="modificar.php?Website=<?php echo $row['Website']?>">Modificar</a>
										<a href="Eliminar.php?Website=<?php echo $row['Website']?>" id="btn-eliminar">Eliminar </nav> </a>
										</td>
										<?php }?>

									</tr>
									<?php } ?><!--CIERRE DE WHILE-->
										</tbody>

									
									</table>
								</div>
								</div>
								</div>
											</div>
					</main>
					<footer class="py-4 bg-light mt-auto">
						<div class="container-fluid">
						<div class="d-flex align-items-center justify-content-between small">
					<div class="text-muted"></div>
					<div>
						<a href="#"></a>
						&middot;
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
