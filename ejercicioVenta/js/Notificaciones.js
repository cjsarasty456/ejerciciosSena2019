function Mensaje(titulo,texto){
    var mensaje="<div class='alert alert-danger alert-danger fade show' role='alert'>"+
                    "<strong>"+titulo+"</strong> "+texto+
                    "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"+
                    "<span aria-hidden='true'>&times;</span>"+
                    "</button>"+
                    "</div>";
    document.getElementById('mensaje').innerHTML=mensaje;
}