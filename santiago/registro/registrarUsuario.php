<?php
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$confirmarcontrasena=$_POST["confirmarcontrasena"];
if(contrasena==confirmarcontrasena){
    //registro
    }else{
        echo"las contrasenas no coinciden";
    }
?>
