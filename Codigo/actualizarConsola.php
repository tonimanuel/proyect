<?php 
session_start(); 
//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOvideoconsola.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);
	
//Y cogemos el id de la consola por que lo vamos a necesitar
	$idconsola = $_GET['idconsola'];
	$consulta = ensenarconsolaporid($conexion,$idconsola);
	$fila = mysqli_fetch_assoc($consulta);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>VideoConsolas</title>
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
	<form action="modificar_consola.php" method="POST" enctype="multipart/form-data">
		
		<b>Nombre: </b><input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila['Nombre'] ?>"><br>
		<span id="nombre_error">El Nombre introducido no es valido</span>
		<b>Lanzamiento: </b><input type="text" name="lanzamiento" value="<?php echo $fila['Lanzamiento'] ?>"><br>
		<b>Precio: </b><input type="text" name="precio" id="precio" class="form-control" placeholder="Ejemplo: 40" value="<?php echo $fila['Precio'] ?>"><br>
		<span id="precio_error">Lo introducido no es un precio</span>
		<b>Stock: </b><input type="text" name="stock" id="stock" class="form-control" placeholder="Ejemplo: 12" value="<?php echo $fila['Stock'] ?>">
		<span id="stock_error">Lo introducido no es un numero</span>
		<b>Descripcion: </b><input type="text" name="descripcion" value="<?php echo $fila['Descripcion'] ?>"><br>
		<b>Imagen: </b><input type="file" name="imagen"><br>
		<b>Logo: </b><input type="file" name="logo" ><br>

		<input type="submit" value="Modificar" name="btnregistrar">
		<input type="hidden"  name="idconsola" value="<?php echo $idconsola ?>">
	</form>
	</center>
	</div>
</div>
</div>

<?php include('./inc/footer.php')?>

<script type="text/javascript" src="js/nuevacosola.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>

