<?php  
session_start();
//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOvideojuego.php';
//Nos conectamos a la base de datos
	$conexion = conectar(false);
//Y cogemos el id de videojuegos por que lo vamos a necesitar
	$idVideojuego = $_GET['idVideojuego'];
//la funcion la paso a una consulta y despues obtenemos los valores	
	$consulta = enseñarjuegoporid($conexion,$idVideojuego);
	$fila = mysqli_fetch_assoc($consulta);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>VideoJuegos</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body>
<?php include('./inc/headerSimple.php'); ?>

<div class="cuerpo">	

<div class="card" id="card-login" style="width: 18rem;">
	<div class="card-body" id="card-html">

	<center>
	<form action="modificar_juego.php" method="POST" enctype="multipart/form-data">
		
		<b>Titulo: </b><input type="text" name="titulo" id="titulo" class="form-control" placeholder="The Legend Zelda" value="<?php echo $fila['Titulo']; ?>"><br>
		<span id="titulo_error">El titulo introducido no es valido</span>

		<b>Compañia: </b><input type="text" name="compania" id="compania" class="form-control" placeholder="Nintendo" value="<?php echo $fila['Titulo']; ?>"><br>
		<span id="compañia_error">La compañia introducida no es valida</span>

		<b>Publicacion: </b><input type="text" name="publicacion"  value="<?php echo $fila['Publicacion'] ?>"><br>
		<b>Descripcion: </b><input type="text" name="descripcion"  value="<?php echo $fila['Descripcion'] ?>"><br>
		<b>Imagen: </b><input type="file" name="imagen"><br>

		<input type="submit" value="Modificar" name="btnregistrar">
		<input type="hidden"  name="idVideojuego" value="<?php echo $idVideojuego ?>">
	</form>
	</center>
	</div>
</div>
</div>

<?php include('./inc/footer.php')?>

<script type="text/javascript" src="js/nuevojuego.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
