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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>




</head>
<body>

<div class="container text-center" >
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
				
		<h2 class="text-center">ASOCIADOS</h2>
    <div style="margin-left:400px;">
    <div class="row justify-content-md-center">		
    <div class="col-md-15">
    <div id="mostrar_mensaje"></div>
    </div>
    </div>
    </div>
    </div>
    
			<!-- -----------------MODIFICAR --------------------------------->	
      <div class="modal fade" id="modificar">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content row-1 col-md-6">
    
      
      
            <!-- cabecera del diálogo -->
            <div class="modal-header">
              <h4 class="modal-title">PRODUCTORES</h4>
             <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
      
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="container-fluid">   
                <form>       
                        
                
                <div class="form-group row ">
                          Nombre Completo:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="nombre_usuario1" name="nombre_usuario1" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Cedula:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cedula_usuario1" name="cedula_usuario1" min="0"><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Contacto:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="contacto1" name="contacto1"  ><br>
                          </div>
                        </div>

                        
                         <div class="form-group row ">
                          Codigo UP:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="codigo_up1" name="codigo_up1"   readonly><br>
                          </div>
                        </div>
                          
                        <div class="form-group row ">
                          Municipio:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="municipio1" name="municipio1" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Vereda:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="vereda1" name="vereda1"><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Finca:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="finca1" name="finca1"><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                         Estatus:
                         <select name="estatus1" id="estatus1">
		                       <option value="estandar">Estandar </option>
                           <option value="organico">Organico</option>
		                      </select><br><br>
                        </div>

                        <div class="form-group row ">
                        tipo de Vinculacion:
                         <select name="tipo_vinculcion1" id="tipo_vinculacion1">
		                       <option value="estandar">Estandar </option>
                           <option value="asociado">Asociado</option>
		                      </select><br><br>
                        </div>

                          
                        <div class="form-group row ">
                          Cupo_cafe:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cupo_cafe1" name="cupo_cafe1" min="0"  required><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Cupo_cacao:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cupo_cacao1" name="cupo_cacao1" min="0"  required><br>
                          </div>
                        </div>

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
        url: 'CONSULTA_ASOCIADOS2.php',
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
    cedula = parseInt(fila.find('td:eq(1)').text()); //capturo el ID		            
    nombre = fila.find('td:eq(0)').text();
    contacto = fila.find('td:eq(2)').text();
    tipo_vinculacion = fila.find('td:eq(3)').text();
    finca = fila.find('td:eq(4)').text();
    codigo_up = fila.find('td:eq(5)').text();
    municipio = fila.find('td:eq(6)').text();
    vereda = fila.find('td:eq(7)').text();
    estatus = fila.find('td:eq(8)').text();
    cupo_cafe = fila.find('td:eq(9)').text();
    cupo_cacao = fila.find('td:eq(10)').text();
    
    $("#cedula_usuario1").val(cedula);
    $("#nombre_usuario1").val(nombre);
    $("#contacto1").val(contacto);
    $("#tipo_vinculacion1").val(tipo_vinculacion);
    $("#finca1").val(finca);
    $("#codigo_up1").val(codigo_up);
    $("#municipio1").val(municipio);
    $("#vereda1").val(vereda);
    $("#estatus1").val(estatus);
    $("#cupo_cafe1").val(cupo_cafe);
    $("#cupo_cacao1").val(cupo_cacao);
       
});
<!-- ----------------- CARGAR DATOS --------------------------------->
<!-- ----------------- MODIFICAR --------------------------------->
function modificar()
    { 
    
      var parametros = 
      {
        "cedula" : $("#cedula_usuario1").val(),
        "nombre" : $("#nombre_usuario1").val(),
        "contacto" : $("#contacto1").val(),
        "tipo": $("#tipo_vinculacion1").val(),
        "finca" : $("#finca1").val(),
        "codigo_up" : $("#codigo_up1").val(),
        "municipio" : $("#municipio1").val(),
        "vereda" : $("#vereda1").val(),
        "estatus" : $("#estatus1").val(),
        "cupo_cafe": $("#cupo_cafe1").val(),
        "cupo_cacao" : $("#cupo_cacao1").val(),
        "accion":"3"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_ASOCIADOS2.php',
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
      url: 'CONSULTA_ASOCIADOS2.php',
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
