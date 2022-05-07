<?php
if(empty($_SESSION['idUsuario'])){
	echo'
<header class="row bg-dark">
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  		<div class="container-fluid">
   			<a class="justify-content-start" href="Home.php"><img src="imagenes/logo-home.png" loading="eager" class="img-responsive"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center mx-auto">
      				<li class="nav-item">
				    	<a class="nav-link" aria-current="page" style="color: #a3b2aa;" href="videojuegosusuario.php"> Videjuegos</a>
				  	</li>
				 	<li class="nav-item">
						<a class="nav-link" style="color: #a3b2aa;" href="videoconsolasusuario.php"> Videoconsolas</a>
				  	</li>
        			
      			</ul>

      			<ul class="navbar-nav mb-2 mb-lg-0">
      				<li class="nav-item">
        				<a class="nav-link botonLog" style="color: #a3b2aa;" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
				  	<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
				  	<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg>  Logueate</a>
        			</li>
        			<li class="nav-item">
        				<a class="nav-link botoDesconecta" style="color: #a3b2aa;"  href="ingresarUsuario.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
			  		<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			 		<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
					</svg>  Registrate</a>
        			</li>
      			</ul>
    		</div>
  		</div>
	</nav>
</header>
';
}else{
switch($_SESSION['Rol']){
	case "usuario":
		echo '
<header class="row bg-dark">
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  		<div class="container-fluid">
   			<a class="justify-content-start" href="Home.php"><img src="imagenes/logo-home.png" loading="eager" class="img-responsive"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center mx-auto">
      				<li class="nav-item">
				    	<a class="nav-link" aria-current="page" style="color: #a3b2aa;" href="videojuegosusuario.php">Videjuegos</a>
				  	</li>
				 	<li class="nav-item">
						<a class="nav-link" style="color: #a3b2aa;" href="videoconsolasusuario.php">Videoconsolas</a>
				  	</li>
				  	<li class="nav-item">
						<a class="nav-link" href="perfil.php">Perfil</a>
				  	</li>
      			</ul>

      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
      				<li class="nav-item">
        				<a class="nav-link" style="color: #a3b2aa;" href="logout.php">Desconectar</a>
        			</li>
					<li class="nav-item">
						<a href="cesta.php"><img src="imagenes/carrito.png" style="width: 50px; height: 50px; color:#a3b2aa;"></a>
        			</li>
      			</ul>
    		</div>
  		</div>
	</nav>
</header>';
			break;
		case "admin":
			echo'
<header class="row bg-dark">
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  		<div class="container-fluid">
   			<a class="justify-content-start" href="Home.php"><img src="imagenes/logo-home.png" loading="eager" class="img-responsive"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">

      			<ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
      				<li class="nav-item">
				    	<a class="nav-link" aria-current="page" style="color: #a3b2aa;" href="videojuegosusuario.php"> Videjuegos</a>
				  	</li>
				 	<li class="nav-item">
						<a class="nav-link" style="color: #a3b2aa;" href="videoconsolasusuario.php"> Videoconsolas</a>
				  	</li>
        			<li class="nav-item dropdown">
          				<a class="nav-link dropdown-toggle" style="color: #a3b2aa;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            			Administración
          				</a>
          				<ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            				<li><a class="dropdown-item" style="color: #a3b2aa;" href="videoconsolasadmin.php">Videoconsolas</a></li>
            				<li><a class="dropdown-item" style="color: #a3b2aa;" href="videojuegosadmin.php">Videojuegos</a></li>
            				<li><a class="dropdown-item" style="color: #a3b2aa;" href="panel.php">Panel de Usuarios</a></li>
            				<li><a class="dropdown-item" style="color: #a3b2aa;" href="productosadmin.php">Productos</a></li>
      					</ul>
        			</li>
      			</ul>

      			<ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
      				<li class="nav-item">
        				<a class="nav-link" style="color: #a3b2aa;" href="logout.php">Desconectar</a>

        			</li>
					<li class="nav-item">
						<a href="cesta.php"><img src="imagenes/carrito.png" style="width: 50px; height: 50px;"></a>
        			</li>
					
      			</ul>
    		</div>
  		</div>
	</nav>
</header>
';
			break;
	}
}
?>
