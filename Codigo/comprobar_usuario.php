<?php
//Cargamos los archivos que vamos a usar
    require 'bd/conectorBD.php';
    require 'DAOusuarios.php';

//Usamos las variables que vamos a coger
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

//Nos conectamos a la base de datos y a la consulta
    $conexion = conectar(false);
    
//Hacemos la consulta
$existeUsuario = consultaLogin($conexion,$usuario,$password);
//Hacemos la consulta del usuario para saber si no se acuerda de la contraseña
//Comprobamos si existe el usuario
$existeSoloUsuario=consultaUsuario($conexion, $usuario);
if(mysqli_num_rows($existeUsuario)==1){
    $fila = mysqli_fetch_assoc($existeUsuario);
    foreach($fila as $atributo=>$valor){
        echo $atributo." : ".$valor." <br>";
    }
    crearSesion($fila);
    header('Location: Home.php');
}else{
    if(mysqli_num_rows($existeSoloUsuario)==1){
        
        header('Location: login.php');
    }else{

        header('Location: ingresarUsuario.php');
    }
    
}

?>
