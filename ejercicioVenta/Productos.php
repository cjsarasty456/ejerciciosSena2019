<?php
$Funcion="";
if(isset($_POST['Funcion'])){
    $Funcion=$_POST['Funcion'];
}
if($Funcion=="GuardarProducto"){
    GuardarProducto();
}else if($Funcion=="ConsultarListaProducto"){
    ConsultaListaProductos();
}

function GuardarProducto(){
    include('model/RegistroProducto.php');
    $Codigo=(int) $_POST['CodigoProducto'];
    $Nombre=$_POST['NombreProducto'];
    $Descripcion=$_POST['DescripcionProducto'];
    $Cantidad=(int)$_POST['CantidadProducto'];
    RegistroProducto($Codigo,$Nombre,$Descripcion,$Cantidad);
}

function ConsultaListaProductos(){
    include('model/RegistroProducto.php');
    $Consulta=ConsultaListaProducto();
    echo json_encode($Consulta);
}
   

?>