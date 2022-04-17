<?php
	session_start();
    if ($_SESSION['Rol'] != "admin") {
    	header("Location: Home.php");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Añadir productos</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body>

<?php include('./inc/headerSimple.php'); ?>

<div class="cuerpo">
<center>
	<div class="card" id="card-login-grande" style="width: 18rem;">
		<div class="card-body" id="card-html">
		
			<form action="nuevo_producto.php" method="POST" enctype="multipart/form-data">
				
				<label><b>Id videojuego: </b></label><br>
				<input type="text" name="idvideojuego" id="idvideojuego" class="form-control">
				<span id="idvideojuego_error">El id introducido no es valido</span><br>

				<label><b>Id plataforma: </b></label><br>
				<input type="text" name="idplataforma" id="idplataforma" class="form-control">
				<span id="idplataforma_error">El id introducido no es valido</span><br>

				<label><b>Stock: </b></label>
				<input type="text" name="stock"  id="stock" class="form-control">
				<span id="stock_error">El stock introducido no es valido</span><br>

				<label><b>Precio: </b></label>
				<input type="text" name="precio" id="precio" class="form-control">
				<span id="precio_error">El precio introducido no es valido</span><br>

				<input type="submit" value="Añadir" name="btnregistrar">

			</form>
		
		</div>
	</div>
</center>
</div>	

<?php include('./inc/footer.php'); ?>

<script type="text/javascript" src="js/añadirproducto.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>

