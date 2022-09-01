<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>

<link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet">  
<script src = "bootstrap-editable / js / bootstrap-editable.js" > </script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


</head>
<body>                        

		<h1 style="margin-left:300px">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		                    <div style="margin-left: 100px; margin-right:100px;">    
                        <input type="text" class="form-control" id="cuadro_buscar" onkeyup="mi_busqueda();" list="listanavegadores" placeholder="Buscar...">
                        <datalist id="listanavegadores">
                        <?php
                            $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

                            $registros = mysqli_query($conexion, "select  *from asociados") or die("Problemas en el select:" . mysqli_error($conexion));
                            while ($reg = mysqli_fetch_array($registros)) 
                            {
                        ?>
        
                        <option label="<?php echo $reg['nombre_usuario']?>" value="<?php echo $reg['cedula_usuario']?>" >
                        <?php } ?>
                        </datalist>                 
                        </div>
                        
                        <hr>
		                
                        <div class="row justify-content-md-center">	
                          <div class="col-md-8">
                            <div id="mostrar_mensaje"></div>
                          </div>
                        </div>     
                      
 </body>
 </html>

    <script type="text/javascript">

<!-- ----------------- SECADO--------------------------------->  
function secado()
    {

     var producto_secado = document.getElementById("producto_secado").value
     var numero_latas = document.getElementById("numero_latas").value
     var humedad_secado = document.getElementById("humedad_secado").value
     var tiposecado_resultado = document.getElementById("tiposecado_resultado").value
   
          
      if (producto_secado == "" || numero_latas == "" || humedad_secado == "" || tiposecado_resultado == ""){
       
        return false
      }else {
 
        
        alert ("Registro exitoso");
    
      var parametros = 
      {
        "codigo_secado" : $("#codigo_secado").val(),
        "nombre_secado" : $("#nombre_secado").val(),
        "cedula_secado" : $("#cedula_secado").val(),
        "producto_secado" : $("#producto_secado").val(),
        "numero_latas" : $("#numero_latas").val(),
        "humedad_secado" : $("#humedad_secado").val(),
        "tipo_usuario" : $("#tipo_usuario").val(),
        "municipio_secado" : $("#municipio_secado").val(),
        "observaciones_secado" : $("#observaciones_secado").val(),
        "tiposecado_resultado" : $("#tiposecado_resultado").val(),
        "accion":"6"
      };

      $.ajax({
        data: parametros,
        url: 'ANEI2.php',
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
      return false;
    }
  }
<!-- ----------------- BUSQUEDA--------------------------------->  

function mi_busqueda()
{ 
    buscar = document.getElementById('cuadro_buscar').value;
 
  var parametros = 
  {
    "mi_busqueda" : buscar,
    
    "accion" : "14"
  };

  $.ajax({
    data: parametros,
    url: 'ANEI2.php',
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
    </script>