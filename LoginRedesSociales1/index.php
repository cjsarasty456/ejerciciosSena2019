<?php
    require_once ('vendor/autoload.php');
    require_once ('app/clases/google_auth.php');
    require_once ('app/init.php');
    $googleClient=new Google_client();
    $auth=new GoogleAuth($googleClient);
    if($auth->checkRedirectCode()){
        // die($_GET['code']);
        // header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(!$auth->isLoggeIn()): ?>
            <a href="<?php echo $auth->getAuthUrl(); ?>">Iniciar Sesión con Google</a>
    <?php else:   ?>
        Bienvenido.. <a href="logout.php">CerrarSesion</a>
    <?php endif ?>
        

        
    
</body>
</html>