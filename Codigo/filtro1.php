<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plataformas Disponibles</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity=" sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
    </head>

<body>

    <?php include("./inc/header.php")?>

    <div class="cuerpo">

        <div class="row">

            <?php
                require 'bd/conectorBD.php';
                require "DAOproducto.php";

                $conexion = conectar(false);

                $id = $_GET["id"];

                $result = filtrarproductoplataforma($conexion, $id);

                while($fila = mysqli_fetch_array($result)){

            ?>
                <div class="card" id="carta-catalogo" style="width: 20rem;">
                    <img class="imagen-catalogo2-ñao" src="<?php echo $fila['Imagen'] ?>" class="card-img-top">
                        <div class="card-body">
                        <h5 class="card-title"><b> <?php echo $fila['Nombre'] ?> </b></h5><br>
                            <p class="card-text">Lanzamiento: <b> <?php echo $fila['Lanzamiento'] ?> </b></p>
                            <p class="card-text">Precio: <b> <?php echo $fila['Precio'] ?> </b></p>
                            <p class="card-text">Stock: <b> <?php echo $fila['Stock'] ?> </b></p>
                    </div>

                        <td>
                                <ul class="nav justify-content-center">
                                    <li class="nav-item botonns">
                                        <a class="nav-link active" aria-current="page" href="detallesconsolas.php?idPlataforma=<?php echo $fila['idPlataforma']; ?>" value="Comprar" name="Comprar">Ver Detalles</a>
                                    </li>
                                </ul>
                        </td>

                </div>

            <?php

                }

            ?>


        <div><br>
            <ul class="nav justify-content-center">
                    <li class="nav-item" id="botones">
                            <a href="videojuegosusuario.php">Volver a Videojuegos</a></button>
                    </li>
            </ul>
        <div>

        </div>

        </div>

   
<?php include("./inc/footer.php")?>

<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>