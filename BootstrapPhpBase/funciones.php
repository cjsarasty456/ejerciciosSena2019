<?php
$conexion=mysqli_connect(
    'localhost', //servidor
    'root',//nombre de usuario
    '', //contraseña
    'loginbase' //nombre de la base de datos
);
$funciones=$_GET['funciones'];
if($funciones=='iniciar'){
iniciar();
}

function iniciar(){
    $correo=$_GET['correo'];
    $contrasena=$_GET['contrasena'];
    $sql="select * from usuario where correo=$correo && contrasena=$contrasena";
    $resultado=mysqli_query($conexion,$sql);
    
}

?>