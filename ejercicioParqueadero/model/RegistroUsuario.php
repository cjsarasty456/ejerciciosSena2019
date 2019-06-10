<?php

function Registrio($CorreoElectronico,$Contrasena){
    include('conexionDb.php');
    $Consulta=mysqli_fetch_array(ConsultarUsuario($CorreoElectronico));
    if(!isset($Consulta)){
        $sql="INSERT INTO registrousuarios (CorreoElectronico, Contrasena) 
        VALUES ('$CorreoElectronico', '$Contrasena')";
        $resultado=mysqli_query($Conexion,$sql);
        if(!$resultado){
            die("Error al Registrar");  
        }
    }else{
        echo "el usuario ya existe";
    }
}
function ConsultarUsuario($CorreoElectronico){
    include('conexionDb.php');
    $sql="SELECT * FROM registrousuarios WHERE CorreoElectronico='$CorreoElectronico'";
    $resultado=mysqli_query($Conexion,$sql);
    return $resultado;
}

function IniciarSesion($CorreoElectronico,$Contrasena){
    include('conexionDb.php');
    $sql="SELECT * from registrousuarios where CorreoElectronico='$CorreoElectronico' && Contrasena='$Contrasena'";
    $resultado=mysqli_query($Conexion,$sql);
    $retorno=array();
    while($fila=mysqli_fetch_array($resultado)){
        $retorno=array(
            'id'=>$fila['id'],
            'CorreoElectronico'=>$fila['CorreoElectronico']
        );
    }
    return $retorno;
}

?>