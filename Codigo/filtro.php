<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Videojuegos Disponibles</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity=" sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
    </head>

    <body>

    <?php include("./inc/header.php")?>

    <div class="cuerpo">

        <div>

            <?php
                require 'bd/conectorBD.php';
                require "DAOproducto.php";

                $conexion = conectar(false);

                $id = $_GET["id"];

                $result = filtrarproductoVideojuego($conexion, $id);

                while($fila = mysqli_fetch_array($result)){

            ?>
                <div class="card" id="carta-filtro" style="width: 25.5rem;">
                    <img class="logo-filtro" src="<?php echo $fila['Logo'] ?>" class="card-img-top">
                    <img class="imagen-filtro" src="<?php echo $fila['Imagen'] ?>" class="card-img-top">
                        <div class="card-body" text-align="center">
                            <h5 class="card-title" text-align="center" id="titulo-tarjetas"><b> <?php echo $fila['Titulo'] ?> </b></h5>
                                <p class="card-text" text-align="center" id="titulo-tarjetas"><b> <?php echo $fila['Compania'] ?> </b></p>                        
                    </div>

                    <td>
                            <ul class="nav justify-content-center">
                                <li class="nav-item" id="botones">
                                    <a class="nav-link active" aria-current="page" href="detallesjuego.php?idVideojuego=<?php echo $fila['idVideojuego']; ?>" value="Comprar" name="Comprar">Ver Detalles</a>
                                 </li>
                            </ul>
                    </td>
                            
    </div>

            <?php

                }

            ?>

        </div>


        <div><br>
            <ul class="nav justify-content-center">
                    <li class="nav-item" id="botones">
                            <a href="videoconsolasusuario.php">Volver a Consolas</a></button>
                    </li>
            </ul>
        <div>

        </div>
<?php include("./inc/footer.php")?>

<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>