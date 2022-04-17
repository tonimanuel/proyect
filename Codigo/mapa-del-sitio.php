<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Tienda Online</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>
</head>

<body>

<?php include("./inc/header.php")?>

<div class="cuerpo">

	<div class="padre">

		<div class="hijo">

			<h2 id="titulo-ms">Pagina Principal</h2>
			
			<a class="nav-link" href="Home.php"> Home</a><br>
			<p>|</p>
			<a class="nav-link" href="catalogo.php"> Catalogo</a><br>
			<p>|</p>
			<a class="nav-link" href="login.html"> Logueate</a><br>
			<p>|</p>
			<a class="nav-link" href="ingresar_usuario"> Registrate</a><br>

		</div>

		<div class="hijo">

			<h2 id="titulo-ms">Pagina del Usuario</h2>
			
			<a class="nav-link" href="catalogo.php">Catalogo</a><br>
			<p>|</p>
			<a class="nav-link" href="videoconsolasusuario.php">Videoconsolas</a><br>
			<p>|</p>
			<a class="nav-link" href="videojuegosusuario.php">Videojuegos</a><br>
			<p>|</p>
			<a class="nav-link" href="perfil.php">Perfil</a><br>

		</div>

		<div class="hijo">

			<h2 id="titulo-ms">Redes Sociales</h2>
			
			<a class="nav-link" href="https://es-es.facebook.com/">Facebook</a><br>
			<p>|</p>
			<a class="nav-link" href="https://www.google.es/">Google +</a><br>
			<p>|</p>
			<a class="nav-link" href="https://www.instagram.com/">Instagram</a><br>

		</div>

	</div>

</div>

<?php include("./inc/footer.php")?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
