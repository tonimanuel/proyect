<?php
//Cargamos los archivos que vamos a usar
    require 'bd/conectorBD.php';
    require 'DAOusuarios.php';

//Usamos las variables que vamos a coger
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

//Nos conectamos a la base de datos y a la consulta
    $conexion = conectar(false);
    $consulta = consultaLogin($conexion, $usuario, $password);

//Recorre la consulta
    if(mysqli_num_rows($consulta) == 1){

        $fila = mysqli_fetch_assoc($consulta);
 
        crearSesion($fila);

//Nos muestra los datos
        header('Location: Home.php');
        
    } else {
    	
//Nos sale un error       
        header('Location: login.php');
    }

?>
