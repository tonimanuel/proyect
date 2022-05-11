<?php
session_start();
//Iniciamos la sesion	
require 'bd/conectorBD.php';
require 'DAOusuarios.php';
require 'DAOvideoconsola.php';
require 'DAOvideojuego.php';
require 'DAOproducto.php';
$conexion = conectar(false);

?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Tienda Online</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include('./inc/header.php');?>


<div class="cuerpo">
	<div class="container">
	<?php
    function sacarId($item){
        $longitud=strlen(strval($item));
        $tip=substr(strval($item),0,($longitud-1));
        $resultado=intval($tip);
        return $resultado;
    }
     function sacarTipo($item){
            $longitud=strlen(strval($item));
            $tip=substr(strval($item),$longitud-1);
            $resultado=intval($tip);
            return $resultado;
        }
if (isset($_POST['anadirConsola'])) {
    $long= strval(strlen($_POST['idConsola']));
    $idItemIndicador = str_pad($_POST['idConsola'], $long+1, "0", STR_PAD_RIGHT);
    $idItem=intval($idItemIndicador);
    $resul=insertarPlataformaCarrito($conexion,$_SESSION['idUsuario'],$_SESSION['idUsuario'],$idItem,$_POST['cantidadC'],$_POST['PrecioC'],$_POST['idConsola']);
}
if (isset($_POST['anadirJuego'])) {
    $long= strval(strlen($_POST['idJuego']));
    $idItemIndicador = str_pad($_POST['idJuego'], $long+1, "1", STR_PAD_RIGHT);
    $idItem=intval($idItemIndicador);
    $resul=insertarJuegoCarrito($conexion,$_SESSION['idUsuario'],$_SESSION['idUsuario'],$idItem,$_POST['cantidadJ'],$_POST['PrecioJ'],$_POST['idJuego']);
}
$carr=consultaItem($conexion,$_SESSION['idUsuario']);
while ($filas=mysqli_fetch_assoc($carr)) {
    $tipo=sacarTipo($filas['idItem']);
    $id=sacarId($filas['idItem']);
    if($tipo==0){
        $pla=ensenarconsolaporid($conexion,$id);
        $plataforma=mysqli_fetch_assoc($pla);


        
    ?>
<div class="card mb-12" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $plataforma['Imagen'] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $plataforma['Nombre'] ?></h5>
        
        <p class="card-text"><b>Precio: </b><?php echo $plataforma['Precio'] ?><b> Euros X <?php echo $filas['Cantidad'] ?></b><b>=</b><?php echo $plataforma['Precio']*$filas['Cantidad']; ?><b> Euros</b></p>
        <form action="detallesconsolas.php" method="post">
            <input type="hidden" name="idItem"  value="<?php echo $filas['id']; ?>">
            <input type="hidden" name="idCesta"  value="<?php echo $_SESSION['idUsuario']; ?>">
            <input type="hidden" name="precioElim"  value="<?php echo $filas['PrecioItem']; ?>">
            <input type="hidden" name="cantidadEli"  value="<?php echo $filas['Cantidad']; ?>">
            <input type="hidden" name="idConsola" value="<?php echo $plataforma['idPlataforma']; ?>">
            <input type="submit" value="Eliminar" name="eliminarPla">
        </form>
    </div>
    </div>
  </div>
</div>

<?php  }elseif($tipo==1){
        $jue=ensenarjuegoporid($conexion,$id);
        $juego=mysqli_fetch_assoc($jue);


        
    ?>
<div class="card mb-12" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $juego['Imagen'] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $juego['Titulo'] ?></h5>
        
        <p class="card-text"><b>Precio: </b><?php echo $juego['Precio'] ?><b> Euros X <?php echo $filas['Cantidad'] ?></b><b>=</b><?php echo $juego['Precio']*$filas['Cantidad']; ?><b> Euros</b></p>
        <form action="detallesjuego.php" method="post">
            <input type="hidden" name="idItem"  value="<?php echo $filas['id']; ?>">
            <input type="hidden" name="idCesta"  value="<?php echo $_SESSION['idUsuario']; ?>">
            <input type="hidden" name="precioElim"  value="<?php echo $filas['PrecioItem']; ?>">
            <input type="hidden" name="cantidadEli"  value="<?php echo $filas['Cantidad']; ?>">
            <input type="hidden" name="idJuego" value="<?php echo $juego['idVideojuego']; ?>">
            <input type="submit" value="Eliminar" name="eliminarJue">
        </form>
      </div>
    </div>
  </div>
</div>

<?php  }
}
$cest=consultaPrecioCesta($conexion,$_SESSION['idUsuario']);
if (mysqli_num_rows($cest)) {
    $cestaPre=mysqli_fetch_assoc($cest);
?>
<div class="card mb-12" >
  <div class="row no-gutters">

      <div class="card-body">
        <h5 class="card-title"><?php echo $cestaPre['PrecioTotal'] ?> Euros</h5>
  
      </div>
  </div>
</div>
<?php
}

?>

    
	</div>
</div>

<?php include("./inc/footer.php")?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>



