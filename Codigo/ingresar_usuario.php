<?php 

//Cogemos archivos que vamos a usar
require 'bd/conectorBD.php';
require 'DAOusuarios.php';

//Usamos las variables que vamos a coger
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


//Nos conectamos a la base de datos
 $conexion = conectar(false);

//usamos la funcion para añadir usuarios nuevos a nuestra base de datos
 $consulta = insertarUsuarios($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono, $email, $cp, $provincia, $comunidadautonoma, $dni);

//Si la consulta es encontrada te lleva al principio, si no ees encontrada tee lleva a que te hagas un usuario
if($consulta){

   header('Location: login.php');

    } else {
   
   header('Location: ingresarUsuario.php');

 }

 ?>
