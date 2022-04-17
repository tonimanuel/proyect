<?php
//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//inicimaos la session
    session_start();

    if ($_SESSION['Rol'] != "admin") {
    	header("Location: Home.php");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Panel</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	</head>

<body>
<?php include('./inc/header.php');?>

<div class="cuerpo">

	
	<div class="nav justify-content-center" id="botones">
		<a class="nav-item nav-link" aria-current="page" href="nuevoUsuario.php">Nuevo usuario</a>
	</div>
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th>IdUsuario</th>
				<th>Usuario</th>
				<th>Password</th>
				<th>Nombre</th>
				<th>Apellido1</th>
				<th>Apellido2</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>CP</th>
				<th>Provincia</th>
				<th>ComunidadAutonoma</th>
				<th>Rol</th>
				<th>Dni</th>
				<th>Acción</th>
			</tr>	
		</thead>

		<tbody>
			<?php  

			//Nos conectamos a la base de datos
				 $conexion = conectar(false);

			//usamos la funcion para coger los usuarios de nuestra base de datos
				 $result = obtenerUsuarios($conexion);

				 //recorremos la consulta
				 while ($fila = mysqli_fetch_assoc($result)) {?>

				 	<tr>

				 		<?php foreach ($fila as $key => $value) {?>

				 			<td id="td"> <?= $value ?> </td>
				 		
				 		<?php
				 			
				 			}

				 		?>
				 			<td>
								<ul class="nav justify-content-center">
							  		<li class="nav-item" id="botones">
							    		<a class="nav-link active" aria-current="page" href="actualizarUsuarioAdmin.php?idUsuario=<?php echo $fila['idUsuario']; ?>" value="Actualizar" name="Actualizar">Modificar</a>
							  		</li>
								
									<li class="nav-item" id="botones">
							    		<a  class="nav-link" href="borrar_usuarioAdmin.php?idUsuario=<?php  echo $fila['idUsuario'];?>" value="eliminar" name="eliminar" onclick="return ConfirmarEliminar()">Eliminar</a>
									</li>
								</ul>
								
							</td>

				 	</tr>

				 		<?php
					
							}

						?>
		</tbody>
	</table>
</div>

<?php include("./inc/footer.php")?>

<script type="text/javascript" src="js/confirmar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>