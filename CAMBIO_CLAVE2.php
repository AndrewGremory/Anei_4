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
              $conexion = mysqli_connect("localhost", "root", "", "anei") or die ("Problemas con la conexión");
              $resultado = mysqli_query($conexion,"select *from usuario  WHERE cedula = $_POST[cedula]");
               $a=0;
              if ($consulta = mysqli_fetch_array($resultado))
		      {  mysqli_query($conexion," UPDATE usuario SET usuario = '$_POST[usuario]', clave = '$_POST[clave]'  WHERE cedula = $_POST[cedula]");
                header("Location: CAMBIO_CLAVE.PHP?bueno=1");              
              }
              else 
              {
                header("Location:  CAMBIO_CLAVE.PHP?error=1");
              }
        ?>
    </body>

</html>
