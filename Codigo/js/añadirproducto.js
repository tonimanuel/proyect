/* Guardamos los ids en constantes */
const precio = document.getElementById('precio');
const stock = document.getElementById('stock');
const idvideojuego = document.getElementById('idvideojuego');
const idplataforma = document.getElementById('idplataforma');

/*La visibilidad de los mensajes de error lo ponemos "hidden" para que no se vean*/
document.getElementById('precio_error').style.visibility = "hidden";
document.getElementById('stock_error').style.visibility = "hidden";
document.getElementById('idvideojuego_error').style.visibility = "hidden";
document.getElementById('idplataforma_error').style.visibility = "hidden";


/*Expresiones regulares*/
const expresiones = {
	precio: /^[0-9]{1,6}/,
	stock: /^[0-9]{1,6}/,
	idvideojuego: /^[0-9]{1,6}/,
	idplataforma: /^[0-9]{1,6}/,
}

/*Funciones para validar el precio  y para gestionar el control de errores*/
function validarPrecio(){
	if(expresiones.precio.test(precio.value)){
		document.getElementById('precio_error').style.visibility = "hidden";
	}else{
		document.getElementById('precio_error').style.visibility = "visible";
		document.getElementById('precio_error').style.color = "red";
	}
}

/*Funciones para validar el stock  y para gestionar el control de errores*/
function validarStock(){
	if(expresiones.stock.test(stock.value)){
		document.getElementById('stock_error').style.visibility = "hidden";
	}else{
		document.getElementById('stock_error').style.visibility = "visible";
		document.getElementById('stock_error').style.color = "red";
	}
}

/*Funciones para validar el idvideojuego  y para gestionar el control de errores*/
function validarIdvideojuego(){
	if(expresiones.idvideojuego.test(idvideojuego.value)){
		document.getElementById('idvideojuego_error').style.visibility = "hidden";
	}else{
		document.getElementById('idvideojuego_error').style.visibility = "visible";
		document.getElementById('idvideojuego_error').style.color = "red";
	}
}

/*Funciones para validar el idplataforma  y para gestionar el control de errores*/
function validarIdplataforma(){
	if(expresiones.idplataforma.test(idplataforma.value)){
		document.getElementById('idplataforma_error').style.visibility = "hidden";
	}else{
		document.getElementById('idplataforma_error').style.visibility = "visible";
		document.getElementById('idplataforma_error').style.color = "red";
	}
}

/*Funciones para validar los botones que se van a usar para validar todo lo demás*/
function clickButton(){
	validarPrecio();
	validarStock();
	validarIdvideojuego();
	validarIdplataforma();
}

/*Añadimos los oyentes de evnetos de las distintas constantes*/
idvideojuego.addEventListener("keyup", validarIdvideojuego);
idvideojuego.addEventListener("blur", validarIdvideojuego);
idplataforma.addEventListener("keyup", validarIdplataforma);
idplataforma.addEventListener("blur", validarIdplataforma);
precio.addEventListener("keyup", validarPrecio);
precio.addEventListener("blur", validarPrecio);
stock.addEventListener("keyup", validarStock);
stock.addEventListener("blur", validarStock);

boton.addEventListener("click", clickButton);