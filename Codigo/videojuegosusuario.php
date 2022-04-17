<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Videojuegos</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="https://phantom-elmundo.unidadeditorial.es/83767bb5c3c8513f007663ca38fa7c70/resize/746/f/jpg/assets/multimedia/imagenes/2020/04/13/15868039822868.jpg">
<body>

<?php include("./inc/header.php")?>

		<div class="container-fluid row justify-content-center">

			

			<?php 
			//Cogemos los archivos que vamos a necesitar
			require 'bd/conectorBD.php';
			require 'DAOvideojuego.php';

			//Nos conectamos a la base de datos
			$conexion = conectar(false);

			
			//usamos una funcion que nos permite mostrar las consolas de la base de datos
			$result = mostrarvideojuego($conexion);

			//recorre la consulta y los muestra

			while ($mostrar=mysqli_fetch_array($result)) {

			?>

				<div class="card col-6 col-md-4 col-xl-3" id="carta-catalogo">
					<img class="imagen-catalogo card-img-top" src="<?php echo $mostrar['Imagen'] ?>">

					<div class="card-body" text-align="center">
						<h5 class="card-title" text-align="center"><b> <?php echo $mostrar['Titulo'] ?> </b></h5>
						<p class="card-text" text-align="center"><b> <?php echo $mostrar['Compania'] ?> </b></p>
					</div>
					<td>
						<ul class="nav justify-content-center">
							<li class="nav-item botonns">
								<a class="nav-link active" aria-current="page" href="detallesjuego.php?idVideojuego=<?php echo $mostrar['idVideojuego']; ?>" value="Comprar" name="Comprar">Ver Detalles</a>
							</li>
						</ul>
					</td>
				</div>
			<?php
				}
			?>
		</div>

<?php include("./inc/footer.php")?>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>