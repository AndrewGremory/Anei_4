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
		<h2 class="text-center">PRODUCTOS</h2>
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
              <h4 class="modal-title">PRODUCTOS A MODIFICAR</h4>
             <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
      
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="container-fluid">   
                <form>       
                        
                
                <div class="form-group row ">
                          Codigo:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="num" name="num" readonly><br>
                          </div>
                        </div>

                        Nombre Producto :
                        <select name="nombre" id="nombre">
                          <option>Selecione</option>
                          <option value="cafe pergamino seco">cafe pergamino seco</option>
                          <option value="cafe mojado">cafe mojado</option>
                          <option value="cacao seco">cacao seco</option>
                          <option value="cacao en baba">cacao en baba</option>
                        </select><br><br>

                        Tipo :
                        <select name="tipo" id="tipo">
                          <option>Selecione</option>
                          <option value="estandar">Estardar</option>
                          <option value="organico">Organico</option>
                        </select><br><br>

                        <div class="form-group row ">
                          Precio:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="precio" name="precio" ><br>
                          </div>
                        </div>

                        
                         <div class="form-group row ">
                          Prima:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="prima_producto" name="prima_producto" ><br>
                          </div>
                        </div>

                                                 
                        Politica :
                        <select name="politica" id="politica">
                          <option>Selecione</option>
                          <option value="politica1">Politica1</option>
                          <option value="politica2">Politica2</option>
                        </select><br><br>

                        <div class="form-group row ">
                          Descripcion:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" ><br>
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
        url: 'CONSULTA_PRODUCTO2.php',
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
    num = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
    nombre = fila.find('td:eq(1)').text();
    tipo = fila.find('td:eq(2)').text();
    precio = fila.find('td:eq(3)').text();
    prima = fila.find('td:eq(4)').text();
    politica = fila.find('td:eq(5)').text();
    descripcion = fila.find('td:eq(6)').text();
    
    $("#num").val(num);
    $("#nombre").val(nombre);
    $("#tipo").val(tipo);
    $("#precio").val(precio);
    $("#prima_producto").val(prima);
    $("#politica").val(politica);
    $("#descripcion").val(descripcion);
       
});
<!-- ----------------- CARGAR DATOS --------------------------------->
<!-- ----------------- MODIFICAR --------------------------------->
    function modificar()
    { 
    
      var parametros = 
      {
        "numero" : $("#num").val(),
        "nombre" : $("#nombre").val(),
        "tipo" : $("#tipo").val(),
        "precio": $("#precio").val(),
        "prima_producto" : $("#prima_producto").val(),
        "politica" : $("#politica").val(),
        "descripcion" : $("#descripcion").val(),
        "accion":"3"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_PRODUCTO2.php',
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
      url: 'CONSULTA_PRODUCTO2.php',
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
