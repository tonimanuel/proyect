<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cambiar contraseña</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	</head>

<body>

	<?php include('./inc/headerSimple.php');
	require 'DAOusuarios.php';
	require 'bd/conectorBD.php';
	$conexion = conectar(false);


	

	?>

<div class="cuerpo">
<?php
if (isset($_POST['recuContra'])) {
	$resul=usuarioRecuperar($conexion,$_POST['dni']);
	if (mysqli_num_rows($resul)==1) {
		$usuario=mysqli_fetch_assoc($resul);
		echo $usuario['idUsuario'];
?>
<div class="card" id="card-login" style="width: 18rem;">

	<div class="card-body" id="card-html">

	<form action="contrasena_nueva.php" method="post">

		<div><h2>Cambio de contraseña</div></h2>
		<label><b>Contraseña nueva:</b></label>
		<input type="text" name="password" id="password" class="form-control" placeholder="Ejemplo: Alumn@2020">
		<span id="password_error">La contraseña introducida no es valida</span>
	    <input type="submit" class="boton">
	    
	</form>
	
	</div>
</div>
<?php
}
header('Location: recuperarContrasena.php');
}
?>
</div>

<?php

include('./inc/footer.php') ?>

<script type="text/javascript" src="js/contraseña_nueva.js"></script>
</body>
</html>