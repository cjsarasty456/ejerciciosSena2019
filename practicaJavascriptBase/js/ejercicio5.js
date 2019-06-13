var num1=0, num2=0, result=0;
var CampoResult="";
var CampoNombres="";
var CampoApellidos="";
var CampoCorreo="";

function lectura(){
    CampoResult=document.getElementById('resultado');
    num1=document.getElementById('num1').value;
    num2=document.getElementById('num2').value;
    num1=parseInt(num1);
    num2=parseInt(num2);
}

function sumar(){
    lectura();
    result=num1+num2;
    CampoResult.value=result;
}
function restar(){
   lectura();
   result=num1-num2;
   CampoResult.value=result;
}
function multiplicar(){
    lectura();
   result=num1*num2;
   CampoResult.value=result;
}
function dividir(){
    lectura();
    if(num2==0){
        CampoResult.value="Error no puede dividir en cero";
    }else{
        result=num1/num2;
        CampoResult.value= result;
    }
}

function verificarDatos(){
    ErrorCamposObligatorios=0;
    CampoNombres=document.getElementById('nombres');
    CampoApellidos=document.getElementById('apellidos');
    CampoCorreo=document.getElementById('correo');
    if(CampoNombres.value==""){
        CampoNombres.setAttribute("class","form-control is-invalid");
        return false;
    }else{
        CampoNombres.setAttribute("class","form-control is-valid");
    }
    if(CampoApellidos.value==""){
        CampoApellidos.setAttribute("class","form-control is-invalid");
        return false;
        
    }else{
        CampoApellidos.setAttribute("class","form-control is-valid");
    }
    //validación del correo electrónico
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(CampoCorreo.value)){
        CampoCorreo.setAttribute("class","form-control is-valid");
       } else {
        CampoCorreo.setAttribute("class","form-control is-invalid");
        return false;
       }
       return true;
}
function Registrar(){
    if (verificarDatos()){
        var tabla=document.getElementById('tabla');
        var nuevoRegistro=document.createElement("tr");
        var celdaNombre=document.createElement("td");
        var celdaApellido=document.createElement("td");
        var celdaCorreo=document.createElement("td");
        celdaNombre.innerHTML=CampoNombres.value;
        celdaApellido.innerHTML=CampoApellidos.value;
        celdaCorreo.innerHTML=CampoCorreo.value;
        nuevoRegistro.appendChild(celdaNombre);
        nuevoRegistro.appendChild(celdaApellido);
        nuevoRegistro.appendChild(celdaCorreo);
        tabla.appendChild(nuevoRegistro);
        Mensaje("Guardado con exito");
    }
}
function Mensaje(mensaje){
    var contenedor=document.getElementById('contenedorMensaje');
    contenedor.innerHTML="<div class='alert alert-success alert-dismissible fade show' role='alert'>"+
    mensaje+
    "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"+
    "<span aria-hidden='true'>&times;</span>"+
    "</button>"+
    "</div>";

}