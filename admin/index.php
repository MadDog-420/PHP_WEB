<?php
	include_once('utilities.php');
	include_once('db/database_utilities.php');
	$result = run_query('clientes');
	$result2 = run_query('productos');
	$result3 = run_query('ventas');
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<title>PEAR STORE</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
	<!-- Syntax Highlighter -->
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Normalize/Reset CSS-->
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body id="welcome">
<aside class="left-sidebar">
<div class="logo">
	<a href="#welcome">
		<h1>Pear Store</h1>
	</a>
</div>
<nav class="left-nav">
	<ul id="nav">
		<li class="current"><a href="#welcome">Bienvenido</a></li>
		<li><a href="#vend">Ver ventas</a></li>
		<li><a href="#prod">Ver productos</a></li>
		<li><a href="#user">Ver usuarios</a></li>
	</ul>
</nav>
</aside>
<!-- Main Wrapper -->
<div id="main-wrapper">
<div class="main-content">
	<section id="welcome">
		<div class="content-header">
			<h1>Pear Store</h1>
		</div>
		<div class="welcome">
			<h2 class="twenty">Bienvenido admin!</h2>
			<p>Desde aquí podras ver y administrar el contenido de las bases de datos</p>
		</div>
		<div class="features">
			<h2 class="twenty">Logo</h2>
			<img style="width: 200px; margin: 0 auto" src="../IMG/pear.png">
		</div>
	</section>

	<section id="vend">
		<div class="content-header">
			<h1>Pear Store</h1>
		</div>
		<h2 class="title">Ventas</h2>
		<div class="section-content">
			<div class="row">
				<div class="large-10 columns">
					<p>Listado</p>
					<div class="section-container tabs" data-section>
						<section class="section">
							<div class="content" data-slug="panel1">
								<table>
									<thead>
										<tr>
											<th width="200">ID Cliente</th>
											<th width="200">ID Producto</th>
											<th width="50">Cantidad</th>
											<th width="100">Total neto</th>
											<th width="100">Total final</th>
											<th width="200">Fecha</th>
											<th width="100">Acción</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										while($vend = $result3->fetch_assoc())
										{
									?>
										<tr>
											<td><?php echo $vend['id_cliente']; ?></td>
											<td><?php echo $vend['id_producto']; ?></td>
											<td><?php echo $vend['cantidad']; ?></td>
											<td><?php echo $vend['total_neto']; ?></td>
											<td><?php echo $vend['total_final']; ?></td>
											<td><?php echo $vend['fecha_vent']; ?></td>
											<td>
												<a href="./details.php?id=<?php echo $user['id']; ?>" class="button tiny secondary">Detalles</a>
												<a href="./delete.php?id=<?php echo $user['id']; ?>" class="button tiny alert">Eliminar</a>
											</td>
										</tr>
									<?php
										}
									?>
									</tbody>
								</table>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="prod">
		<div class="content-header">
			<h1>Pear Store</h1>
		</div>
		<h2 class="title">Productos</h2>
		<div class="section-content">
			<div class="row">
				<div class="large-10 columns">
					<p>Listado</p>
					<div class="section-container tabs" data-section>
						<section class="section">
							<div class="content" data-slug="panel1">
								<div class="row">
									<a href="./new_user.php" class="button tiny success">Nuevo</a>
								</div>
								<table>
									<thead>
										<tr>
											<th width="100">ID Producto</th>
											<th>Nombre</th>
											<th width="100">Precio</th>
											<th>Descripción</th>
											<th width="100">Stock</th>
											<th width="100">Acción</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										while($prod = $result2->fetch_assoc())
										{
									?>
										<tr>
											<td><?php echo $prod['id_producto']; ?></td>
											<td><?php echo $prod['nombre']; ?></td>
											<td><?php echo $prod['precio']; ?></td>
											<td><?php echo $prod['descripcion']; ?></td>
											<td><?php echo $prod['stock']; ?></td>
											<td>
												<a href="./details.php?id=<?php echo $prod['id']; ?>" class="button tiny secondary">Detalles</a>
												<a href="./delete.php?id=<?php echo $prod['id']; ?>" class="button tiny alert">Eliminar</a>
											</td>
										</tr>
									<?php
										}
									?>
									</tbody>
								</table>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="user">
		<div class="content-header">
			<h1>Pear Store</h1>
		</div>
		<h2 class="title">Usuarios</h2>
		<div class="section-content">
			<div class="row">
				<div class="large-10 columns">
					<p>Listado</p>
					<div class="section-container tabs" data-section>
						<section class="section">
							<div class="content" data-slug="panel1">
								<div class="row">
									<a href="./new_user.php" class="button tiny success">Nuevo</a>
								</div>
								<table>
									<thead>
										<tr>
											<th width="100">ID Usuario</th>
											<th>Nombre</th>
											<th>Direccion</th>
											<th>Correo</th>
											<th>Contraseña</th>
											<th width="100">Acción</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										while($user = $result->fetch_assoc())
										{
									?>
										<tr>
											<td><?php echo $user['id_cliente']; ?></td>
											<td><?php echo $user['nombre']; ?></td>
											<td><?php echo $user['direccion']; ?></td>
											<td><?php echo $user['correo']; ?></td>
											<td><?php echo $user['contrasena']; ?></td>
											<td>
												<a href="./details.php?id=<?php echo $prod['id']; ?>" class="button tiny secondary">Detalles</a>
												<a href="./delete.php?id=<?php echo $prod['id']; ?>" class="button tiny alert">Eliminar</a>
											</td>
										</tr>
									<?php
										}
									?>
									</tbody>
								</table>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
<div class="copy-cont row">
	<copyright>&copy; 2020 MadDog. All rights reserved.</copyright>
</div>
</div>

<!-- Essential JavaScript Libraries
	==============================================-->
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
	<script type="text/javascript">
		SyntaxHighlighter.all()
	</script>
	<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
