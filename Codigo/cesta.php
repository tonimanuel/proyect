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
        <p class="card-text"><form action="cesta.php" method="POST"><label for="cantida">Cantidad: </label><input type="hidden" name="idItem" value="<?php echo $filas['idItem']; ?>"><input type="hidden" name="idCesta" value="<?php echo $_SESSION['idUsuario'] ?>"><input type="number" name="cantidad"> <input type="submit" value="Cambiar" name="cambiarC"></form></p>
      </div>
    </div>
  </div>
</div>

<?php  }
}
?>

    
	</div>
</div>

<?php include("./inc/footer.php")?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>



