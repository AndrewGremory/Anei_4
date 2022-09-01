<!DOCTYPE html>
<html>
<head>
	<title>Producto</title>
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
                       <h1 style="margin-left:450px">CENTRO DE ACOPIO ANEI</h1>
		                   <hr>
		                   <div style="margin-left: 100px; margin-right:100px;">    
                       <h2 class="text-center">PRODUCTO</h2>
                       <form>       
                        <div class="form-group row ">           
                             <div class="col-lg-4">
                             <div class="input-group mb-3 form-floating">
                             <input type="text" class="form-control" id="nombres" name="nombres" required><br>
                             <span class="input-group-text">✎</span>
                             <label for="Nombres" class="form-label">Nombres:</label>
                             </div>
                             </div>

                             <div class="col-lg-4">
                             <div class="input-group mb-3 form-floating">
                             <input type="number" class="form-control" id="cedula" name="cedula" required><br>
                             <span class="input-group-text">✎</span>
                             <label for="Cedula" class="form-label">Cedula:</label>
                             </div>
                             </div>

                             <div class="col-lg-4">
                             <div class="input-group mb-3 form-floating">
                             <input type="number" class="form-control" id="telefono" name="telefono" required><br>
                             <span class="input-group-text">✎</span>
                             <label for="telefono" class="form-label">Telefono:</label>
                             </div>
                             </div>
                        </div>
                        <div class="form-group row ">
                             <div class="col-lg-3">
                             <div class="input-group mb-3 form-floating">
                             <input type="text" class="form-control" id="correo" name="correo" required><br>
                             <span class="input-group-text">✎</span>
                             <label for="correo" class="form-label">Correo:</label>
                             </div>
                             </div>                           

                             <div class="col-lg-3">
                             <div class="input-group mb-3 form-floating">
                             <select class="form-control" name="municipio" id="municipio" required>
                             <option></option>
                             <option value="valledupar">Valledupar</option>
                             <option value="codazzi">A. Codazzi</option>
                             <option value="pueblo bello">P. Bello</option>
                             </select><br><br>
                             <span class="input-group-text">✎</span>
                             <label for="municipio" class="form-label">Municipio:</label>
                             </div>
                             </div>

                             <div class="col-lg-3">
                             <div class="input-group mb-3 form-floating">
                             <input type="text" class="form-control" id="usuario" name="usuario" required><br>
                             <span class="input-group-text">✎</span>
                             <label for="usuario" class="form-label">Usuario:</label>
                             </div>
                             </div>  

                             <div class="col-lg-3">
                             <div class="input-group mb-3 form-floating">
                             <input type="password" class="form-control" id="clave" name="clave" required><br>
                             <span class="input-group-text">✎</span>
                             <label for="clave" class="form-label">Contraseña:</label>
                             </div>
                             </div> 
                        </div>

                             <div class="form-group row">
                             <div class="offset-lg-5 col-lg-8">
                             <button class="btn btn-secondary btn-lg" onclick="usuarios();">Guardar</button>
                             </div> 
                             </div>
                             </form>
                             </div>
                             <div id="mostrar_mensaje"></div>


</body>
</html>

<!-- ----------------- ASOCIADO--------------------------------->  

<script type="text/javascript">
  function usuarios()
    { 
     var nombres = document.getElementById("nombres").value
     var cedula = document.getElementById("cedula").value
     var telefono = document.getElementById("telefono").value
     var correo = document.getElementById("correo").value
     var municipio = document.getElementById("municipio").value
     var usuario = document.getElementById("usuario").value
     var clave = document.getElementById("clave").value  
  

      if (nombres== "" || cedula  == "" || telefono  == "" || correo  == "" || municipio  == "" || usuario  == "" || clave  == ""){
       
        return false
      }else {        
        
       
      var parametros = 
      {
       
        "nombres" : $("#nombres").val(),
        "cedula" : $("#cedula").val(),
        "telefono" : $("#telefono").val(),
        "correo" : $("#correo").val(),
        "municipio" : $("#municipio").val(),
        "usuario" : $("#usuario").val(),
        "clave" : $("#clave").val(),
        "accion":"23"
      };

      $.ajax({
        data: parametros,
        url: 'USUARIOS2.php',
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