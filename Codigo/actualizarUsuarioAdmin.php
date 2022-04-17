<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Y cogemos el id de productos por que lo vamos a necesitar
	$idUsuario = $_GET['idUsuario'];
	$consulta = enseñarusuarioporid($conexion,$idUsuario);
	$fila = mysqli_fetch_assoc($consulta);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Actualizar Usuario</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body>

<?php include('./inc/header.php'); ?>

<div class="cuerpo">

	<center>
<div class="card" id="card-login-grande" style="width: 18rem;">
	<div class="card-body" id="card-html">
		
	<form action="modificar_usuario_admin.php" method="POST" enctype="multipart/form-data">
		
		<b>Usuario: </b><input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ejemplo: Alumno23" value="<?php echo $fila['Usuario'] ?>"><br>
		<span id="usuario_error">El usuario introducido no es valido</span><br>


		<b>Password: </b><input type="text" name="password" id="password" class="form-control" placeholder="Ejemplo: Alumn@2020" value="<?php echo $fila['Password'] ?>"><br>
		<span id="password_error">La contraseña introducida no es valida</span><br>

		<b>Nombre: </b><input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ejemplo: Daniel" value="<?php echo $fila['Nombre'] ?>"><br>
		<span id="nombre_error">El Nombre introducido no es valido</span><br>

		<b>Apellido1: </b><input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="Ejemplo: Ortiz" value="<?php echo $fila['Apellido1'] ?>"><br>
		<span id="apellido1_error">Lo introducido no es un apellido</span><br>

		<b>Apellido2: </b><input type="text" name="apellido2" id="apellido2" class="form-control" placeholder="Ejemplo: Jimenez" value="<?php echo $fila['Apellido2'] ?>"><br>
		<span id="apellido2_error">Lo introducido no es un apellido</span>

		<b>Telefono: </b><input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ejemplo: 678485671" value="<?php echo $fila['Telefono'] ?>"><br>
		<span id="telefono_error">El numero de telefono introducido no es valido</span><br>

		<b>Email: </b><input type="text" name="email" id="email"  class="form-control" placeholder="Ejemplo: mcmartigan3turq@gmail.com" value="<?php echo $fila['Email'] ?>"><br>
		<span id="email_error">El email introducido no es valido</span><br>

		<b>CP: </b><input type="text" name="cp" id="cp" class="form-control" placeholder="Ejemplo: 52005" value="<?php echo $fila['cp'] ?>"><br>
		<span id="cp_error">El CP introducido no es valido</span><br>

		<b>Provincia: </b><input type="text" name="provincia" id="provincia" class="form-control" placeholder="Ejemplo: Melilla"  value="<?php echo $fila['Provincia'] ?>"><br>
		<span id="provincia_error">Lo introducido no concuerda con ninguna pronvicia</span><br>

		<b>ComunidadAutonoma: </b><input type="text" name="comunidadautonoma" id="comunidadautonoma"  class="form-control" placeholder="Ejemplo: Melilla"  value="<?php echo $fila['ComunidadAutonoma'] ?>"><br>
		<span id="comunidadautonoma_error">Lo introducido no concuerda con ninguna comunidad autonoma</span><br>

		<b>Rol: </b><input type="text" name="rol" id="rol"  class="form-control" placeholder="Ejemplo: usuario/admin"  value="<?php echo $fila['Rol'] ?>"><br>
		<span id="rol_error">El Rol introducido no es correcto</span><br>

		<b>Dni: </b><input type="text" name="dni" id="dni"  class="form-control" placeholder="Ejemplo: 45314598k"  value="<?php echo $fila['Dni'] ?>"><br>
		<span id="dni_error">El Dni introducido no es correcto</span><br>

		
		<input type="submit" value="Actualizar" name="btnregistrar"><br>
		<input type="hidden"  name="idUsuario" value="<?php echo $idUsuario ?>"><br>
	</form>
	</center>

	</div>
</div>

</div>

<?php include('./inc/footer.php'); ?>

<script type="text/javascript" src="js/añadirusuario.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>

