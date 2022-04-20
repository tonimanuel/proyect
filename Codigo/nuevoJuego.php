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
		<title>VideoJuegos</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body>

<?php include('./inc/header.php')?>

<div class="cuerpo">
<center>
<div class="card" id="card-login-grande" style="width: 18rem;">
	<div class="card-body" id="card-html">
	<center>
	<form action="nuevo_juego.php" method="POST" enctype="multipart/form-data">
		
		<label><b>Titulo: </b></label><br>
		<input type="text" name="titulo" id="titulo" class="form-control" placeholder="Ejemplo: The Legend Zelda">
		<span id="titulo_error">El titulo introducido no es valido</span><br>

		<label><b>Compañia: </b></label><br>
		<input type="text" name="compania" id="compania" class="form-control" placeholder="Ejemplo: Nintendo">
		<span id="compañia_error">La compañia introducida no es valida</span><br>

		<label><b>Fecha publicacion: </b></label><br>
		<input type="date" name="publicacion"><br>	
		
		<label><b>Descripcion: </b></label>
		<input type="text" name="descripcion"><br>

		<label><b>Imagen: </b></label>
		<input type="file" name="imagen"><br>

		<label><b>Stock: </b></label>
		<input type="number" id="stock" name="stock"><br>

		<label><b>Precio: </b></label>
		<input type="number" id="precio" name="precio" step="any"><br>
		
		<label><b>Plataforma: </b></label>
        <select id="idPlataforma" name="idPlataforma" required>

        <?php
                    require "bd/conectorBD.php";
                    require "DAOvideoconsola.php";
                    
                    $conexion = conectar(false);

                    $result = mostrarconsola($conexion);

                    while($mostrar = mysqli_fetch_assoc($result)){
        ?>     

        			<option value="<?=$mostrar['idPlataforma']?>"><?=$mostrar['Nombre']?></option>

        <?php
              }
        ?>
        <br>
		<input type="submit" value="Añadir" name="btnregistrar">
		<input type="hidden" name="idVideojuego" value="<?php echo $idVideojuego?>">

	</form>
	
</div>
</div>
</center>
</div>	

<?php include("./inc/footer.php")?>

<script type="text/javascript" src="js/nuevojuego.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="../JavaScript/Videojuego.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

