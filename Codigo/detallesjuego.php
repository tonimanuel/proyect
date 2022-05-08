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

<body style="background-color: #a3b2aa;">

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
	$result = ensenarjuegoporid($conexion,$idVideojuego);

//recorre la consulta y los muestra

	while ($fila=mysqli_fetch_array($result)) {

	?>
<div class="container">
	<div class="row">
		<div class="card bg-dark" id="carta-detalles" style="width: 60rem;">
				<img class="imagen-detalles" src="<?php echo $fila['Imagen'] ?>" class="card-img-top">
		  			<div class="card-body " text-align="center" style="color: #a3b2aa;">
			    		<h5 class="card-title" text-align="center" id="titulo3"><b> <?php echo $fila['Titulo'] ?> </b></h5>
					   		<p class="card-text" text-align="center"  id="compañiaypublicacion"><b> <?php echo $fila['Compania'] ?> </b></p>
					   		<p class="card-text" text-align="center"  id="compañiaypublicacion"><b> <?php echo $fila['Publicacion'] ?> </b></p>
					   		<p class="card-text" text-align="center" id="descripcion"><b> <?php echo $fila['Descripcion'] ?> </b></p>
							<p class="card-text" text-align="center" id=""><b> <?php echo $fila['Stock'] ?> Unidades</b></p>
						    <p class="card-text" text-align="center" id=""><b> <?php echo $fila['Precio'] ?> Euros</b></p>
					   		
		 	 		</div>
		 	 			
		 	 		<ul class="nav justify-content-end">
					  <?php
if (isset($_SESSION['Usuario'])) {
	

							  ?>
							  <form action="cesta.php" method="POST"> 
							  		<input type="hidden" name="PrecioJ" value="<?php echo $fila['Precio']; ?>">
								  	<input type="hidden" name="idJuego" value="<?php echo $fila['idVideojuego']; ?>">
									<input step="1" name="cantidadJ" style="color: black;" min="1" max="<?php echo $fila['Stock']; ?>" type="number">
									<input type="submit" name="anadirJuego" value="Añadir a Carrito">
								</form>
							  <?php
}
							  ?>
					</ul>

		</div>

	<?php

	}

	?>

</div>
	<div class="row">
	<div class="comentarios">

<?php
//con esta condicion añadimos un comentario
	if(isset($_SESSION['Usuario'])){
		?>
			<div>
				<h2>Deja un comentario</h2>
				<form method="POST"> 
					<!-- <input type="text" name="comentario"> -->
					<div class="form-group">
						<textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<input type="submit" style="color: #a3b2aa; font-size:20px;" class="col-12 bg-dark" name="subir-comentario" value="Enviar comentario">
				</form>
			</div>
		<?php
	}else{
		?>
			<div class="enviar-comentario">
				<h2>Deja un comentario</h2>
				<h3>Inicia sesión para dejar un comentario</h3>
			</div>
		<?php
	}
?>

<div class="comentarios-dejados">
	<?php
	    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['subir-comentario'])){
			$pid= $idVideojuego;
			$uid = $_SESSION['idUsuario'];
			$comentario = $_POST['comentario'];
			$fechaActual = date('Y-m-d');
			$sql = "INSERT INTO `comentariovideojuego` (`comentario`, `idUsuario`, `Videojuego`, `fecha`) VALUES ('$comentario', '$uid', '$pid', '$fechaActual')";
			mysqli_query($conexion, $sql);
			unset($pid);
			unset($comentario);
	
		}
		$id=$idVideojuego;
		$sqll = "SELECT * FROM `comentarioplataforma` WHERE idPlataforma='$id'";
		$sqlll = "SELECT comentario, comentariovideojuego.fecha as fecha, usuario.Nombre FROM comentariovideojuego inner join usuario on comentariovideojuego.idUsuario = usuario.idUsuario  WHERE comentariovideojuego.Videojuego = '$id'";
		$res = mysqli_query($conexion, $sqlll);

		if (mysqli_num_rows($res) > 0){
			while($comentario = mysqli_fetch_assoc($res)){ 

				?>
					
					<div class="jumbotron-fluid ml-3 comentario">
						<div class="container">
							<h5><?=$comentario['Nombre']?></h5>
							<p><?=$comentario['fecha']?>.</p>
							<p><?=$comentario['comentario']?></p>
						</div>
					</div>
				<?php
			
			}
		}
		if (isset($_POST['eliminarJue'])) {
			$resulElimJue=eliminarJuegoCesta($conexion,$_POST['idItem'],$_POST['idJuego'],$_POST['precioElim'],$_POST['cantidadEli'],$_POST['idCesta']);
			if ($resulElimJue) {
				header('Location: cesta.php');
			}
		
		}
	?>
</div>
</div>
	</div>
</div>

<?php include("./inc/footer.php")?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>



