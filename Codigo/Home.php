<?php
session_start();
//Iniciamos la sesion	
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Tienda Online</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include('./inc/header.php');?>


<div class="cuerpo">
	<div class="container">
		<h3 class="bg-dark" id="titulo3">Plataformas Disponibles</h3>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<?php
					//Cogemos los archivos que vamos a necesitar
					require 'bd/conectorBD.php';
					require 'DAOvideoconsola.php';
					require 'DAOvideojuego.php';
					//Nos conectamos a la base de datos
					$conexion = conectar(false);
					//Usamos la funcion para poder mostrar los datos de nuestra base de datos en los carruseles
					$consulta = ensenarPlataforma($conexion);
							
					$i = 0;

					//Muestra en bucle todos los campso de la consulta
					while($fila = mysqli_fetch_assoc($consulta)) {
				?>
				<div class="item <?php echo ($i == 0) ? 'active' : '';?>" >

					<img loading="eager" src="<?php echo $fila['Imagen'];?>" alt="Plataforma" style="width:100%; height:380px;">

				</div>
				<?php

					//incrementamos para que no se repita siempre la misma imagen
					$i++;
					}
				?>
			</div>

			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Anterior</span>
			</a>

			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Siguiente</span>
			</a>

		</div>

		<h3 id="titulo3" class="bg-dark">Videojuegos en Stock</h3>
		<div id="myCarousel2" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel2" data-slide-to="1"></li>
				<li data-target="#myCarousel2" data-slide-to="2"></li>
				<li data-target="#myCarousel2" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
			<?php						
					//Nos conectamos a la base de datos
					$conexion = conectar(false);
					//Usamos la funcion para poder mostrar los datos de nuestra base de datos en los carruseles
					$consulta = ensenarVideojuego($conexion);
					$i = 0;
					//Muestra en bucle todos los campso de la consulta
					while($fila = mysqli_fetch_assoc($consulta)) {
				?>
				<div class="item <?php echo ($i == 0) ? 'active' : '';?>">
					<img loading="eager" src="<?php echo $fila['Imagen'];?>" alt="Videojuego" style="width:100%; height:380px;">
				</div>
				<?php
					//incrementamos para que no se repita siempre la misma imagen
					$i++;
					}
				?>
			</div>
			<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" href="#myCarousel2" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>
</div>

<?php include("./inc/footer.php")?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>



