<?php
//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOvideojuego.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Y cogemos el id de videojuegos por que lo vamos a necesitar
	$idVideojuego = $_GET['idVideojuego'];
	
//Usamos una funcion que nos permite borrar un juego fijandonos en un id
	$consulta =  borrarjuego($conexion,$idVideojuego);

//Nos lleva a la pagina de videojuegos del admin
	header('Location: videojuegosadmin.php');

?>

