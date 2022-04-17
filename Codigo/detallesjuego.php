<?php

//Iniciamos la sesion
	session_start();
	
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Tienda Online</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include('./inc/header.php');?>

<div class="cuerpo">

	<?php 

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';
	require 'DAOvideoconsola.php';
	require 'DAOvideojuego.php';
	require 'DAOproducto.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

	$idVideojuego = $_GET['idVideojuego'];
//usamos una funcion que nos permite mostrar las consolas de la base de datos
	$result = enseñarjuegoporid($conexion,$idVideojuego);

//recorre la consulta y los muestra

	while ($fila=mysqli_fetch_array($result)) {

	?>

		<div class="card" id="carta-detalles" style="width: 60rem;">
				<img class="imagen-detalles" src="<?php echo $fila['Imagen'] ?>" class="card-img-top">
		  			<div class="card-body " text-align="center">
			    		<h5 class="card-title" text-align="center" id="titulo3"><b> <?php echo $fila['Titulo'] ?> </b></h5>
					   		<p class="card-text" text-align="center"  id="compañiaypublicacion"><b> <?php echo $fila['Compania'] ?> </b></p>
					   		<p class="card-text" text-align="center"  id="compañiaypublicacion"><b> <?php echo $fila['Publicacion'] ?> </b></p>
					   		<p class="card-text" text-align="center" id="descripcion"><b> <?php echo $fila['Descripcion'] ?> </b></p>
					   		
		 	 		</div>
		 	 			
		 	 		<ul class="nav justify-content-end">
							  <li class="nav-item" id="botones">
								    <a href="filtro1.php?id=<?php echo $fila['idVideojuego']?>">Ver consolas disponibles para <?php echo $fila['Titulo'] ?>.</a>
							  </li>
					</ul>

		</div>

	<?php

	}

	?>

</div>


<?php include("./inc/footer.php")?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>



