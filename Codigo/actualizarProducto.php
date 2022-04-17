<?php  
//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOproducto.php';
//Nos conectamos a la base de datos
	$conn = conectar(false);
//Y cogemos el id de productos por que lo vamos a necesitar
	$idproductos = $_GET['idProductos'];
	$consulta = filtrarproductoo($conn,$idproductos);
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
	<form action="modificar_producto.php" method="POST" enctype="multipart/form-data">
		
		<b>IdVideojuego: </b><input type="text" name="idvideojuego" id="idvideojuego" class="form-control"><br>
		<span id="idvideojuego_error">El id introducido no es valido</span>

		<b>IdPlataforma: </b><input type="text" name="idplataforma" id="idplataforma" class="form-control"><br>
		<span id="idplataforma_error">El id introducido no es valido</span>

		<b>Stock: </b><input type="text" name="stock"  id="stock" class="form-control"><br>
		<span id="stock_error">El stock introducido no es valido</span>

		<b>Precio: </b><input type="text" name="precio" id="precio" class="form-control"><br>
		<span id="precio_error">El precio introducido no es valido</span>

		<input type="submit" value="Modificar" name="btnregistrar">
		<input type="hidden"  name="idproductos" value="<?php echo $idproductos ?>">
	</form>
	</center>
	</div>
</div>

</div>

<?php include('./inc/footer.php'); ?>

<script type="text/javascript" src="js/añadirproducto.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>

