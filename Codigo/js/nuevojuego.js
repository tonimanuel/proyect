/*aqui llamamos a todos los id del html y los guardamos en una constante*/
const titulo = document.getElementById('titulo');
const compañia = document.getElementById('compañia');

/*La visibilidad de los mensajes de error lo ponemos "hidden" para que no se vean*/
document.getElementById('titulo_error').style.visibility = "hidden";
document.getElementById('compañia_error').style.visibility = "hidden";

/*Expresiones regulares*/
const expresiones = {
	titulo: /^[a-zA-Z0-9\_\-]{2,16}$/, 
	compañia: /^[a-zA-Z0-9\_\-]{2,16}$/, 
}

/*Funciones para validar el titulo y para gestionar el control de errores*/
function validarTitulo(){
	if(expresiones.titulo.test(titulo.value)){
		document.getElementById('titulo_error').style.visibility = "hidden";
	}else{
		document.getElementById('titulo_error').style.visibility = "visible";
		document.getElementById('titulo_error').style.color = "red";
	}
}

/*Funciones para validar el la compañia y para gestionar el control de errores*/
function validarCompañia(){
	if(expresiones.compañia.test(compañia.value)){
		document.getElementById('compañia_error').style.visibility = "hidden";
	}else{
		document.getElementById('compañia_error').style.visibility = "visible";
		document.getElementById('compañia_error').style.color = "red";
	}
}

/*Funciones para validar los botones que se van a usar para validar todo lo demás*/
function clickButton(){
	validarTitulo();
	validarCompañia();
}

/*Añadimos los oyentes de eventos a las constantes creadas arribas del todo*/
titulo.addEventListener("keyup", validarTitulo);
titulo.addEventListener("blur", validarTitulo);
compañia.addEventListener("keyup", validarCompañia);
compañia.addEventListener("blur", validarCompañia);

boton.addEventListener("click", clickButton);