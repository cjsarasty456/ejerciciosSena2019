 <?php

 session_start();
 require ('vendor/autoload.php');
 require ('App/Auth/Auth.php');

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/font-awesome.css">
     <link rel="stylesheet" href="css/bootstrap-social.css">
     <script src="js/jquery.js" charset="utf-8"></script>
   </head>
   <body>

     <div class="container">
       <div class="row">
          <div class="col-md-4">
            <a href="?login=Facebook" class="btn btn-block btn-social btn-lg btn-facebook">
              <span class="fa fa-facebook "></span> 
              Inicia sesion con Facebook
            </a>
            <a href="?login=Google" class="btn btn-block btn-social btn-lg btn-google">
              <span class="fa fa-google"></span> 
              Inicia sesion con Google
            </a>
            <a href="?login=Twitter" class="btn btn-block btn-social btn-lg btn-twitter">
              <span class="fa fa-twitter"></span> 
              Inicia sesion con Twitter
            </a>
          </div>
        </div>
     </div>

   </body>
 </html>
