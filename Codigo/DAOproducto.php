 <?php
function consultaItem($conexion,$idCesta){
    $consulta = "select * from Item where idCesta='$idCesta'";
    $resultado = mysqli_query($conexion,$consulta);
    return $resultado;
}

//Funcion que nos permite añadir una plataforma a la cesta
function insertarPlataformaCarrito($conexion,$idCesta,$idCliente,$idItem,$Cantidad,$PrecioItem,$idProducto){
    $consulta = "INSERT IGNORE Cesta(idCesta, idCliente) values ('$idCesta','$idCliente')";
    $resultado = mysqli_query($conexion,$consulta);
    $consulta2="INSERT INTO Item (idItem, Cantidad, PrecioItem, idCesta) values ('$idItem','$Cantidad','$PrecioItem','$idCesta')";
    $resultado2=mysqli_query($conexion,$consulta2);
    $consulta3="update plataforma set Stock=Stock-$Cantidad where idPlataforma='$idProducto'";
    $resultado3=mysqli_query($conexion,$consulta3);
    $precioT=$PrecioItem*$Cantidad;
    $consulta4="UPDATE `cesta` SET `PrecioTotal`=`PrecioTotal`+$precioT where `cesta`.`idCesta` = $idCesta";
    $resultado4=mysqli_query($conexion,$consulta4);
    return $resultado4;
}

//Funcion que añade un videojuego al carrito
function insertarJuegoCarrito($conexion,$idCesta,$idCliente,$idItem,$Cantidad,$PrecioItem,$idProducto){
    $consulta = "INSERT IGNORE Cesta(idCesta, idCliente) values ('$idCesta','$idCliente')";
    $resultado = mysqli_query($conexion,$consulta);
    $consulta2="INSERT INTO Item (idItem, Cantidad, PrecioItem, idCesta) values ('$idItem','$Cantidad','$PrecioItem','$idCesta')";
    $resultado2=mysqli_query($conexion,$consulta2);
    $consulta3="update videojuego set Stock=Stock-$Cantidad where idVideojuego='$idProducto'";
    $resultado3=mysqli_query($conexion,$consulta3);
    $precioT=floatval($PrecioItem*$Cantidad);
    $consulta4="UPDATE `cesta` SET `PrecioTotal`=`PrecioTotal`+$precioT WHERE `cesta`.`idCesta` = $idCesta";
    $resultado4=mysqli_query($conexion,$consulta4);
    return $resultado;
}
//Funcion que elimina un juego de la cesta en la base de datos
function eliminarJuegoCesta($conexion,$idItem,$idJuego,$precio,$cantidad,$idCesta){
    $consulta = "DELETE FROM item WHERE `item`.`id` = $idItem";
    $resultado = mysqli_query($conexion, $consulta);
    $consulta1 = "UPDATE `cesta` SET `PrecioTotal` = PrecioTotal-($cantidad*$precio)  WHERE `cesta`.`idCesta` = $idCesta";
    $resultado1 = mysqli_query($conexion, $consulta1);
    $consulta2 = "UPDATE `videojuego` SET `Stock` = $cantidad WHERE `videojuego`.`idVideojuego` = $idJuego";
    $resultado2 = mysqli_query($conexion, $consulta2);
    return $resultado;
}
function eliminarPlataformaCesta($conexion,$idItem,$idPlataforma,$precio,$cantidad,$idCesta){
    $consulta = "DELETE FROM item WHERE `item`.`id` = $idItem";
    $resultado = mysqli_query($conexion, $consulta);
    $consulta1 = "UPDATE `cesta` SET `PrecioTotal` = PrecioTotal-($cantidad*$precio)  WHERE `cesta`.`idCesta` = $idCesta";
    $resultado1 = mysqli_query($conexion, $consulta1);
    $consulta2 = "UPDATE `plataforma` SET `Stock` =`Stock`+$cantidad WHERE `plataforma`.`idPlataforma` = $idPlataforma";
    $resultado2 = mysqli_query($conexion, $consulta2);
    return $resultado;
}
//Funcion que nos permite borrar un producto en nuestra base de datos
function consultaPrecioCesta($conexion,$idCesta){
    $consulta = "SELECT PrecioTotal from cesta WHERE idCesta=$idCesta";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}
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
