<?php  

//Funcion que nos permite añadir una consola en nuestra base de datos

	function insertarconsola($conexion,$nombre,$lanzamiento,$precio,$stock,$descripcion,$imagen,$logo){
        $consulta = "INSERT INTO plataforma (`Nombre`, `Lanzamiento`, `Precio`, `Stock`, `Descripcion`,`Imagen`,`Logo`) VALUES ('$nombre', '$lanzamiento', '$precio', '$stock', '$descripcion', '$imagen','$logo')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite borrar una consola en nuestra base de datos
    function borrarconsola($conexion,$idconsola){
        $consulta = "DELETE FROM `tiendaonline`.`plataforma` WHERE (`idPlataforma` = '$idconsola')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite modificar una consola en nuestra base de datos
    function modificarconsola($conexion,$nombre,$lanzamiento,$precio,$stock,$descripcion,$idconsola,$imagen,$logo){
        $consulta = "UPDATE `tiendaonline`.`plataforma` SET `Nombre` = '$nombre', `Lanzamiento` = '$lanzamiento', `Precio` = '$precio', `Stock` = '$stock', `Descripcion` = '$descripcion', `Imagen` = '$imagen', `Logo` = '$logo'  WHERE (`idPlataforma` = '$idconsola')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite mostrar las consolas de nuestra base de datos
    function mostrarconsola($conexion){
        $consulta = "SELECT * FROM `plataforma`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite enseñar las consolas de nuestra base de datos en el carrusel de forma aleatoria y con un tamaño de 4
    function ensenarPlataforma($conexion){
        $consulta = "SELECT idPlataforma, Imagen FROM plataforma ORDER BY rand() LIMIT 4";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite mostrar los datos de una consola por su id
     function ensenarconsolaporid($conexion,$idPlataforma){
        $consulta = "SELECT * FROM `plataforma` WHERE (`idPlataforma` = '$idPlataforma')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

      function logo($conexion,$idPlataforma){
        $consulta = "SELECT `Logo` FROM `plataforma` WHERE (`idPlataforma` = '$idPlataforma')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }



?>
