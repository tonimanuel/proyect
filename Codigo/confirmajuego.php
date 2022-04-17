<?php
    require 'bd/conectorBD.php';
    require 'DAOvideojuego.php';

    $conexion = conectar(false);
    $idVideojuego = $_GET["idVideojuego"];
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eliminar juego</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

<body>

    
<?php include('./inc/header.php')?>

    <div class="cuerpo">

<div class="card" id="card-login">
    <div class="card-body">
            <form action="borrar_juego.php" method="POST" enctype="multipart/form-data">
                <h1>  ¿Seguro quieres seguir con la accion? </h1>
                <br>
                <input type="submit" value="Confirmar" name="confirmar" id="botones">
                <input type="hidden" name="idVideojuego" id="botones" value="<?php echo $idVideojuego?>">
                <br>
                <a href="videojuegosadmin.php" id="botones" >Cancelar</a>
            </form>
        </div>
</div>

</div>


<?php include('./inc/footer.php')?>

        </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>