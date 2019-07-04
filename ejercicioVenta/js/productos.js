// var tabla=document.getElementById('tabla');
// function consultarListaProductos(){
//     var params = {
//         "Funcion" : "ConsultarListaProducto"
//     };
//     $.ajax({
//         // En data puedes utilizar un objeto JSON, un array o un query string
//         data:params,
//         //Cambiar a type: POST si necesario
//         type: 'POST',
//         // Formato de datos que se espera en la respuesta
//         // dataType: 'text',
//         // URL a la que se enviará la solicitud Ajax
//         url: 'controlusuario.php',
//         success: function(data){
            
//         },
//         error: function(data){
//             alert("error al consultar Lista Productos");
//         }
//     });
// }

function InicioProductos(){
    InicioPagina();
    // localStorage.setItem("prueba","probando");
    // var CodigoProducto=localStorage.getItem("CodigoProducto");
    // ConsultaProductos(CodigoProducto);
}
// function ConsultaProductos(CodigoProducto){
//     var params = {
//         "Funcion" : "ConsultarProducto",
//         "CodigoProducto" : CodigoProducto
//     };
//     $.ajax({
//         // En data puedes utilizar un objeto JSON, un array o un query string
//         data:params,
//         //Cambiar a type: POST si necesario
//         type: 'POST',
//         // Formato de datos que se espera en la respuesta
//         // dataType: 'text',
//         // URL a la que se enviará la solicitud Ajax
//         url: 'controlusuario.php',
//         success: function(data){
            
//         },
//         error: function(data){
//             alert("error al consultar Lista Productos");
//         }
//     });
// }

function GuardarProductos(){
    var CodigoProducto=document.getElementById('CampoCodigo').value;
    var NombreProducto=document.getElementById('CampoNombre').value;
    var DescripcionProducto=document.getElementById('CampoDescripción').value;
    var CantidadProducto=document.getElementById('CampoCantidad').value;
    var params = {
        "Funcion" : "GuardarProducto",
        "CodigoProducto" : CodigoProducto,
        "NombreProducto" : NombreProducto,
        "DescripcionProducto" : DescripcionProducto,
        "CantidadProducto" : CantidadProducto
    };
    $.ajax({
        // En data puedes utilizar un objeto JSON, un array o un query string
        data:params,
        //Cambiar a type: POST si necesario
        type: 'POST',
        // Formato de datos que se espera en la respuesta
        // dataType: 'text',
        // URL a la que se enviará la solicitud Ajax
        url: 'Productos.php',
        success: function(data){
            
        },
        error: function(data){
            alert("error al consultar Lista Productos");
        }
    });
}