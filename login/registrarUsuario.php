<?php
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$confirmcontrasena=$_POST['confirmContrasena'];
if($contrasena==$confirmcontrasena){
    //registro
}else{
    echo "las contraseñas no coinciden";
}

?>



<!-- 










    $correo=$_GET['correo'];
    $nombre=$_GET['usuario'];
    $contrasena=$_GET['contrasena'];
    $confirmarContrasena=$_GET['confirmContrasena'];

    include 'conexionDb.php';
        if($contrasena==$confirmarContrasena){
            $sql="SELECT * FROM usuarios WHERE correo='$correo'";
            $resultado=mysqli_fetch_array(mysqli_query($Conexion,$sql));
            if(!isset($resultado)){
                $sql="INSERT INTO usuarios (correo, nombreUsuario, Contrasena) 
                        VALUES ('$correo', '$nombre', '$contrasena')";
                $resultado=mysqli_query($Conexion,$sql);
                if(!$resultado){
                    die("Error al Registrar");  
                }else{
                    header("Location: login.html");
                }
            }else{
                echo "ya esta registrado";
            }
        }else{
            echo "no se puede registrar";
        }
?>
 -->
