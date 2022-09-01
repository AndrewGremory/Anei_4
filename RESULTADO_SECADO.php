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

<script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">



</head>
<body>                        
<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div style="margin-left: 100px; margin-right:100px;">    

                        <input type="text" id="cuadro_buscar" class="form-control" onkeyup="mi_busqueda();" list="listanavegadores" placeholder="Buscar...">
                        <datalist id="listanavegadores">
                        <?php
                            $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

                            $registros = mysqli_query($conexion, "select  *from secado join asociados on cedula_usuario=cedula_secado") or die("Problemas en el select:" . mysqli_error($conexion));
                            while ($reg = mysqli_fetch_array($registros)) 
                            {
                        ?>
        
                        <option label="<?php echo $reg['nombre_usuario'].' '. $reg['cedula_secado']?>" value="<?php echo $reg['codigo_secado']?>" >
                        <?php } ?>
                        </datalist>                 
        </div>
                        
                        <hr>
		                
                        <div class="row justify-content-md-center">		
                          <div class="col-md-8">
                            <div id="mostrar_mensaje"></div>
                          </div>
                        </div>
                       
</div>

                       
 </body>
 </html>

    <script type="text/javascript">
      function bn() {
        Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 150000
            })
      }
<!-- ----------------- ANALISIS SENSORIAL---------------------------------> 
function resultado_secado()
    {         
      var costo = document.getElementById("costo_resultado").value
      var cantidad = document.getElementById("cantidad_resultado").value
      var tipo = document.getElementById("tipo_pago").value
      if (costo == ""|| cantidad==""|| tipo == ""){
        
        return false
      }else {
      
        alert("Registro exitoso");
       
      var parametros = 
      { 
        "codigo_resultado" : $("#codigo_resultado").val(),
        "cantidad_resultado" : $("#cantidad_resultado").val(),
        "costo_resultado" : $("#costo_resultado").val(),
        "costo_total_resultado" : $("#costo_total_resultado").val(),
        "tipograno_resultado" : $("#tipograno_resultado").val(),
        "observaciones_resultado" : $("#observaciones_resultado").val(),
        "tipo_pago" : $("#tipo_pago").val(),
        "municipio_resultado" : $("#municipio_resultado").val(),
        "cedula_resultado" : $("#cedula_resultado").val(),
        "producto" : $("#producto").val(),
        "nombre_resultado" : $("#nombre_resultado").val(),
        "accion":"7"
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
    
    "accion" : "15"
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