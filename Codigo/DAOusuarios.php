<?php
function consultaUsuario($conexion,$usuario){
    $consulta = "Select * from usuario WHERE  Usuario = '$usuario'";
    $resultado = mysqli_query($conexion,$consulta);
    return $resultado;
}
//Funcion para ver si el usuario y la contraseña son ciertas y así poder ver sus datos
    function consultaLogin($conexion, $usuario, $password){
        $consulta = "SELECT * FROM usuario WHERE Usuario = '$usuario' AND Password = '$password'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function usuarioRecuperar($conexion,$dni){
        $consulta = "SELECT * FROM `usuario` WHERE Dni='$dni'" ;
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function cambiarContra($conexion,$contra,$id){
        $consulta = "UPDATE `usuario` SET `Password` = '$contra' WHERE `idUsuario` = $id" ;
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
//Funcion para insertar un usuario, la usamos para registrar un usuario a la pagina web
    function insertarUsuarios($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono, $email, $cp, $provincia, $comunidadautonoma,$dni){
        $consulta = "INSERT INTO usuario (`Usuario`, `Password`, `Nombre`, `Apellido1`, `Apellido2`, `Telefono`, `Email`, `CP`, `Provincia`, `ComunidadAutonoma`, `Dni` ,`Rol`) VALUES ('$usuario','$password','$nombre','$apellido1','$apellido2','$telefono', '$email', '$cp', '$provincia', '$comunidadautonoma', '$dni' ,'usuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function insertarUsuariosAdmin($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono, $email, $cp, $provincia, $comunidadautonoma,$dni,$rol){
        $consulta = "INSERT INTO usuario (`Usuario`, `Password`, `Nombre`, `Apellido1`, `Apellido2`, `Telefono`, `Email`, `CP`, `Provincia`, `ComunidadAutonoma`, `Dni` ,`Rol`) VALUES ('$usuario','$password','$nombre','$apellido1','$apellido2','$telefono', '$email', '$cp', '$provincia', '$comunidadautonoma', '$dni' ,'$rol')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
//Funcion para modificar el usuario, le damos los parametros para conectarnos a la BD, la contraseña y el id del usuario que vamos a cambiar
    function modificarUsuarios($conexion, $password, $correo){
        $consulta = "UPDATE usuario SET `Password` = '$password' WHERE (`Email` = '$correo') ";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para crear la sesion dandole un nombre de usuario
    function crearSesion($usuario){
        session_id($usuario['idUsuarios']);
        session_start();
        $_SESSION['idUsuario'] = $usuario['idUsuario'];
        $_SESSION['Usuario'] = $usuario['Usuario'];
        $_SESSION['Password'] = $usuario['Password'];
        $_SESSION['Nombre'] = $usuario['Nombre'];
        $_SESSION['Apellido1'] = $usuario['Apellido1'];
        $_SESSION['Apellido2'] = $usuario['Apellido2'];
        $_SESSION['Telefono'] = $usuario['Telefono'];
        $_SESSION['Email'] = $usuario['Email'];
        $_SESSION['CP'] = $usuario['CP'];
        $_SESSION['Provincia'] = $usuario['Provincia'];
        $_SESSION['ComunidadAutonoma'] = $usuario['ComunidadAutonoma'];
        $_SESSION['Rol'] = $usuario['Rol'];
    }

//Funcion que nos ayuda a recuperar la contraseña dandole el email
    function recuperar($conexion, $dni){
         $consulta = "SELECT * FROM usuario WHERE Dni = '$dni' ";
         $resultado = mysqli_query($conexion, $consulta);
         return $resultado;
    }

    function obtenerUsuarios($conexion){
         $consulta = "SELECT * FROM usuario" ;
         $resultado = mysqli_query($conexion, $consulta);
         return $resultado;
    }

    function adminModificaUsuario($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono,$email,$cp,$provincia,$comunidadautonoma,$dni,$rol,$idUsuario){
       $consulta = "UPDATE `tiendaonline`.`usuario` SET `Usuario` = '$usuario', `Password` = '$password', `Nombre` = '$nombre', `Apellido1` = '$apellido1', `Apellido2` = '$apellido2', `Telefono` = '$telefono', `Email` = '$email', `CP` = '$cp', `Provincia` = '$provincia', `ComunidadAutonoma` = '$comunidadautonoma', `Dni` = '$dni', 
       `Rol` = '$rol' WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function borrarusuario($conexion,$idUsuario){
        $consulta = "DELETE FROM `tiendaonline`.`usuario` WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

     function usuarioModificaUsuario($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono,$email,$cp,$provincia,$comunidadautonoma,$dni,$idUsuario){
       $consulta = " UPDATE `tiendaonline`.`usuario` SET `Usuario` = '$usuario', `Password` = '$password', `Nombre` = '$nombre', `Apellido1` = '$apellido1', `Apellido2` = '$apellido2', `Telefono` = '$telefono', `Email` = '$email', `CP` = '$cp', `Provincia` = '$provincia', `ComunidadAutonoma` = '$comunidadautonoma', `Dni` = '$dni', `Rol` = 'usuario' WHERE `idUsuario` = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function ensenarusuarioporid($conexion,$idUsuario){
        $consulta = "SELECT * FROM `usuario` WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>