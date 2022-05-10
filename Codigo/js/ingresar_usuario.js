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
const dni = document.getElementById('dni');

/*JQUERY EL #recoge el id y el .css los estilos para el control de errores*/
$("#usuario_error").css("visibility", "hidden");
$("#password_error").css("visibility", "hidden");
$("#nombre_error").css("visibility", "hidden");
$("#apellido1_error").css("visibility", "hidden");
$("#apellido2_error").css("visibility", "hidden");
$("#telefono_error").css("visibility", "hidden");
$("#email_error").css("visibility", "hidden");
$("#cp_error").css("visibility", "hidden");
$("#provincia_error").css("visibility", "hidden");
$("#comunidadautonoma_error").css("visibility", "hidden");
$("#dni_error").css("visibility", "hidden");


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
	dni: /^[0-9]{8}[A-Za-z]$/,
}

/*Funciones para validar el usuario  y para gestionar el control de errores*/
function validarUsuario(){
	console.log(usuario.value);
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

/*Funciones para validar el nombre  y para gestionar el control de errores*/
function validarNombre(){
	if(nombre.value!=""){
	if(expresiones.nombre.test(nombre.value)){
		document.getElementById('nombre_error').style.visibility = "hidden";
	}else{
		document.getElementById('nombre_error').style.visibility = "visible";
		document.getElementById('nombre_error').style.color = "red";
	}	
}else{
	document.getElementById('nombre_error').style.visibility = "hidden";
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
	if(cp.value!=""){
	if(expresiones.cp.test(cp.value)){
		document.getElementById('cp_error').style.visibility = "hidden";
	}else{
		document.getElementById('cp_error').style.visibility = "visible";
		document.getElementById('cp_error').style.color = "red";
	}	
}else{
	
		document.getElementById('cp_error').style.visibility = "hidden";
}
}


/*Funciones para validar la provincia y para gestionar el control de errores*/
function validarP(){
	if(expresiones.provincia.test(provincia.value)){
		document.getElementById('provincia_error').style.visibility = "hidden";
	}else{
		document.getElementById('provincia_error').style.visibility = "visible";
		document.getElementById('provincia_error').style.color = "red";
	}	
}

/*Valida la provincia con el codigo postal*/
function validarProvincia(cpostal){
    let cp_provincias = {
      1: "\u00C1lava", 2: "Albacete", 3: "Alicante", 4: "Almer\u00EDa", 5: "\u00C1vila",
      6: "Badajoz", 7: "Baleares", 08: "Barcelona", 09: "Burgos", 10: "C\u00E1ceres",
      11: "C\u00E1diz", 12: "Castell\u00F3n", 13: "Ciudad Real", 14: "C\u00F3rdoba", 15: "Coruña",
      16: "Cuenca", 17: "Gerona", 18: "Granada", 19: "Guadalajara", 20: "Guip\u00FAzcoa",
      21: "Huelva", 22: "Huesca", 23: "Ja\u00E9n", 24: "Le\u00F3n", 25: "L\u00E9rida",
      26: "La Rioja", 27: "Lugo", 28: "Madrid", 29: "M\u00E1laga", 30: "Murcia",
      31: "Navarra", 32: "Orense", 33: "Asturias", 34: "Palencia", 35: "Las Palmas",
      36: "Pontevedra", 37: "Salamanca", 38: "Santa Cruz de Tenerife", 39: "Cantabria", 40: "Segovia",
      41: "Sevilla", 42: "Soria", 43: "Tarragona", 44: "Teruel", 45: "Toledo",
      46: "Valencia", 47: "Valladolid", 48: "Vizcaya", 49: "Zamora", 50: "Zaragoza",
      51: "Ceuta", 52: "Melilla"
    };
    if(cpostal.length == 5 && cpostal <= 52999 && cpostal >= 1000)
      return cp_provincias[parseInt(cpostal.substring(0,2))];
    else
      return "----";
  }
  
  //Valida la comunidad dandole el codigo postal
  function validarComunidad(cpostal){
    let cp_comunidad = {
      1: "Pa\u00EDs Vasco", 2: "Castilla-La Mancha", 3: "Comunidad Valenciana", 4: "Andaluc\u00EDa", 5: "Castilla y Le\u00F3n",
      6: "Extremadura", 7: "Islas Baleares", 08: "Catalu\u00F1a", 09: "Castilla y Le\u00F3n", 10: "Extremadura",
      11: "Andaluc\u00EDa", 12: "Comunidad Valenciana", 13: "Castilla-La Mancha", 14: "Andaluc\u00EDa", 15: "Galicia",
      16: "Castilla-La Mancha", 17: "Catalu\u00F1a", 18: "Andaluc\u00EDa", 19: "Castilla-La Mancha", 20: "Pa\u00EDs Vasco",
      21: "Andaluc\u00EDa", 22: "Arag\u00F3n", 23: "Andaluc\u00EDa", 24: "Castilla y Le\u00F3n", 25: "Catalu\u00F1a",
      26: "La Rioja", 27: "Galicia", 28: "Comunidad de Madrid", 29: "Andaluc\u00EDa", 30: "Regi\u00F3n de Murcia",
      31: "Comunidad de Navarra", 32: "Galicia", 33: "Principado de Asturias", 34: "Castilla y Le\u00F3n", 35: "Islas Canarias",
      36: "Galicia", 37: "Castilla y Le\u00F3n", 38: "Islas Canarias", 39: "Cantabria", 40: "Castilla y Le\u00F3n",
      41: "Andaluc\u00EDa", 42: "Castilla y Le\u00F3n", 43: "Catalu\u00F1a", 44: "Arag\u00F3n", 45: "Castilla-La Mancha",
      46: "Comunidad Valenciana", 47: "Castilla y Le\u00F3n", 48: "Pa\u00EDs Vasco", 49: "Castilla y Le\u00F3n", 50: "Arag\u00F3n",
      51: "Ceuta", 52: "Melilla"
    };
    if(cpostal.length == 5 && cpostal <= 52999 && cpostal >= 1000)
      return cp_comunidad[parseInt(cpostal.substring(0,2))];
    else
      return "----";
  }
  cp.onkeyup = function(){
    comunidadautonoma.value = validarComunidad(cp.value);
	provincia.value = validarProvincia(cp.value);
  }


/*Funciones para validar la comunidad autonoma y para gestionar el control de errores*/
function validarComunidadAutonoma(){
	if(comunidadautonoma.value!=""){
	if(expresiones.comunidadautonoma.test(comunidadautonoma.value)){
		document.getElementById('comunidadautonoma_error').style.visibility = "hidden";
	}else{
		document.getElementById('comunidadautonoma_error').style.visibility = "visible";
		document.getElementById('comunidadautonoma_error').style.color = "red";
	}
		
}else{
	document.getElementById('comunidadautonoma_error').style.visibility = "hidden";
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

boton.addEventListener("click", clickButton);