/*aqui llamamos a todos los id del html y los guardamos en una constante*/
const usuario = document.getElementById('usuario');
const password = document.getElementById('password');
const nombre = document.getElementById('nombre');
const apellido1 = document.getElementById('apellido1');
const apellido2 = document.getElementById('apellido2');
const telefono = document.getElementById('telefono');
const email = document.getElementById('email');
const cp = document.getElementById('cp');
const provincia = document.getElementById('provincia');
const comunidadautonoma = document.getElementById('comunidadautonoma');
const rol = document.getElementById('rol');
const dni = document.getElementById('dni');


/*La visibilidad de los mensajes de error lo ponemos "hidden" para que no se vean*/
document.getElementById('usuario_error').style.visibility = "hidden";
document.getElementById('password_error').style.visibility = "hidden";
document.getElementById('nombre_error').style.visibility = "hidden";
document.getElementById('apellido1_error').style.visibility = "hidden";
document.getElementById('apellido2_error').style.visibility = "hidden";
document.getElementById('telefono_error').style.visibility = "hidden";
document.getElementById('email_error').style.visibility = "hidden";
document.getElementById('cp_error').style.visibility = "hidden";
document.getElementById('provincia_error').style.visibility = "hidden";
document.getElementById('comunidadautonoma_error').style.visibility = "hidden";
document.getElementById('rol_error').style.visibility = "hidden";
document.getElementById('dni_error').style.visibility = "hidden";


/*Expresiones regulares*/
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, 
	password: /^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/,
	nombre: /^[a-zA-Z]{2,12}/,
	apellido1: /^[a-zA-Z]{2,16}/,
	apellido2: /^[a-zA-Z]{2,16}/,
	telefono: /^[0-9]{9}/,
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	cp: /^[0-9]{2}-? ?[0-9]{3}$/,
	provincia: /^[a-zA-Z]{}/,
	comunidadautonoma: /^[a-zA-Z]{4,22}/,
	rol: /^(usuario|admin)/,
	dni: /^[0-9]{8}[A-Za-z]$/,
}

/*Funciones para validar el usuario  y para gestionar el control de errores*/
function validarUsuario(){
	if(expresiones.usuario.test(usuario.value)){
		document.getElementById('usuario_error').style.visibility = "hidden";
	}else{
		document.getElementById('usuario_error').style.visibility = "visible";
		document.getElementById('usuario_error').style.color = "red";
	}
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

/*Funciones para validar el nombre  y para gestionar el control de errores*/
function validarNombre(){
	if(expresiones.nombre.test(nombre.value)){
		document.getElementById('nombre_error').style.visibility = "hidden";
	}else{
		document.getElementById('nombre_error').style.visibility = "visible";
		document.getElementById('nombre_error').style.color = "red";
	}	
}

/*Funciones para validar el primer apellido y para gestionar el control de errores*/
function validarApellido1(){
	if(expresiones.apellido1.test(apellido1.value)){
		document.getElementById('apellido1_error').style.visibility = "hidden";
	}else{
		document.getElementById('apellido1_error').style.visibility = "visible";
		document.getElementById('apellido1_error').style.color = "red";
	}	
}

/*Funciones para validar el segundo apellido y para gestionar el control de errores*/
function validarApellido2(){
	if(expresiones.apellido2.test(apellido2.value)){
		document.getElementById('apellido2_error').style.visibility = "hidden";
	}else{
		document.getElementById('apellido2_error').style.visibility = "visible";
		document.getElementById('apellido2_error').style.color = "red";
	}	
}

/*Funciones para validar el telefono y para gestionar el control de errores*/
function validarTelefono(){
	if(expresiones.telefono.test(telefono.value)){
		document.getElementById('telefono_error').style.visibility = "hidden";
	}else{
		document.getElementById('telefono_error').style.visibility = "visible";
		document.getElementById('telefono_error').style.color = "red";
	}	
}

/*Funciones para validar el email y para gestionar el control de errores*/
function validarEmail(){
	if(expresiones.email.test(email.value)){
		document.getElementById('email_error').style.visibility = "hidden";
	}else{
		document.getElementById('email_error').style.visibility = "visible";
		document.getElementById('email_error').style.color = "red";
	}
}

/*Funciones para validar el codigo postal y para gestionar el control de errores*/
function validarCp(){
	if(expresiones.cp.test(cp.value)){
		document.getElementById('cp_error').style.visibility = "hidden";
	}else{
		document.getElementById('cp_error').style.visibility = "visible";
		document.getElementById('cp_error').style.color = "red";
	}	
}

/*Funciones para validar la provincia y para gestionar el control de errores*/
function validarProvincia(){
	if(expresiones.provincia.test(provincia.value)){
		document.getElementById('provincia_error').style.visibility = "hidden";
	}else{
		document.getElementById('provincia_error').style.visibility = "visible";
		document.getElementById('provincia_error').style.color = "red";
	}	
}

/*Funciones para validar la comunidad autonoma y para gestionar el control de errores*/
function validarComunidadAutonoma(){
	if(expresiones.comunidadautonoma.test(comunidadautonoma.value)){
		document.getElementById('comunidadautonoma_error').style.visibility = "hidden";
	}else{
		document.getElementById('comunidadautonoma_error').style.visibility = "visible";
		document.getElementById('comunidadautonoma_error').style.color = "red";
	}	
}

/*Funciones para validar el dni y para gestionar el control de errores*/
function validarDni() {
    let numero;
    let letr;
    let letra;
    let dn = dni.value;
    dni.value = dni.value.slice(0, 8) + dni.value.charAt(8).toUpperCase();
    if(expresiones.dni.test (dn) == true){
       numero = dn.substr(0,dn.length-1);
       letr = dn.substr(dn.length-1,1);
       numero = numero % 23;
       letra='TRWAGMYFPDXBNJZSQVHLCKET';
       letra=letra.substring(numero,numero+1);
      if (letra!=letr.toUpperCase()) {
        document.getElementById("dni_error").style.visibility = "visible";
        document.getElementById("dni_error").style.color = "red";
      }else{
        document.getElementById("dni_error").style.visibility = "hidden";
      }
    }else{
        document.getElementById("dni_error").style.visibility = "visible";
        document.getElementById("dni_error").style.color = "red";
     }
  }

/*Funciones para validar el rol y para gestionar el control de errores*/
  function validarRol(){
	if(expresiones.rol.test(rol.value)){
		document.getElementById('rol_error').style.visibility = "hidden";
	}else{
		document.getElementById('rol_error').style.visibility = "visible";
		document.getElementById('rol_error').style.color = "red";
	}	
}


/*Funciones para validar los botones que se van a usar para validar todo lo demás*/
function clickButton(){
	validarUsuario();
	validarPassword();
	validarNombre();
	validarApellido1();
	validarApellido2();
	validarTelefono();
	validarEmail();
	validarCp();
	validarProvincia();
	validarComunidadAutonoma();
	validarDni();
	validarRol();
}

/*Añadimos los oyentes de eventos a las constantes creadas arribas del todo*/
usuario.addEventListener("keyup", validarUsuario);
usuario.addEventListener("blur", validarUsuario);
password.addEventListener("keyup", validarPassword);
password.addEventListener("blur", validarPassword);
nombre.addEventListener("keyup", validarNombre);
nombre.addEventListener("blur", validarNombre);
apellido1.addEventListener("keyup", validarApellido1);
apellido1.addEventListener("blur", validarApellido1);
apellido2.addEventListener("keyup", validarApellido2);
apellido2.addEventListener("blur", validarApellido2);
telefono.addEventListener("keyup", validarTelefono);
telefono.addEventListener("blur", validarTelefono);
email.addEventListener("keyup", validarEmail);
email.addEventListener("blur", validarEmail);
cp.addEventListener("keyup", validarCp);
cp.addEventListener("blur", validarCp);
provincia.addEventListener("keyup", validarProvincia);
provincia.addEventListener("blur", validarProvincia);
comunidadautonoma.addEventListener("keyup", validarComunidadAutonoma);
comunidadautonoma.addEventListener("blur", validarComunidadAutonoma);
dni.addEventListener("keyup", validarDni);
dni.addEventListener("blur", validarDni);
rol.addEventListener("keyup", validarRol);
rol.addEventListener("blur", validarRol);

boton.addEventListener("click", clickButton);