<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOproducto.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Y cogemos el id de productos por que lo vamos a necesitar
	$idproductos = $_GET['idProductos'];

//Usamos una funcion que nos permite borrar un producto fijandonos en un id
	$consulta = borrarproducto($conexion,$idproductos);

//Nos lleva a la pagina de productos del admin
	header('Location: productosadmin.php');

?>