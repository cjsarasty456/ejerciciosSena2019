/* metodo en javascript
estructura de los metodos en javascript

function Nombre_Metodo (Parametros){

}

*/
function Nombre_Metodo()
{   
    //declaración de variables
    var Num1=0;
    var Num2=0;
    var Result=0;
    /*
    document.getElementById('id');
    el método document contiene todos los elementos de la página web
    el método getElementById trae un elemento que tenga el atributo
    indicado
    ('id') debe registrar el id del objeto HTML.


    */
    var CampoNum1=document.getElementById('CampoNum1');
    var CampoNum2=document.getElementById('CampoNum2');
    var CampoResultado=document.getElementById('CampoResultado');
    /* atributo value indica el valor que contiene el cuadro de texto
    parse es un método convierte una cadena texto en otro tipo de datos
    en este ejercicio se convierte a un número entero.
    */
    Num1=parseInt(CampoNum1.value);
    Num2=parseInt(CampoNum2.value);
    Result=Num1+Num2;
    CampoResultado.value=Result;
    
}