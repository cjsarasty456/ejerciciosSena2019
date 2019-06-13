<?php
$correo=$_GET['correo'];
$contrasena=$_GET['Contrasena'];
include 'conexionDb.php';

$sql="SELECT * FROM usuarios WHERE correo='$correo' && contrasena='$contrasena'";
$resultado=mysqli_fetch_array(mysqli_query($Conexion,$sql));
if(isset($resultado)){
    echo "Bienvenido ".$resultado['nombreUsuario'];
}else{
    echo "Usuario no encontrado";
}


?>