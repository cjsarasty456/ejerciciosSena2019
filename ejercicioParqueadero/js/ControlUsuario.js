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
        url: 'controlusuario.php',
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