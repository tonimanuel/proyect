<?php
//Cargamos los archivos que vamos a usar
require 'bd/conectorBD.php';
require 'DAOusuarios.php';

//Usamos las variables que vamos a coger
 $dni = $_POST['dni'];

//Nos conectamos a la base de datos y hacemos una consulta
  $conexion = conectar(false);
  $consulta = recuperar($conexion, $dni);


//Recorre la consulta
    if(mysqli_num_rows($consulta) == 1){

        $fila = mysqli_fetch_assoc($consulta);
 
        crearSesion($fila);

        header('Location: contrasenaNueva.php');
        
    } else{
    	
        header('Location: login.php');
    }


?>