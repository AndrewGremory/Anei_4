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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</head>
<body>

<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<h2 class="text-center">USUARIOS</h2>
  <div class="row justify-content-md-center">		
    <div class="col-md-25">
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
              <h4 class="modal-title">USUARIOS</h4>
             <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
      
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="container-fluid">   
                <form>       
                        
                
                <div class="form-group row ">
                          Nombres:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="nombres" name="nombres" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Cedula:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cedu" name="cedu" min="0" readonly><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Telefono:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="telefono" name="telefono"><br>
                          </div>
                        </div>

                        
                         <div class="form-group row ">
                          Correo:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="correo" name="correo"><br>
                          </div>
                        </div>
                          
                        <div class="form-group row ">
                        Municipio:
                        <select name="municipio" id="municipio">
		                <option value="valledupar">Valledupar</option>
                        <option value="codazzi">A. Codazzi</option>
                        <option value="pueblo bello">Pueblo Bello</option>
		                </select><br><br>
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
        url: 'CONSULTA_USUARIOS2.php',
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
    nombres = fila.find('td:eq(0)').text();
    cedu = parseInt(fila.find('td:eq(1)').text()); //capturo el ID		            
    telefono = fila.find('td:eq(2)').text();
    correo = fila.find('td:eq(3)').text();
    municipio = fila.find('td:eq(4)').text();

    $("#cedu").val(cedu);
    $("#nombres").val(nombres);
    $("#telefono").val(telefono);
    $("#correo").val(correo);
    $("#municipio").val(municipio);
    });
<!-- ----------------- CARGAR DATOS --------------------------------->
<!-- ----------------- MODIFICAR --------------------------------->
function modificar()
    { 
    
      var parametros = 
      {
        "cedula" : $("#cedu").val(),
        "nombres" : $("#nombres").val(),
        "telefono" : $("#telefono").val(),
        "municipio": $("#municipio").val(),
        "correo": $("#correo").val(),
        "accion":"3"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_USUARIOS2.php',
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
      url: 'CONSULTA_USUARIOS2.php',
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
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 

