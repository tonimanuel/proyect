<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Videoconsolas</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	
<body>

<?php include("./inc/header.php")?>

<div class="container-fluid row justify-content-center">



	<?php 

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOvideoconsola.php';


//Nos conectamos a la base de datos
	$conexion = conectar(false);

//usamos una funcion que nos permite mostrar las consolas de la base de datos
	$result = mostrarconsola($conexion);

	
//recorre la consulta y los muestra
	while ($mostrar=mysqli_fetch_array($result)) {

	?>

	<div class="card col-6 col-md-4 col-xl-3" id="carta-catalogo">
		  		<img class="imagen-catalogo card-img-top" src="<?php echo $mostrar['Imagen'] ?>">
		  			<div class="card-body">
			    		<h5 class="card-title"><b> <?php echo $mostrar['Nombre'] ?> </b></h5><br>
					   		<p class="card-text">Lanzamiento: <b> <?php echo $mostrar['Lanzamiento'] ?> </b></p>
					   		<p class="card-text">Precio: <b> <?php echo $mostrar['Precio'] ?> </b></p>
		 	 				<p class="card-text">Stock: <b> <?php echo $mostrar['Stock'] ?> </b></p>
		 	 		</div>

		 	 			<td>
							<ul class="nav justify-content-center">
		  						<li class="nav-item botonns">
		    						<a class="nav-link active" aria-current="page" href="detallesconsolas.php?idPlataforma=<?php echo $mostrar['idPlataforma']; ?>" value="Comprar" name="Comprar">Ver Detalles</a>
		  						</li>
							</ul>
						</td>
		 	 				
	</div>

	<?php

	}

	?>



</div>

<?php include("./inc/footer.php")?>

<script type="text/javascript" src="js/confirmar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>