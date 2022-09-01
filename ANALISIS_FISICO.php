<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert2@11.4.29/dist/sweetalert2.all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>                        

		<h1 style="margin-left:300px">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div style="margin-left: 100px; margin-right:100px;">    

                        <input type="text" id="cuadro_buscar" class="form-control" onkeyup="mi_busqueda();" list="listanavegadores" placeholder="Buscar...">
                        <datalist id="listanavegadores">
                        <?php
                            $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

                            $regi = mysqli_query($conexion, "select  *from asociados join compra on cedula=cedula_usuario") or die("Problemas en el select:" . mysqli_error($conexion));
                            while ($consu = mysqli_fetch_array($regi)) 
                            {                           
                        ?>        
                        <option label="<?php echo $consu['nombre_usuario'].' '. $consu['cedula_usuario']?>"   value="<?php echo $consu['marca']?>" >
                        
                        <?php } ?>
                        </datalist>                 
    </div>                        
                        <hr>
		                
                        <div class="row justify-content-md-center">		
                          <div class="col-md-6">
                            <div id="mostrar_mensaje"></div>
                          </div>
                        </div>                 
 </body>
 </html>

    <script type="text/javascript">

    function analisisfisico()
    { 
     var almendra_total = document.getElementById("almendra_total").value
     var almendra_sana = document.getElementById("almendra_sana").value
     var broca = document.getElementById("broca").value
     var broca_punto = document.getElementById("broca_punto").value
     var negro = document.getElementById("negro").value
     var vinagre = document.getElementById("vinagre").value
     var humedad = document.getElementById("humedad").value
               
      if (almendra_total == "" || almendra_sana == "" || broca == "" || broca_punto == "" || negro == "" || vinagre == "" || humedad == ""){
       
        return false
      }else {
 
        
        alert ("Registro exitoso");
      var parametros = 
      {
        "nombre_analisisfisico" : $("#nombre_analisisfisico").val(),
        "codigo_analisisfisico" : $("#codigo_analisisfisico").val(),
        "almendra_total" : $("#almendra_total").val(),
        "almendra_total1" : $("#almendra_total1").val(),
        "almendra_sana" : $("#almendra_sana").val(),
        "almendra_sana1" : $("#almendra_sana1").val(),
        "broca" : $("#broca").val(),
        "broca1" : $("#broca1").val(),
        "broca_punto" : $("#broca_punto").val(),
        "broca_punto1" : $("#broca_punto1").val(),
        "negro" : $("#negro").val(),
        "negro1" : $("#negro1").val(),
        "vinagre" : $("#vinagre").val(),
        "vinagre1" : $("#vinagre1").val(),
        "humedad" : $("#humedad").val(),
        "factor" : $("#factor").val(),
        "observaciones_analisisfisico" : $("#observaciones_analisisfisico").val(),
        "accion":"3"
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
    
    "accion" : "2"
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