<?php
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
// $json=array();
// $json[]= array (
//     'correo'=>$Correo,
//     'contrasena'=>$Contrasena
// );
// echo json_encode($json);

?>