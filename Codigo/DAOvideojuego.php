<?php 

//Funcion que nos permite añadir un juego en nuestra base de datos

    function insertarjuego($conexion,$titulo,$compania,$publicacion,$descripcion,$imagen){
        $consulta = "INSERT INTO `tiendaonline`.`videojuego` (`Titulo`, `Compania`, `Publicacion`, `Descripcion`, `Imagen`) VALUES ('$titulo', '$compania', '$publicacion', '$descripcion', '$imagen')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite modificar un juego en nuestra base de datos
    function modificarjuego($conexion,$titulo,$compania,$publicacion,$descripcion,$idVideojuego,$imagen){
        $consulta = "UPDATE `tiendaonline`.`videojuego` SET `Titulo` = '$titulo', `Compania` = '$compania', `Publicacion` = '$publicacion', `Descripcion` = '$descripcion', `Imagen` = '$imagen' WHERE (`idVideojuego` = '$idVideojuego')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite borrar un juego en nuestra base de datos
    function borrarjuego($conexion,$idVideojuego){
        $consulta = "DELETE FROM `tiendaonline`.`videojuego` WHERE (`idVideojuego` = '$idVideojuego')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite mostrar los juegos de nuestra base de datos
    function mostrarvideojuego($conexion){
        $consulta = "SELECT * FROM `videojuego`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite enseñar los juegos de nuestra base de datos en el carrusel de forma aleatoria y con un tamaño de 4
    function ensenarVideojuego($conexion){
        $consulta = "SELECT idVideojuego, Imagen FROM videojuego ORDER BY rand() LIMIT 4";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion usada para mostrar un juego en especifico y para la funcion de editar sus roles
    function ensenarjuegoporid($conexion,$idVideojuego){
        $consulta = "SELECT * FROM `videojuego` WHERE (`idVideojuego` = '$idVideojuego')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
//Funcion usada para mostrar un juego en especifico y para la funcion de editar sus roles
function eliminarComentarioJuego($conexion,$idComentario){
    $consulta = "DELETE FROM comentariovideojuego WHERE `comentariovideojuego`.`idComentario` = $idComentario";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}

//Funcion para insertar un videojuego con su producto
    function insertarproductoo($conexion, $ultimoID, $idPlataforma, $stock, $precio){
        $consulta = "INSERT INTO productos(IdVideojuego, IdPlataforma, Stock, Precio) VALUES('$ultimoID', '$idPlataforma', '$stock', '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    
 ?>
