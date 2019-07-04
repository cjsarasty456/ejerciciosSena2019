<?php

function RegistroProducto($Codigo,$Nombre,$Descripcion,$Cantidad){
    include('conexionDb.php');
    // $Consulta=mysqli_fetch_array(ConsultarUsuario($CorreoElectronico));
    // if(!isset($Consulta)){
        $sql="INSERT INTO producto (codigo,nombre,descripcion,cantidad) 
        VALUES ($Codigo,'$Nombre','$Descripcion','$Cantidad')";
        $resultado=mysqli_query($Conexion,$sql);
        if(!$resultado){
            die("Error al Registrar");  
        }
    // }else{
    //     echo "el usuario ya existe";
    // }
}

?>