/*aqui llamamos a todos los id del html y los guardamos en una constante*/
const dni = document.getElementById('dni');

/*La visibilidad de los mensajes de error lo ponemos "hidden" para que no se vean*/
document.getElementById('dni_error').style.visibility = "hidden";

/*Expresiones regulares*/
const expresiones = {
	dni: /^[0-9]{8}[A-Za-z]$/,
}

/*Funciones para validar el Dni  y para gestionar el control de errores*/
function validarDni() {
    let numero;
    let letr;
    let letra;
    let dn = dni.value;
    dni.value = dni.value.slice(0, 8) + dni.value.charAt(8).toUpperCase();
if(dni.value!=""){
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
}else{
  document.getElementById("dni_error").style.visibility = "hidden";
     }
  }

/*Funciones para validar los botones que se van a usar para validar todo lo demás*/
  function clickButton(){
	validarDni();
}

/*Añadimos los oyentes de eventos a las constantes creadas arribas del todo*/
dni.addEventListener("keyup", validarDni);
dni.addEventListener("blur", validarDni);

boton.addEventListener("click", clickButton);