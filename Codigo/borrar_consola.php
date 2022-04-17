<?php
//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOvideoconsola.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Y cogemos el id de consola por que lo vamos a necesitar
	$idPlataforma = $_POST['idPlataforma'];
	
//Usamos una funcion que nos permite borrar una consola fijandonos en un id
	$consulta = borrarconsola($conexion,$idPlataforma);

//Nos lleva a la pagina de las consolas del admin
	header('Location: videoconsolasadmin.php');

?>