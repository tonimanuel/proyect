/*aqui llamamos a todos los id del html y los guardamos en una constante*/
const password = document.getElementById('password');

/*La visibilidad de los mensajes de error lo ponemos "hidden" para que no se vean*/
document.getElementById('password_error').style.visibility = "hidden";

/*Expresiones regulares*/
const expresiones = {
	password: /^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/,
}

/*Funciones para validar la contraseña  y para gestionar el control de errores*/
function validarPassword(){
	if(expresiones.password.test(password.value)){
		document.getElementById('password_error').style.visibility = "hidden";
	}else{
		document.getElementById('password_error').style.visibility = "visible";
		document.getElementById('password_error').style.color = "red";
	}	
}

/*Funciones para validar los botones que se van a usar para validar todo lo demás*/
function clickButton(){
	validarPassword();
}

//Añadimos los oyentes de evnetos de las distintas constantes
password.addEventListener("keyup", validarPassword);
password.addEventListener("blur", validarPassword);

boton.addEventListener("click", clickButton);