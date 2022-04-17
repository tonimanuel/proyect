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
	$idproductos = $_POST['idproductos'];

//utilizamos la funcion para modificar el producto
	$consulta = modificarproducto($conexion,$idvideojuego,$idplataforma,$stock,$precio,$idproductos);

//nos lleva a la pagina de producto para un user admin
	header('Location: productosadmin.php');

?>


