/*aqui llamamos a todos los id del html y los guardamos en una constante*/
const usuario = document.getElementById("usuario");
const password = document.getElementById("password");
const boton = document.getElementById("boton");


/*La visibilidad de los mensajes de error lo ponemos "hidden" para que no se vean*/
document.getElementById("usuario_error").style.visibility = "hidden";
document.getElementById("password_error").style.visibility = "hidden";

/*Expresiones regulares*/
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, 
	password: /^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/,
}

/*Funciones para validar cada campos (usuario, )*/
function validarUsuario(){
	if(usuario.value!=""){
	if(expresiones.usuario.test(usuario.value)){
		document.getElementById('usuario_error').style.visibility = "hidden";
	}else{
		document.getElementById('usuario_error').style.visibility = "visible";
		document.getElementById('usuario_error').style.color = "red";
	}
}else{
	document.getElementById('usuario_error').style.visibility = "hidden";	
}
}
/*Funciones para validar la contraseña  y para gestionar el control de errores*/
function validarPassword(){
	if(password.value!=""){

	if(expresiones.password.test(password.value)){
		document.getElementById('password_error').style.visibility = "hidden";
	}else{
		document.getElementById('password_error').style.visibility = "visible";
		document.getElementById('password_error').style.color = "red";
	}	
}else{
	document.getElementById('password_error').style.visibility = "hidden";
}
}

/*Funciones para validar los botones que se van a usar para validar todo lo demás*/
function clickButton(){
	validarUsuario();
	validarPassword();
}

//Añadimos los oyentes de evnetos de las distintas constantes
usuario.addEventListener("keyup", validarUsuario);
usuario.addEventListener("blur", validarUsuario);
password.addEventListener("keyup", validarPassword);
password.addEventListener("blur", validarPassword);
boton.addEventListener("click", clickButton);