<?php

include("conexion.php");

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
            <a class="navbar-brand" href="index.html">Sistema Web Darsis</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
            <!--        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a> -->
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
                            <a class="nav-link" href="index.html"
							><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
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

							
							<div class="sb-sidenav-menu-heading">Addons</div>
							<a class="nav-link" href="charts.html"
							><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
								Charts</a
								><a class="nav-link" href="tabla.php"
								><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									Tables</a
								>
							</div>
					</div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
					</div>
				</nav>
			</div>
            <div id="layoutSidenav_content">
				<main>
					<div class="container-fluid">
						<h1 class="mt-4">Tables</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
							<li class="breadcrumb-item active">Tables</li>
						</ol>
						<div class="card mb-4">
							<div class="card-body">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.</div>
						</div>
						<div class="card mb-4">
							
							<div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
							<div class="card-body">
							<!-- se ajusta la tabla para que se va todo lo agregado stylos  en
						    .table-responsive-md > .table-bordered  --> 	
							<div class="table-responsive  table-hover">
								<!-- se agrego un table-hover--> 
								<table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
								<!--Alinear el boton a la derecha-->
								<p align="right"><input type="submit" value="Eliminar" ></p>		
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
												<th>SSL</th>
												<th>Proveedor</th>
												<th>Seleccionar</th>
											</tr>
										</thead>
										
										<tbody>
										<?php
										$sql= "SELECT  * FROM darsis";
										$resul= mysqli_query($mysqli,$sql);                                                          
										
										while($row= mysqli_fetch_array($resul)){
										
										?>
										
										
												
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
													<td><a href="modificar.php?Website=<?php echo $row['Website']?>">Actualizar</a></td> 
												
													
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
                    <form method="POST"  >

<p>INGRESE LOS SIGUIENTES DATOS</p> 


<p>NOMBRE</p>
<input type="text" placeholder="NOMBRE" name="nombre"  required>


<br></br>
<p>TELEFONO</p>
<input type="text" placeholder="TELEFONO" name="telefono" required>

<br></br>
<p>EDAD</p>
<input type="text" placeholder="EDAD" name="edad" required>

<br></br>
<p>CORREO</p>
<input type="email" placeholder="CORREO" name="email" required>

<br></br>
<p>
<textarea placeholder="Comentarios y Sugerencias" name="informacion" required></textarea>
</p>

<input type="submit" name="enviar">



</form>


</div>

					<footer class="py-4 bg-light mt-auto">
						<div class="container-fluid">
						<div class="d-flex align-items-center justify-content-between small">
					<div class="text-muted">Copyright &copy; Your Website 2019</div>
					<div>
						<a href="#">Privacy Policy</a>
						&middot;
						<a href="#">Terms &amp; Conditions</a>
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
