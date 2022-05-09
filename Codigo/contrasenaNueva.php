<?php 
	require 'DAOusuarios.php';
	require 'bd/conectorBD.php';
	$conexion = conectar(false);
	session_start(); ?>
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

	<?php include('./inc/headerSimple.php') ?>

<div class="cuerpo">

<div class="card" id="card-login" style="width: 18rem;">

	<div class="card-body" id="card-html">

	<form action="contrasenaNueva.php" method="post">

		<div><h2>Cambio de contraseña</div></h2>
		<label><b>Contraseña nueva:</b></label>
		<input type="text" name="pass" id="password" class="form-control" placeholder="Ejemplo: Alumn@2020">
		<span id="password_error">La contraseña introducida no es valida</span>
	    <input type="submit" class="boton" name="nuevaContra">
	    
	</form>
	<?php
			
			if (isset($_POST['nuevaContra'])) {

				echo $_SESSION['idUsuario'];
				$resulta=cambiarContra($conexion,$_POST['pass'],$_SESSION['idUsuario']);
				if ($resulta) {
					echo "Se modifico correctament";
					header('Location: perfil.php');

				}
			}
			if (isset($_POST['cambiarContra'])) {
				$dni=$_POST['dni'];
				$resultado=usuarioRecuperar($conexion,$dni);
				$usuario=mysqli_fetch_assoc($resultado);
				if (mysqli_num_rows($resultado)==1) {
						echo "El usuario existe";
						crearSesion($usuario);
					}else {
						header('Location: perfil.php');
					}
				}
			
		
	?>
	</div>
</div>

</div>

<?php include('./inc/footer.php') ?>

<script type="text/javascript" src="js/contraseña_nueva.js"></script>
</body>
</html>