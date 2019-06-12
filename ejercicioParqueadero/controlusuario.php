<?php
$Funcion=$Correo=$_POST['Funcion'];
if($Funcion=="login"){
    login();
}else if($Funcion=="ComprobarUsuario"){
    ComprobarUsuario();
}
function login(){
    session_start();
    include('model/RegistroUsuario.php');
    $Correo=$_POST['CorreoElectronico'];
    $Contrasena=$_POST['Contrasena'];
    $Registro=IniciarSesion($Correo,$Contrasena); 
    $Retorno="";
    if(sizeof($Registro)!=0){
    setcookie("idUsuer",$Registro['id']);
    setcookie("CorreoElectronico",$Registro['CorreoElectronico']);
    $Retorno=array(
        "Respuesta"=>"Ok",
        "Mensaje"=>""
    );
    }else{
        $Retorno=array(
            "Respuesta"=>"Fail",
            "Mensaje"=>"Usuario o contraseña incorrecto"
        );
    }
    echo json_encode($Retorno);
}
function ComprobarUsuario(){
     $Retorno=array();
     if(isset($_COOKIE['idUsuer'])){
         $Retorno=array(
            "SesionExitente"=>true,
            "Usuario"=>$_COOKIE['CorreoElectronico']
         );
     }else{
        $Retorno=array(
            "SesionExitente"=>"false"
        );
     }
     echo json_encode($Retorno);
}
function CerrarSesion(){
    unset($_COOKIE['AoIuser']); 
}
?>