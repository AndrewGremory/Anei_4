<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


</head>
<body>

<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div class="row text-center">


    <input type="text" class="form-control" id="cuadro_buscar" onkeypress="busqueda();" list="listanavegadores" placeholder="Buscar cedula...">
        <datalist id="listanavegadores">
        <?php
      $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

      $registros = mysqli_query($conexion, "select  *from asociados") or die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg = mysqli_fetch_array($registros)) {?>
        
        <option label="<?php echo $reg['nombre_usuario']?>" value="<?php echo $reg['cedula_usuario']?>" >
        
        <?php } ?>
        </datalist> 
  
    </div>

		<hr>
		<h2 class="text-center">CUPOS</h2>
   <div class="row justify-content-md-center">		
   <div id="mostrar_mensaje"></div>
   </div>
</div>
    
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
</body>
</html>
<script type="text/javascript">

<!-- ----------------- CONTROL SECADORA--------------------------------->  
function busqueda()
    { 
    	buscar = document.getElementById('cuadro_buscar').value;
      var parametros = 
      {
        "mi_busqueda" : buscar,
        "accion" : "1"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_CUPO2.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
<!-- ----------------- AGREGAR A LA SECADORA--------------------------------->  


</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
