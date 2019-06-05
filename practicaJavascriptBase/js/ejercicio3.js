/*concatenar es unir o enlazar diferentes datos para formar un 
dato más grande*/
function concatenar(){
    //declaración de variables en javascript.
var nombre="", apellido="";
/*document.getElementById('id')
permite obtener el objeto del formulario mediante el id del mismo
*/
var Camponombre=document.getElementById('nombre');
var Campoapellido=document.getElementById('apellido');
//el atributo value obtiene el valor ingresado en el input
nombre=Camponombre.value;
apellido=Campoapellido.value;
var CampoResultado=document.getElementById('resultado');
/*cuando se utiliza el operador + en cadena de texto concatena dos
cadena de texto en uno solo
*/
CampoResultado.value=nombre+" "+apellido;
}