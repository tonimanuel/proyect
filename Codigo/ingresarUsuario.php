<!DOCTYPE html>
<html>
<head>
	<title>Registrate: </title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>
</head>

<body>

<?php include("./inc/headerSimple.php")?>

<div class="cuerpo">

<div class="card" id="card-ingresar">
<div class="card-body" id="card-ingresar-body">	
<form class="row g-3" action="ingresar_usuario.php" method="post" name="formulario">
	<div class="row">
		<div class="col-md-6">
			<label class="form-label"><b>Usuario: </b></label>
			<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ejemplo: Alumno23">
			<span id="usuario_error">El usuario introducido no es valido</span>
		</div>

		<div class="col-md-6">
			<label class="form-label"><b>Password: </b></label>
			<input type="text" name="password" id="password" class="form-control" placeholder="Ejemplo: Alumn@2020">
			<span id="password_error">La contraseña introducida no es valida</span>
	    </div>
    </div>
	<div class="row">
	    <div class="col-md-6">
			<label class="form-label"><b>Nombre: </b></label>
			<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ejemplo: Daniel">
			<span id="nombre_error">El Nombre introducido no es valido</span>
		</div>

		<div class="col-md-6">
			<label class="form-label"><b>Primer Apellido: </b></label>
			<input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="Ejemplo: Ortiz">
			<span id="apellido1_error">Lo introducido no es un apellido</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label class="form-label"><b>Segundo Apellido: </b></label>
			<input type="text" name="apellido2" id="apellido2" class="form-control" placeholder="Ejemplo: Jimenez">
			<span id="apellido2_error">Lo introducido no es un apellido</span>
		</div>

		<div class="col-md-6">
			<label class="form-label"><b>Telefono: </b></label>
			<input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ejemplo: 678485671">
			<span id="telefono_error">El numero de telefono introducido no es valido</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label class="form-label"><b>Email: </b></label>
			<input type="text" name="email" id="email"  class="form-control" placeholder="Ejemplo: mcmartigan3turq@gmail.com">
			<span id="email_error">El email introducido no es valido</span>
		</div>

		<div class="col-md-6">
			<label class="form-label"><b>CP: </b></label>
			<input type="text" name="cp" id="cp" class="form-control" placeholder="Ejemplo: 52005">
			<span id="cp_error">El CP introducido no es valido</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label class="form-label"><b>Provincia: </b></label>
			<input type="text" name="provincia" id="provincia" class="form-control" placeholder="Ejemplo: Melilla">
			<span id="provincia_error">Lo introducido no concuerda con ninguna pronvicia</span>
		</div>

		<div class="col-md-6">
			<label class="form-label"><b>Comunidad Autonoma:</b></label>
			<input type="text" name="comunidadautonoma" id="comunidadautonoma"  class="form-control" placeholder="Ejemplo: Melilla">
			<span id="comunidadautonoma_error">Lo introducido no concuerda con ninguna comunidad autonoma</span>
	    </div>
    </div>
	<div class="row">
	    <div class="col-md-6">
			<label class="form-label"><b>Dni:</b></label>
			<input type="text" name="dni" id="dni"  class="form-control" placeholder="Ejemplo: 45314598k">
			<span id="dni_error">El Dni introducido no es correcto</span>
	    </div>
    </div>
	
	<div class="row">
		<button type="submit" id="boton" class="btn btn-primary">Ingresar</button>
	</div>
</form>
</div>

	
</div>

<?php include("./inc/footer.php")?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/ingresar_usuario.js"></script>
</body>
</html>