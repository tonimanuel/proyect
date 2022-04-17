<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOproducto.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Cogemos las variables que vamos a usar
	$idvideojuego = $_POST['idvideojuego'];	
	$idplataforma = $_POST['idplataforma'];
	$stock = $_POST['stock'];
	$precio = $_POST['precio'];

//utilizamos la funcion para insertar un producto
	$consulta = insertarproducto($conexion,$idvideojuego,$idplataforma,$stock,$precio);

//nos lleva a la pagina de productos para un user admin
	header('Location: productosadmin.php');

?>



