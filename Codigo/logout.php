<?php  

//Inciamos la sesion
	session_start();

//Destruimos la sesion
	session_destroy();

//Volvemos a la pagina principal (La del inicio)
	header('Location: Home.php');

?>