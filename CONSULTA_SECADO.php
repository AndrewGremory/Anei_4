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

<link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet" >  
<script src = "bootstrap-editable / js / bootstrap-editable.js" > </script>

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
		<h2 class="text-center">SECADO</h2>
  <div class="row justify-content-md-center">		
    <div class="col-md-15"  style="margin-left:300px;">
     <div id="mostrar_mensaje"></div>
    
   </div>
   </div>
</div>
    
			<!-- -----------------MODIFICAR --------------------------------->	
      <div class="modal fade" id="modificar">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content row-1 col-md-6">
    
      
      
            <!-- cabecera del diálogo -->
            <div class="modal-header">
              <h4 class="modal-title">PRODUCTOS A SECAR</h4>
             <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
      
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="container-fluid">   
                <form>       
                        
                
       <div class="form-group row ">
		    Nombre:
		    <div class="col-lg-15">
		     <input type="text" class="form-control" id="nombre_secado" name="nombre_secado" readonly ><br>
		    </div>
		   </div>
              
			 <div class="form-group row ">
			 Cedula:
		   <div class="col-lg-12">
			 <input type="number" class="form-control" id="cedula_secado" name="cedula_secado" readonly ><br>
			</div>
		 </div>

		 
		 <div class="form-group row ">
		 Codigo de entrada:
		 <div class="col-lg-15">
		   <input type="text" class="form-control" id="codigo_secado" name="codigo_secado" readonly ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Tipo de Usurio:
		 <div class="col-lg-15">
		   <input type="text" class="form-control" id="tipo_usuario" name="tipo_usuario"  readonly><br><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Municipio:
		 <div class="col-lg-15">
		   <input type="text" class="form-control" id="municipio_secado" name="municipio_secado"  readonly><br><br>
		 </div>
		</div>

		 Producto:
		 <select name="producto_secado" id="producto_secado">
		   <option>seleccione</option>
		   <option value="cafe mojado">Cafe Mojado</option>
		   <option value="cacao en baba">Cacao en Baba</option>
		 </select><br><br>

		 <div class="form-group row">
		 N° de Latas
		   <div class="col-lg-9">
			 <input type="number" class="form-control" id="numero_latas" name="numero_latas" placeholder="0" min="0"><br><br>
		   </div>
		 </div>

		 Humedad:
		 <select name="humedad_secado" id="humedad_secado">
		   <option>seleccione</option>
		   <option value="mojado">Mojado</option>
		   <option value="oreado">Oreado</option>
		 </select><br><br>

		 Tipo de Secado:
		  <select name="tiposecado_resultado" id="tiposecado_resultado">
			 <option>seleccione</option>
			 <option value="patio">Patio </option>
			 <option value="patio mini">Patio mini</option>
			 <option value="secadora la mesa">Secadora la Mesa</option>
			</select> <br> <br> 

		 <p>Observaciones:</p>
		 <textarea name="observaciones_secado" id="observaciones_secado" rows="3" cols="30" placeholder="escriba aqui las observaciones"></textarea><br><br>
	

                         <div class="form-group row">
                          <div class="offset-lg-1 col-lg-8">
                          
                            <button  onclick="modificar();">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
                          </div> 
                         </div>
                        </form>
                   </div>            
               </div>
        

              
          </div>
        </div>
      </div>
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
</body>
</html>
<script type="text/javascript">

<!-- ----------------- CONSULTA--------------------------------->  


      var parametros = 
      {
        
        "accion":"1"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_SECADO2.php',
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
         
   
    
      <!-- ----------------- CARGAR DATOS--------------------------------->
    $(document).on("click", ".editar", function(){		        
    opcion = 2;//editar
    fila = $(this).closest("tr");	  
    nombre =  (fila.find('td:eq(0)').text());      
    cedula_secado =  (fila.find('td:eq(1)').text()); //capturo el ID		            
    codigo = fila.find('td:eq(2)').text();
    tipo_usuario = fila.find('td:eq(3)').text();
    municipio_secado = fila.find('td:eq(4)').text();
    producto_secado = fila.find('td:eq(5)').text();
    numero_latas = fila.find('td:eq(6)').text();
    humedad_secado = fila.find('td:eq(7)').text();
    tiposecado_resultado = fila.find('td:eq(8)').text();
    observaciones_secado = fila.find('td:eq(9)').text();
    
    $("#nombre_secado").val(nombre);
    $("#codigo_secado").val(codigo);
    $("#cedula_secado").val(cedula_secado);
    $("#tipo_usuario").val(tipo_usuario)
    $("#municipio_secado").val(municipio_secado);
    $("#producto_secado").val(producto_secado);
    $("#numero_latas").val(numero_latas);
    $("#humedad_secado").val(humedad_secado);
    $("#tiposecado_resultado").val(tiposecado_resultado);
    $("#observaciones_secado").val(observaciones_secado);
});
<!-- ----------------- CARGAR DATOS --------------------------------->
<!-- ----------------- MODIFICAR --------------------------------->
function modificar()
    { 
    
      var parametros = 
      {
        "codigo_secado" : $("#codigo_secado").val(),
        "cedula_secado" : $("#cedula_secado").val(),
        "municipio_secado" : $("#municipio_secado").val(),
        "producto_secado": $("#producto_secado").val(),
        "numero_latas" : $("#numero_latas").val(),
        "humedad_secado" : $("#humedad_secado").val(),
        "tiposecado_resultado" : $("#tiposecado_resultado").val(),
        "observaciones_secado" : $("#observaciones_secado").val(),
        "accion":"3"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_SECADO2.php',
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
 
<!-- ----------------- MODIFICAR --------------------------------->
<!-- ----------------- ELIMINAR--------------------------------->  

function eliminar(eliminar)
  { 

    Swal.fire({
      title: 'Are you sure?',
      text: 'No podras revertirlo!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
    elimi = eliminar;
    var parametros = 
    {
      "eli" : elimi,
      "accion" : "4"
    };
   
    $.ajax({
      data: parametros,
      url: 'CONSULTA_SECADO2.php',
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

        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
          )
      }
    })

    return false;
  }
<!-- ----------------- ELIMINAR ---------------------------------> 
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
