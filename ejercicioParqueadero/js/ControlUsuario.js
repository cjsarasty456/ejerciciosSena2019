function verificarCorreo(CampoCorreo){
    //validación del correo electrónico
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(CampoCorreo.value)){
        CampoCorreo.setAttribute("class","form-control is-valid");
        return true;
    }else{
        CampoCorreo.setAttribute("class","form-control is-invalid");
        return false;
    }
}
function verificarContrasena(CampoContrasena){
    if(CampoContrasena.value!=""){
        CampoContrasena.setAttribute("class","form-control is-valid");
        return true;
    }else{
        CampoContrasena.setAttribute("class","form-control is-invalid");
        return false;
    }
}

function IniciarSesión(){
    document.getElementById('mensaje').innerHTML="";
    var CampoCorreo=document.getElementById('CampoNombreUsuario');
    var CampoContrasena=document.getElementById('CampoContrasena');
    if(verificarCorreo(CampoCorreo) && verificarContrasena(CampoContrasena)){
        //creamos array de parámetros que mandaremos por POST
		var params = {
			"Funcion" : "login",
            "CorreoElectronico" : CampoCorreo.value,
            "Contrasena" : CampoContrasena.value
		};
        $.ajax({
            // En data puedes utilizar un objeto JSON, un array o un query string
            data:params,
            //Cambiar a type: POST si necesario
            type: 'POST',
            // Formato de datos que se espera en la respuesta
            dataType: 'json',
            // URL a la que se enviará la solicitud Ajax
            url: 'controlusuario.php',
            success: function(data ){
                if(data["Respuesta"]=="Ok"){
                    location.href="index.html";
                }else{
                    Mensaje(data["Mensaje"]);
                }
            },
            error: function(data){
                alert("error ");
            }
        });

    }else{
        Mensaje("Competa todos los campos");
    }

}
function Mensaje(texto){
    var mensaje="<div class='alert alert-danger alert-danger fade show' role='alert'>"+
                    "<strong>Error inicio sesión!</strong> "+texto+
                    "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"+
                    "<span aria-hidden='true'>&times;</span>"+
                    "</button>"+
                    "</div>";
    document.getElementById('mensaje').innerHTML=mensaje;
}
function InicioPagina(){
    // BarraNavegacion();
    var params = {
        "Funcion" : "ComprobarUsuario"
    };
    $.ajax({
        // En data puedes utilizar un objeto JSON, un array o un query string
        data:params,
        //Cambiar a type: POST si necesario
        type: 'POST',
        // Formato de datos que se espera en la respuesta
        dataType: 'json',
        // URL a la que se enviará la solicitud Ajax
        url: '/sena/ejercicioParqueadero/controlusuario.php',
        success: function(data){
            if(data['SesionExitente']){
                document.getElementById('NombreUsuario').innerHTML="Bienvenido: "+data['Usuario'];
            }else{
                location.href="login.html";
                // alert("salir");
            }
        },
        error: function(data){
            alert("error ");
        }
    });

}
function CerrarSesion(){
    var params = {
        "Funcion" : "CerrarSesion"
    };
    $.ajax({
        // En data puedes utilizar un objeto JSON, un array o un query string
        data:params,
        //Cambiar a type: POST si necesario
        type: 'POST',
        // Formato de datos que se espera en la respuesta
        // dataType: 'text',
        // URL a la que se enviará la solicitud Ajax
        url: 'controlusuario.php',
        success: function(data){
            location.href="login.html";
        },
        error: function(data){
            alert("error ");
        }
    });
}
function Configuracion(){
    location.href="Configuracion.html";
}
// function BarraNavegacion(){
//     var Barra=document.getElementById('ListaElementos');
//     var Item=document.createElement('li');
//     Item.className="nav-item";
//     var Enlace=document.createElement('a');
//     Enlace.className="nav-link";
//     Enlace.innerHTML="Inicio";
//     Enlace.href="index.html";
//     Item.appendChild(Enlace);
//     Barra.appendChild(Item);
// }