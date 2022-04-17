/*aqui llamamos a todos los id del html y los guardamos en una constante*/
const nombre = document.getElementById('nombre');
const precio = document.getElementById('precio');
const stock = document.getElementById('stock');

/*La visibilidad de los mensajes de error lo ponemos "hidden" para que no se vean*/
document.getElementById('nombre_error').style.visibility = "hidden";
document.getElementById('precio_error').style.visibility = "hidden";
document.getElementById('stock_error').style.visibility = "hidden";

/*Expresiones regulares*/
const expresiones = {
	nombre: /^[a-zA-Z]{2,12}/,
	precio: /^[0-9]{1,6}/,
	stock: /^[0-9]{1,6}/,
}

/*Funciones para validar el nombre y para gestionar el control de errores*/
function validarNombre(){
	if(expresiones.nombre.test(nombre.value)){
		document.getElementById('nombre_error').style.visibility = "hidden";
	}else{
		document.getElementById('nombre_error').style.visibility = "visible";
		document.getElementById('nombre_error').style.color = "red";
	}	
}

/*Funciones para validar el precio y para gestionar el control de errores*/
function validarPrecio(){
	if(expresiones.precio.test(precio.value)){
		document.getElementById('precio_error').style.visibility = "hidden";
	}else{
		document.getElementById('precio_error').style.visibility = "visible";
		document.getElementById('precio_error').style.color = "red";
	}
}

/*Funciones para validar el Stock y para gestionar el control de errores*/
function validarStock(){
	if(expresiones.stock.test(stock.value)){
		document.getElementById('stock_error').style.visibility = "hidden";
	}else{
		document.getElementById('stock_error').style.visibility = "visible";
		document.getElementById('stock_error').style.color = "red";
	}
}

/*Funciones para validar los botones que se van a usar para validar todo lo demás*/
function clickButton(){
	validarNombre();
	validarPrecio();
	validarStock();
}

/*Añadimos los oyentes de eventos a las constantes creadas arribas del todo*/
nombre.addEventListener("keyup", validarNombre);
nombre.addEventListener("blur", validarNombre);
precio.addEventListener("keyup", validarPrecio);
precio.addEventListener("blur", validarPrecio);
stock.addEventListener("keyup", validarStock);
stock.addEventListener("blur", validarStock);

boton.addEventListener("click", clickButton);