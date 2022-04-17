<?php  
//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOvideojuego.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Cogemos las variables que vamos a usar
	$titulo = $_POST['titulo'];
	$compania = $_POST['compania'];	
	$publicacion = $_POST['publicacion'];
	$descripcion = $_POST['descripcion'];
	$idVideojuego = $_POST['idVideojuego'];

//coge el nombre de la imagen que hemos insertado nueva
	$nombreimagen=$_FILES['imagen']['name'];

//aqui saldría el nombre de la imagen temporal
	$imagen=$_FILES['imagen']['tmp_name'];

//la ruta a la que iria la imagen
	$rutaimagen="imagenes/".$nombreimagen;

 //y como se mueve el archivo a la ruta especificada   
	move_uploaded_file($imagen,$rutaimagen);

//utilizamos la funcion para modificar el juego
	$consulta = modificarjuego($conexion,$titulo,$compania,$publicacion,$descripcion,$idVideojuego,$rutaimagen);

//nos lleva a la pagina de juegos para un user admin
	header('Location: videojuegosadmin.php');

?>

