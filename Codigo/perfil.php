<?php 
//iniciamos la sesion
session_start();
	require 'DAOusuarios.php';
	require 'bd/conectorBD.php';
	$conexion = conectar(false); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Perfil</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body>

<?php include("./inc/header.php")?>

<div class="cuerpo" margin-top="10">

	<center>
	<table class="table table-striped table-dark">
		<div id="margen-tablas">
		<tr id="tr">
			<th>Nombre de Usuario</th>
			<th>Password</th>
			<th>Nombre</th>
			<th>Apellido 1</th>
			<th>Apellido 2</th>
			<th>Telefono</th>
			<th>Email</th>
			<th>CP</th>
			<th>Provincia</th>
			<th>Comunidad Autonoma</th>
			<th>Rol</th>
			<th>Modificar</th>
			<th>Dar de baja</th>
		</tr>
		<?php $consulta = ensenarusuarioporid($conexion,$_SESSION['idUsuario']);
		$fila = mysqli_fetch_assoc($consulta);
		?>
		<tr>
			<td><b> <?php echo $fila['Usuario']?> </b></td>
			<td><b> <?php echo $fila['Password']?> </b></td>
			<td><b> <?php echo $fila['Nombre']?> </b></td>
			<td><b> <?php echo $fila['Apellido1']?> </b></td>
			<td><b> <?php echo $fila['Apellido2']?> </b></td>
			<td><b> <?php echo $fila['Telefono']?> </b></td>
			<td><b> <?php echo $fila['Email']?> </b></td>
			<td><b> <?php echo $fila['CP']?> </b></td>
			<td><b> <?php echo $fila['Provincia']?> </b></td>
			<td><b> <?php echo $fila['ComunidadAutonoma']?> </b></td>
			<td><b> <?php echo $fila['Rol']?> </b></td>
			
			<td>
				<ul class="nav justify-content-center">
			  		<li class="nav-item" id="botones">
			    		<a class="nav-link active" aria-current="page" href="actualizarUsuario.php?idUsuario=<?php echo $_SESSION['idUsuario']; ?>" value="Actualizar" name="Actualizar">Modificar</a>
			  		</li>

			  		<li class="nav-item" id="botones">
			    		<a class="nav-link active" aria-current="page" href="borrar_usuario.php?idUsuario=<?php  echo $_SESSION['idUsuario'];?>" value="eliminar" name="eliminar" onclick="return ConfirmarEliminar()">Eliminar</a>
			  		</li>
				</ul>
			</td>

		</tr>
		</div>

	</table>
	</center>

</div>

<?php include("./inc/footer.php")?>

<script type="text/javascript" src="js/confirmar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>