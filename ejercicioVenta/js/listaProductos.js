function InicioProductos(){
    InicioPagina();
    consultarListaProductos();
}

function consultarListaProductos(){
    var tabla=document.getElementById('tabla');
        var params = {
            "Funcion" : "ConsultarListaProducto"
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
            var Consulta=JSON.parse(data);
            tabla.innerHTML="";
            var CeldaNombre=document.createElement('')
        },
        error: function(data){
            alert("error al consultar Lista Productos");
        }
    });
}