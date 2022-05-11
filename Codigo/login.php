<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	</head>
<body>

<?php include('./inc/headerSimple.php') ?>

<div class="cuerpo">

	<div class="card" id="card-login">
		<div class="card-body">
			<form class="row g-1" action="comprobar_usuario.php" method="post" > 
				<div class="row">
					<div class="col-md-6">
						<label class="form-label"><b>Usuario: </b></label>
						<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ejemplo: Alumno">
						<span id="usuario_error">El usuario introducido es incorrecto</span>
					</div>
					<div class="col-md-6">
						<label class="form-label"><b>Password: </b></label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Ejemplo: Alumn@2020">
						<span id="password_error">La contraseña es incorrecta</span>
					</div>
				</div>				
				<div class="row">
					<button type="submit" id="boton" class="nav-link active" aria-current="page" >Logueate</button>
					<button type="submit" id="boton" class="nav-link active" ><a href="recuperarContrasena.php" class="nav-link">¿Olvidaste tu contraseña?</a></button>
				
				</div>	

			</form>
		</div>
	</div>

</div>

<?php include("./inc/footer.php")?>

<script type="text/javascript" src="js/login-js.js"></script>
</body>
</html>

