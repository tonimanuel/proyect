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
		<title>VideoConsolas</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body>
<?php include('./inc/header.php')?>
<div class="cuerpo">

	<center>


<div class="card" id="card-login-grande" style="width: 18rem;">
	<div class="card-body justify-content-center" id="card-html">
	<form action="nueva_consola.php" method="POST" enctype="multipart/form-data">
		<label><b>Nombre: </b></label><br>
		<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ejemplo: Daniel">
		<span id="nombre_error">El Nombre introducido no es valido</span><br>

		<label><b>Lanzamiento: </b></label><br>
		<input type="text" name="lanzamiento"><br>

		<label><b>Precio: </b></label><br>
		<input type="text" name="precio" id="precio" class="form-control" placeholder="Ejemplo: 40">
		<span id="precio_error">Lo introducido no es un precio</span><br>

		<label><b>Stock: </b></label><br>
		<input type="text" name="stock" id="stock" class="form-control" placeholder="Ejemplo: 12">
		<span id="stock_error">Lo introducido no es un numero</span><br>

		<label><b>Descripcion: </b></label><br>
		<input type="text" name="descripcion"><br>

		<label><b>Imagen: </b></label><br>
		<input type="file" name="imagen"><br>

		<label><b>Logo: </b></label><br>
		<input type="file" name="logo"><br>
	
		<input type="submit" value="Añadir" name="btnregistrar">

	</form>

	</div>

</div>
</center>

</div>

<?php include("./inc/footer.php")?>

<script type="text/javascript" src="js/nuevacosola.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>

