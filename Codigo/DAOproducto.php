 <?php

//Funcion que nos permite añadir un producto en nuestra base de datos

    function insertarproducto($conexion,$idvideojuego,$idplataforma,$stock,$precio){
        $consulta = "INSERT INTO `tiendaonline`.`productos` (`IdVideojuego`, `IdPlataforma`, `Stock`, `Precio`) VALUES ('$idvideojuego', '$idplataforma', '$stock', '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite borrar un producto en nuestra base de datos

    function borrarproducto($conexion,$idproductos){
        $consulta = "DELETE FROM `tiendaonline`.`productos` WHERE (`idProductos` = '$idproductos')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite modificar un producto en nuestra base de datos

    function modificarproducto($conexion,$idvideojuego,$idplataforma,$stock,$precio,$idproductos){
        $consulta = "UPDATE `tiendaonline`.`productos` SET `IdVideojuego` = '$idvideojuego', `IdPlataforma` = '$idplataforma', `Stock` = '$stock', `Precio` = '$precio' WHERE (`idProductos` = '$idproductos')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que nos permite mostrar los productos de nuestra base de datos
    function mostrarproductos($conexion){
        $consulta = "SELECT * FROM `productos`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para filtrar los productos en nuestro catalogo
   function filtrarproductoVideojuego($conexion, $id){
        $consulta = "SELECT Productos.idProductos, Plataforma.idPlataforma, Plataforma.Logo, Videojuego.idVideojuego, Videojuego.Titulo, Videojuego.Imagen, Videojuego.Compania, Videojuego.Publicacion FROM tiendaonline.Productos INNER JOIN tiendaonline.videojuego INNER JOIN tiendaonline.plataforma ON Productos.IdVideojuego = Videojuego.idVideojuego AND Productos.IdPlataforma = Plataforma.idPlataforma WHERE Productos.IdPlataforma = $id";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

  function filtrarproductoplataforma($conexion, $id){
        $consulta = "SELECT Productos.idProductos, Videojuego.idVideojuego, Plataforma.idPlataforma, Plataforma.Imagen, Plataforma.Nombre, Plataforma.Lanzamiento, Plataforma.Precio, Plataforma.Stock FROM tiendaonline.Productos INNER JOIN tiendaonline.Plataforma INNER JOIN tiendaonline.Videojuego ON Productos.IdPlataforma = Plataforma.idPlataforma AND Productos.IdVideojuego = Videojuego.idVideojuego WHERE Productos.IdVideojuego = $id";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>    
