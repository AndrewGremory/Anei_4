<!DOCTYPE html>
<html>
<head>
	<title>Producto</title>
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
                             <select class="form-control" name="nombre" id="nombre" required>
                             <option></option>
                             <option value="cafe pergamino seco">cafe pergamino seco</option>
                             <option value="cafe mojado">cafe mojado</option>
                             <option value="cacao seco">cacao seco</option>
                             <option value="cacao en baba">cacao en baba</option>
                             </select><br><br>
                             <span class="input-group-text">✎</span>
                             <label for="producto" class="form-label">Producto:</label>
                             </div>
                             </div>

                             <div class="col-lg-4">
                             <div class="input-group mb-3 form-floating">
                             <select class="form-control" name="tipo" id="tipo" required>
                             <option></option>
                             <option value="estandar">Estardar</option>
                             <option value="organico">Organico</option>
                             </select><br><br>
                             <span class="input-group-text">✎</span>
                             <label for="Tipo" class="form-label">Tipo:</label>
                             </div>
                             </div>

                             <div class="col-lg-4">
                             <div class="input-group mb-3 form-floating">
                             <input type="text" class="form-control" id="precio" name="precio" required><br>
                             <span class="input-group-text">✎</span>
                             <label for="Precio" class="form-label">Precio:</label>
                             </div>
                             </div>
                        </div>

                        <div class="form-group row ">
                             <div class="col-lg-3">
                             <div class="input-group mb-3 form-floating">
                             <input type="text" class="form-control" id="prima_producto" name="prima_producto" required><br>
                             <span class="input-group-text">✎</span>
                             <label for="Prima" class="form-label">Prima:</label>
                             </div>
                             </div>

                             <div class="col-lg-3">
                             <div class="input-group mb-3 form-floating">
                             <select class="form-control" name="politica" id="politica" required>
                             <option></option>
                             <option value="politica1">Politica1</option>
                             <option value="politica2">Politica2</option>
                             </select><br><br>
                             <span class="input-group-text">✎</span>
                             <label for="Politica" class="form-label">Politica:</label>
                             </div>
                             </div>

                             <div class="col-lg-6">
                             <div class="input-group mb-3 form-floating">
                             <textarea class="form-control" name="descripcion" id="descripcion" rows="4" cols="10" placeholder="escriba aqui las observaciones" required></textarea><br>
                             <span class="input-group-text">✎</span>
                             <label for="observaciones" class="form-label">Descripción:</label> 
                            </div>
                             </div>

                             <div class="form-group row">
                             <div class="offset-lg-5 col-lg-8">
                             <button class="btn btn-secondary btn-lg" onclick="productos();">Guardar</button>
                             </div> 
                             </div>
                             </form>
                             </div>
</body>
</html>

<!-- ----------------- ASOCIADO--------------------------------->  

<script type="text/javascript">
  function productos()
    { 
     var nombre = document.getElementById("nombre").value
     var tipo = document.getElementById("tipo").value
     var precio = document.getElementById("precio").value
     var prima = document.getElementById("prima_producto").value
     var politica = document.getElementById("politica").value
     var observaciones = document.getElementById("descripcion").value
  

      if (nombre== "" || tipo  == "" || precio  == "" || prima  == "" || politica  == "" || observaciones  == ""){
       
        return false
      }else {        
      alert ("Registro exitoso");  
          
      var parametros = 
      {
       
        "nombre" : $("#nombre").val(),
        "codigo" : $("#codigo").val(),
        "precio" : $("#precio").val(),
        "descripcion" : $("#descripcion").val(),
        "tipo" : $("#tipo").val(),
        "prima_producto" : $("#prima_producto").val(),
        "politica" : $("#politica").val(),
        "accion":"17"
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