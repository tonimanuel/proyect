<?php 
	session_start();
    if ($_SESSION['Rol'] != "admin") {
    	header("Location: Home.php");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>VideoJuegos</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body>
<?php include('./inc/header.php'); ?>

<div class="container-fluid">
	<div class="nav justify-content-center" id="botones">
		<a class="nav-item nav-link" aria-current="page" href="nuevojuego.php">Nuevo Juego</a>
	</div>
	<table border="1" class="table table-dark">

	<tr>
		<th>#</th>
		<th>Titulo</th>
		<th>Compañia</th>
		<th>Publicacion</th>
		<th>Descripcion</th>
		<th>Imagen</th>
		<th>Acción</th>
	</tr>

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

	<tr>

		<td><b> <?php echo $mostrar['idVideojuego'] ?> </b></td>
		<td><b> <?php echo $mostrar['Titulo'] ?> </b></td>
		<td><b> <?php echo $mostrar['Compania'] ?> </b></td>
		<td><b> <?php echo $mostrar['Publicacion'] ?> </b></td>
		<td><b> <div class="scroll"><?php echo $mostrar['Descripcion'] ?> </div></b></td>
		<td><b> <img class="imagen" src="<?php echo $mostrar['Imagen']; ?>"> </b></td>


		<td>
			<ul class="nav justify-content-center">
				<li class="nav-item" id="botones">
					<a class="nav-link active" aria-current="page" href="borrar_juego.php?idconsola=<?php  echo $mostrar['idPlataforma'];?>" value="eliminar" name="eliminar" onclick="return ConfirmarEliminar()">Eliminar</a>
				</li>
		  		<li class="nav-item" id="botones">
		    			<a class="nav-link active" aria-current="page" href="actualizarJuego.php?idconsola=<?php echo $mostrar['idPlataforma']; ?>" value="Modificar" name="Modificar">Modificar</a>
		  		</li>
			</ul>
		</td>

		

	</tr>

	<?php

	}

	?>

	</table>
</div>

<?php include("./inc/footer.php")?>

<script type="text/javascript" src="js/confirmar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>