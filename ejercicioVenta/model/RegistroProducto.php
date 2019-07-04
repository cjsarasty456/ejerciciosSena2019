<?php

function RegistroProducto($Codigo,$Nombre,$Descripcion,$Cantidad){
    include('conexionDb.php');
    $Consulta=mysqli_fetch_array(ConsultaProducto($Codigo));
    if(!isset($Consulta)){
        $sql="INSERT INTO producto (codigo,nombre,descripcion,cantidad) 
        VALUES ($Codigo,'$Nombre','$Descripcion','$Cantidad')";
        $resultado=mysqli_query($Conexion,$sql);
        if(!$resultado){
            die("Error al Registrar");  
        }
    }else{
        echo "Error al registrar el producto, el producto ya existe";
    }
}

function ConsultaListaProducto(){
    include('conexionDb.php');
    $retorno="";
    $sql="select * from producto";
    $resultado=mysqli_query($Conexion,$sql);
    if(!$resultado){
        die("Error al Registrar");  
    }
    while($fila=mysqli_fetch_array($resultado)){
        $prueba=array(
            'id'=>(int)$fila['id'],
            'codigo'=>$fila['codigo'],
            'nombre'=>$fila['nombre'],
            'descripcion'=>$fila['descripcion'],
            'cantidad'=>(int)$fila['cantidad']
        );
        $retorno.=json_encode ($prueba);
        

    }
    // $retorno = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    return $retorno;
}

function ConsultaProducto($codigo){
    include('conexionDb.php');
    $sql="select * from producto where codigo='$codigo'";
    $resultado=mysqli_query($Conexion,$sql);
    if(!$resultado){
        die("Error al Registrar");  
    }
    return $resultado;
}

?>