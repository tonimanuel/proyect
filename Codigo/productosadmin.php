<?php
	session_start();
    if ($_SESSION['Rol'] != "admin") {
    	header("Location: Home.php");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Productos</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body>
	<?php include('./inc/header.php');?>
<ul class="nav justify-content-center">
		  <li class="nav-item" id="botones">
		    	<a class="nav-link active" aria-current="page" href="nuevoProducto.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  				<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
				</svg>
		    	Añadir Producto</a>
		  </li>
		</ul>
<div class="cuerpo">

	<center>
	<table border="1" class="table table-striped table-dark">

		<tr>
			<th>idProductos</th>
			<th>IdVideojuego</th>
			<th>IdPlataforma</th>
			<th>Stock</th>
			<th>Precio</th>
			<th>Acción</th>
		</tr>

		<?php 

//Cogemos los archivos que vamos a necesitar
		require 'bd/conectorBD.php';
		require 'DAOusuarios.php';
		require 'DAOproducto.php';

//Nos conectamos a la base de datos
		$conexion = conectar(false);

//utilizamos la funcion para mostrar los prodcutos
		$result = mostrarproductos($conexion);

		//recorre la consulta entera
		while ($fila=mysqli_fetch_array($result)) {

		?>

		<tr>
			<td><b> <?php echo $fila['idProductos'] ?> </b></td>
			<td><b> <?php echo $fila['IdVideojuego'] ?> </b></td>
			<td><b> <?php echo $fila['IdPlataforma'] ?> </b></td>
			<td><b> <?php echo $fila['Stock'] ?> </b></td>
			<td><b> <?php echo $fila['Precio'] ?> </b></td>

			<td>
				<ul class="nav justify-content-center">
			  		<li class="nav-item" id="botones">
			    			<a class="nav-link active" aria-current="page" href="borrar_producto.php?idProductos=<?php echo $fila['idProductos']; ?>" value="Eliminar" name="Eliminar">Eliminar</a>
			  		</li>

			  		<li class="nav-item" id="botones">
			    		<a class="nav-link active" aria-current="page" href="actualizarProducto.php?idProductos=<?php echo $fila['idProductos']; ?>" value="Modificar" name="Modificar">Modificar</a>
			  		</li>
				</ul>
			</td>

		</tr>

		<?php

		}

		?>

	</table>
	</center>

</div>

<?php include("./inc/footer.php")?>
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>