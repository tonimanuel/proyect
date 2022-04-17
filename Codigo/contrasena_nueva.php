<?php 

//Cargamos los archivos que vamos a usar
require 'bd/conectorBD.php';
require 'DAOusuarios.php';

//iniciamos la sesion
session_start();

//Nos conectamos a la base de datos 
$conexion = conectar(false);

//cogemos el valor que hemos metido en el campo del email
$correo = $_SESSION['Email'];

//cogemos el valor que hemos metido en el campo de la nueva contraseña
$contraseñaN = $_POST['contraseña_nueva'];

//Uso de funciones
modificarUsuarios($conexion, $contraseñaN, $correo);

//Nos lleva al a pagina para loguearnos
header('Location: login.php');

 ?>