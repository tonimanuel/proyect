<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';
//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Y cogemos el id de productos por que lo vamos a necesitar
	$idUsuario = $_GET['idUsuario'];

//Usamos una funcion que nos permite borrar un producto fijandonos en un id
	borrarusuario($conexion,$idUsuario);

//Nos lleva a la pagina de productos del admin
	header('Location: panel.php');

?>