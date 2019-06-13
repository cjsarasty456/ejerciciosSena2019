<!DOCTYPE html>
<html lang="es">
    <head>

        <!-- Incorporar los archivos de Bootstrap -->
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
    </head>
    <body>
        <header>
            <!-- navbar-dark es el estilo y color de los elementos -->
            <!-- bg-dark configura el estilo y color de la barra de navegación -->
                <nav class="navbar navbar-dark bg-dark navbar-expand-md" >
                    <a class="navbar-brand" href="index.html">Nombre del Sitio</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro.html">Registro</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listaregistro.html">
                                Lista Registros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeria.html">
                                Galería
                            </a>
                        </li>
                    </div>
                </nav>
        </header>
        <div class="container-fluid">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla">
                    <?php
                    $Conexion = mysqli_connect( 
                        'localhost', //nombre del servidor
                        'root', //nombre usuario
                        '', //contraseña
                        'baselogin' //nombre de la base de datos
                      ) or die(mysqli_erro($mysqli));
                      $sql="select * from personas";
                      $resultado=mysqli_query($Conexion,$sql);
                      while($registro=mysqli_fetch_array($resultado)){
                        
                          $return="<tr><td>$registro[1]</td>";
                          $return.="<td>$registro[2]</td>";
                          $return.="<td>$registro[3]</td>";
                          $return.="<td>$registro[4]</td>";
                          $return .="<td><div class='dropdown'>";
                          $return.="<button class='btn btn-secondary dropdown-toggle' type='button' id='BtnAcciones' 
                          data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                          $return.="Acciones";
                          $return.="</button>";
                          $return.="<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
                          $return.="<a class='dropdown-item' href=''>Editar</a>";
                          $return.="<a class='dropdown-item' href='eliminar.php?id=$registro[0]'>Eliminar</a>";
                          $return.="<a class='dropdown-item' href='#'>Deshabilitar</a>";
                          $return.="</div>";
                          $return.="</div></td>";
                          $return.="</tr>";
                          echo $return;

                          
                      }
                    ?>
                </tbody>
            </table>
        </div>
</body>
</html>