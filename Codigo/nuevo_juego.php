<?php

//Cogemos los archivos que vamos a necesitar
    require "bd/conectorBD.php";
    require "DAOvideojuego.php";


    $conexion = conectar(false);

  //Cogemos las variables que vamos a usar  
    $titulo = $_POST["titulo"];
    $compania = $_POST["compania"];
    $publicacion = $_POST["publicacion"];
    $descripcion = $_POST["descripcion"];
    $imagen = $_POST["imagen"];
    $idPlataforma = $_POST["idPlataforma"];
    $stock = $_POST["stock"];
    $precio = $_POST["precio"];
//Usamos la consutla para añadir juego   
    $consulta = insertarjuego($conexion,$titulo,$compania,$publicacion,$descripcion,$imagen);

//Inserta el id  del ultimo videojuego creado en la base de datos
    $ultimoID = mysqli_insert_id($conexion);

//Usamos la consutla para añadir juego en una consola
    $consulta = insertarproductoo($conexion, $ultimoID, $idPlataforma, $stock, $precio);
//Nos redirecciona
    header("Location: videojuegosadmin.php");
?>