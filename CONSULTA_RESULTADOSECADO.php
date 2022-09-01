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

<script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

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
		<h2 class="text-center">RESULTADO DEL SECADO</h2>
  <div class="row justify-content-md-center">		
    <div class="col-md-15">
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
              <h4 class="modal-title">REGISTRO A MODIFICAR</h4>
             <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
      
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="container-fluid">   
                <form>       
    <div class="form-group row ">
		  Codigo de entrada:
		 <div class="col-lg-20">
		  <input type="text" class="form-control" id="codigo_resultado" name="codigo_resultado" readonly><br>
		 </div>
	   </div>

	  
	 <div class="form-group row">
	  Precio x Kilo:
		<div class="col-lg-7">
		 <input type="number" class="form-control" id="costo_resultado" name="costo_resultado"  placeholder="0"><br><br>
		</div>
      </div>

	  <div class="form-group row">
	  Kilos secos:
		<div class="col-lg-7">
		 <input type="number" class="form-control" id="cantidad_resultado" name="cantidad_resultado" ><br><br>
		</div>
      </div>

	  <div class="form-group row">
	  Total a Pagar	:
		<div class="col-lg-7">
		 <input type="number" class="form-control" id="costo_total_resultado" name="costo_total_resultado" ><br><br>
		</div>
      </div>

	  Tipo de Pago:
	    <select name="tipo_pago" id="tipo_pago">
		  <option>seleccione</option>
		  <option value="efectivo">Efectivo </option>
		  <option value="cafe">Cafe</option>
		  <option value="cacao">Cacao</option>
		</select> <br> <br> 

	 <p>Observaciones:</p>
	 <textarea name="observaciones_resultado" id="observaciones_resultado" rows="4" cols="40" placeholder="descriptores de calidad"></textarea><br><br>


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
 
<!-- -----------------CONSULTA--------------------------------->  
  
    
    var parametros = 
      {
        
        "accion":"1"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_RESULTADOSECADO2.php',
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
    codigo_resultado =  (fila.find('td:eq(0)').text()); //capturo el ID		            
    cantidad_resultado = fila.find('td:eq(1)').text();
    tipograno_resultado = fila.find('td:eq(2)').text();
    costo_resultado = fila.find('td:eq(3)').text();
    costo_total_resultado = fila.find('td:eq(4)').text();
    tipo_pago = fila.find('td:eq(5)').text();
    observaciones_resultado = fila.find('td:eq(7)').text();
    
    
    
    $("#codigo_resultado").val(codigo_resultado);
    $("#cantidad_resultado").val(cantidad_resultado);
    $("#tipograno_resultado").val(tipograno_resultado)
    $("#costo_resultado").val(costo_resultado);
    $("#costo_total_resultado").val(costo_total_resultado);
    $("#tipo_pago").val(tipo_pago);
    $("#observaciones_resultado").val(observaciones_resultado);
  });
<!-- ----------------- CARGAR DATOS --------------------------------->
<!-- ----------------- MODIFICAR --------------------------------->
function modificar()
    { 
    
      var parametros = 
      {
        "codigo_resultado" : $("#codigo_resultado").val(),
        "cantidad_resultado" : $("#cantidad_resultado").val(),
        "tipo_gramo_resultado" : $("#tipograno_resultado").val(),
        "costo_resultado": $("#costo_resultado").val(),
        "costo_total_resultado" : $("#costo_total_resultado").val(),
        "tipo_pago" : $("#tipo_pago").val(),
        "observaciones_resultado" : $("#observaciones_resultado").val(),
        "accion":"3"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_RESULTADOSECADO2.php',
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
        url: 'CONSULTA_RESULTADOSECADO2.php',
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
