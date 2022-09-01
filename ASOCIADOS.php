<!DOCTYPE html>
<html>
<head>
	<title>Asociados</title>
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>

<link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet" >  
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
<body  style="background-color: #dae09f">


		<h1  class=" text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		
                       <h2 class="text-center">ASOCIADOS</h2>  
                       <div>
                       
                      <form>       
                      <div class="row">     
                      
                       <div class="col-lg-5"  style=" margin-top:20px; margin-left:50px;">
                         <div class="input-group mb-3 form-floating">
                           <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="NOMBRE COMPLETO" required>
                           <span class="input-group-text">✎</span>
                           <label for="nombre" class="form-label">Nombre Completo:</label>
                         </div>
                        </div>
                       
                       
                        <div class="col-lg-4" style="  margin-top:20px; margin-left:6px">
                          <div class="input-group mb-3 form-floating">
                           <input type="number" class="form-control" id="cedula_usuario" name="cedula_usuario" min="0" placeholder="CEDULA" required><br>
                           <span class="input-group-text">✎</span>
                           <label for="cedula" class="form-label">Cedula:</label>
                          </div>
                        </div>
                      </div>


                      <div class="row"> 
                        <div class="col-lg-3" style="margin-left:50px">
                          <div class="input-group mb-3 form-floating">
                           <input type="number" class="form-control" id="contacto" name="contacto" placeholder="CONTACTO" required><br>
                           <span class="input-group-text">✎</span>
                           <label for="contacto" class="form-label">Contacto:</label>
                          </div>    
                        </div>                        
                        
                        <div class="col-lg-3">
                          <div class="input-group mb-3 form-floating">                            
                            <input type="text" class="form-control" id="codigo_up" name="codigo_up" placeholder=" CODIGO UP" required><br>
                            <span class="input-group-text">✎</span>
                           <label for="codigo_up" class="form-label">Codigo Up:</label>
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="input-group mb-3 form-floating">
                           <input type="text" class="form-control" id="tipo_vinculacion" name="tipo_vinculacion" value="estandar" readonly><br>
                           <span class="input-group-text">✎</span>
                           <label for="tipo_vinculacion" class="form-label">Tipo Vinculacion:</label>
                         </div>
                        </div>
                      </div>
                      

                      <div class="row">  
                        <div class="col-lg-3" style=" margin-left:50px">
                         <div class="input-group mb-3 form-floating">
                            <input type="text" class="form-control" id="municipio" name="municipio"  placeholder="MUNICIPIO" required><br>   
                            <span class="input-group-text">✎</span>
                           <label for="municipio" class="form-label">Municipio:</label>                       
                         </div>    
                        </div>                     
                          
                          <div class="col-lg-3">
                           <div class="input-group mb-3 form-floating">
                            <input type="text" class="form-control" id="vereda" name="vereda"  placeholder="VEREDA" required><br>
                            <span class="input-group-text">✎</span>
                           <label for="Vereda" class="form-label">Vereda:</label>
                           </div>   
                          </div>                       
                          
                          <div class="col-lg-3">
                           <div class="input-group mb-3 form-floating">
                            <input type="text" class="form-control" id="finca" name="finca" placeholder="FINCA" required><br>
                            <span class="input-group-text">✎</span>
                           <label for="finca" class="form-label">Finca:</label>
                           </div>
                          </div>
                      </div>      

                           <div class="form-group row ">
		                       <div class="offset-lg-5 col-lg-8">
                           <button class="btn btn-secondary btn-lg " onclick="usuario();">Guardar</button>
                           </div> 
                           </div>                      
                      </form>
                      <div id="mostrar_mensaje"></div>
</div>          
</body>
</html>

<script type="text/javascript">

function excele()
{swal("Good job!", "You clicked the button!", "success");}

<!-- ----------------- ASOCIADO--------------------------------->  
  function usuario()
    { 
     var nombre_usuario = document.getElementById("nombre_usuario").value
     var cedula_usuario = document.getElementById("cedula_usuario").value
     var contacto = document.getElementById("contacto").value
     var codigo_up = document.getElementById("codigo_up").value
     var municipio = document.getElementById("municipio").value
     var vereda = document.getElementById("vereda").value
     var finca = document.getElementById("finca").value
    

      if (nombre_usuario == "" || cedula_usuario  == "" || contacto  == "" || codigo_up  == "" || municipio  == "" || vereda  == "" || finca  == ""){
       
      return false
      }else {        
       
      
      var parametros = 
      {
       
        "nombre_usuario" : $("#nombre_usuario").val(),
        "municipio" : $("#municipio").val(),
        "vereda" : $("#vereda").val(),
        "finca" : $("#finca").val(),
        "tipo_vinculacion" : $("#tipo_vinculacion").val(),
        "cedula_usuario" : $("#cedula_usuario").val(),
        "codigo_up" : $("#codigo_up").val(),
        "estatus" : $("#estatus").val(),
        "cupo_cafe" : $("#cupo_cafe").val(),
        "cupo_cacao" : $("#cupo_cacao").val(),
        "contacto" : $("#contacto").val(),
        "accion":"16"
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
    </script>