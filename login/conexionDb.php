<?php
$Conexion = mysqli_connect( 
    'localhost', //nombre del servidor
    'root', //nombre usuario
    '', //contraseña
    'login' //nombre de la base de datos
  ) or die(mysqli_erro($mysqli));
?>