<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos
	$conexion = conectar(false);

//Cogemos las variables que vamos a usar
	$usuario = $_POST['usuario'];	
	$password = $_POST['password'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];	
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$cp = $_POST['cp'];
	$provincia = $_POST['provincia'];	
	$comunidadautonoma = $_POST['comunidadautonoma'];
	$dni = $_POST['dni'];
	$rol = $_POST['rol'];

//utilizamos la funcion para insertar un producto
	$consulta = insertarUsuariosAdmin($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono, $email, $cp, $provincia, $comunidadautonoma,$dni,$rol);

//nos lleva a la pagina de productos para un user admin
	header('Location: Home.php');

?>