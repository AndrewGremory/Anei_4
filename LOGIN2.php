<?php
session_start();
?>
<!doctype html>
<html>
     <head>
          <title>Login</title>
     </head>

     <body>
          <?php
              $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

              $resultados = mysqli_query($conexion," SELECT * FROM usuario WHERE usuario = '$_POST[usuario]' and clave = '$_POST[clave]'");
              if($consultas = mysqli_fetch_array($resultados))
		     {$_SESSION['municipio']=$consultas['municipio'];
                $_SESSION['rol']=$consultas['rol'];

               ?>
               <Script> window.location.replace("MENU.HTML");</Script> 
               <?php
              }
              else {
                header("Location: LOGIN_MEJORADO.PHP?error=1");
              }
        ?>
    </body>

</html>
