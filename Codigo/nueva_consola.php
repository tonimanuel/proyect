<?php
//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOvideoconsola.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Cogemos las variables que vamos a usar
	$nombre = $_POST['nombre'];
	$lanzamiento = $_POST['lanzamiento'];	
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];
	$descripcion = $_POST['descripcion'];

//coge el nombre de la imagen que hemos insertado nueva
	$nombreimagen=$_FILES['imagen']['name'];

//aqui saldría el nombre de la imagen temporal
    $imagen=$_FILES['imagen']['tmp_name'];

//la ruta a la que iria la imagen
    $rutaimagen="imagenes/".$nombreimagen;

//y como se mueve el archivo a la ruta especificada   
	move_uploaded_file($imagen,$rutaimagen);

//coge el nombre del logo que hemos insertado nueva
	$nombrelogo=$_FILES['logo']['name'];

//aqui saldría el nombre del logo temporal
    $logo=$_FILES['logo']['tmp_name'];

//la ruta a la que iria el logo
    $rutalogo="imagenes/".$nombrelogo;

//y como se mueve el logo a la ruta especificada  
	move_uploaded_file($logo,$rutalogo);

//utilizamos la funcion para insertar la consola
	$consulta = insertarconsola($conexion,$nombre,$lanzamiento,$precio,$stock,$descripcion,$rutaimagen,$rutalogo);
	
//nos lleva a la pagina de consola para un user admin
	header('Location: videoconsolasadmin.php');

?>




