<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
<head>
	<meta charset="utf-8">

	<script type="text/javascript">
    function error()
		{
          swal({
		      position: "top-end",
		      title: "¡Error!",
          text: "A este producto ya se registro",
          type: "error",
          });
    }
		

		function bueno()
		{
			Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
            })
    }
</script>
</head>
<body>
<?php
 $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");
 $accion = $_POST['accion'];

 if($accion == 23)
	   {  $resultado = mysqli_query($conexion," SELECT  *FROM usuario where cedula=$_POST[cedula]");
		 
          if ($consulta = mysqli_fetch_array($resultado))
			{ echo "<script> </script>";
        echo "<script> alert('Este Usuario ya fue Registrado');</script>";
      }
			else 
			{
			  mysqli_query($conexion,"insert into usuario (nombres, correo, telefono, municipio, cedula, usuario, clave) values ('$_POST[nombres]','$_POST[correo]',$_POST[telefono],'$_POST[municipio]',$_POST[cedula],'$_POST[usuario]','$_POST[clave]')");  
			  echo "<script> alert('Este Usuario fue con exito Registrado');</script>";
			}
		
		}
     
     ?>
</body>
</html>