<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Recupera tu contraseña</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include('./inc/headerSimple.php')?>

<div class="cuerpo">

<div class="card" id="card-login" style="width: 18rem;">
	<div class="card-body" id="card-html">
	<center>
	<form action="contrasenaNueva.php" method="post">
		
		<div><h2>Recupera tu contraseña</div></h2>
		<label><b>Introduce el Dni de su cuenta:</b></label>
		<input type="text" name="dni" id="dni"  class="form-control" placeholder="Ejemplo: 45314598k">
		<span id="dni_error">El Dni introducido no es correcto</span>
		<input class="boton" type="submit" name="recuContra">
		
	</form>
	</center>
	</div>
</div>

</div>

<?php include("./inc/footer.php")?>

<script type="text/javascript" src="js/recuperar_contraseña.js"></script>
</body>
</html>