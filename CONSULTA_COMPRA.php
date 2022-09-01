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
	
		<h2 class="text-center">REGISTROS</h2>
  <div class="row justify-content-md-center">		
    <div class="col-md-15"  style="margin-left:600px;">
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
		   <div class="col-lg-12">
			 <input type="text" class="form-control" id="nombre_compra1" name="nombre_compra1" readonly ><br>
			</div>
		 </div>
                              
			 <div class="form-group row ">
			 Cedula:
		   <div class="col-lg-12">
			 <input type="number" class="form-control" id="cedula_compra1" name="cedula_compra1" readonly ><br>
			</div>
		 </div>

		 
		 <div class="form-group row ">
		 Codigo de entrada:
		 <div class="col-lg-15">
		   <input type="text" class="form-control" id="marca1" name="marca1" readonly ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Municipio Compra:
		 <div class="col-lg-12">
		  <input type="text" class="form-control" id="municipio_compra1" name="municipio_compra1" readonly><br>
		 </div>
		</div>
 
		 Producto:
		 <select name="producto1" id="producto1">
		   <option>seleccione</option>
		   <option value="cafe pergamino seco">Cafe pergamino seco </option>
		   <option value="cafe mojado">Cafe mojado</option>
		   <option value="cacao seco">Cacao seco </option>
		   <option value="cacao en baba">Cacao en baba</option>
		 </select><br><br>

		 <div class="form-group row ">
		 Tipo:
		 <div class="col-lg-12">
		  <input type="text" class="form-control" id="tipo_grano1" name="tipo_grano1" readonly><br>
		 </div>
		</div>

         Unidad de medida:
         <select name="unidad1" id="unidad1" >
		      <option>seleccione</option>
          <option value="kilo">Kilo </option>
          <option value="lata">Lata</option>
         </select><br><br>

		 <div class="form-group row">
		 N° Estopas
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="numero_estopas1" name="numero_estopas1"><br>
		   </div>
		 </div>

		 Estado estopas:
         <select name="estado_estopas1" id="estado_estopas1">
		  <option>seleccione</option>
          <option value="buena">Buena </option>
          <option value="regular">Regular</option>
		  <option value="mala">Mala</option>
         </select><br><br>

		 <div class="form-group row">
		 N° Sacos
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="numero_sacos1" name="numero_sacos1"><br>
		   </div>
		 </div>

					 
		 Estado Sacos:
         <select name="estado_sacos1" id="estado_sacos1">
		      <option>seleccione</option>
          <option value="buena">Buena </option>
          <option value="regular">Regular</option>
		      <option value="mala">Mala</option>
         </select><br><br>

	   <div class="form-group row">
		 Kilos Brutos:
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="kilos_brutos1" name="kilos_brutos1"><br>
		   </div>
		 </div>

		 <div class="form-group row">
		 N° de Latas: 
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="latas_compra1" name="latas_compra1"><br>
		   </div>
		 </div>

		 <div class="form-group row">
		 Kilos netos / Latas:
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="kilos_netos1" name="kilos_netos1"><br>
		   </div>
		 </div>
		 
	  <p>Observaciones:</p>
	  <textarea name="observaciones1" id="observaciones1" rows="3" cols="30" placeholder="escriba aqui las observaciones"></textarea><br><br>
                          
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
        url: 'CONSULTA_COMPRA2.php',
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
    nombre = fila.find('td:eq(0)').text();
    cedula = parseInt(fila.find('td:eq(1)').text()); //capturo el ID		            
    marca = fila.find('td:eq(2)').text();
    municipio = fila.find('td:eq(3)').text();
    producto = fila.find('td:eq(4)').text();
    tipo= fila.find('td:eq(5)').text();
    unidad = fila.find('td:eq(6)').text();
    numero_estopas = fila.find('td:eq(7)').text();
    estado_estopas = fila.find('td:eq(8)').text();
    numero_sacos = fila.find('td:eq(9)').text();
    estado_sacos = fila.find('td:eq(10)').text();
    latas = fila.find('td:eq(11)').text();
    kilos_brutos = fila.find('td:eq(12)').text();
    kilos_netos = fila.find('td:eq(13)').text();
    fecha = fila.find('td:eq(14)').text();
    observaciones = fila.find('td:eq(15)').text();
    
    $("#nombre_compra1").val(nombre);
    $("#cedula_compra1").val(cedula);
    $("#marca1").val(marca);
    $("#municipio_compra1").val(municipio);
    $("#producto1").val(producto);
    $("#tipo_grano1").val(tipo);
    $("#unidad1").val(unidad);
    $("#numero_estopas1").val(numero_estopas);
    $("#estado_estopas1").val(estado_estopas);
    $("#numero_sacos1").val(numero_sacos);
    $("#estado_sacos1").val(estado_sacos);
    $("#latas_compra1").val(latas);
    $("#kilos_brutos1").val(kilos_brutos);
    $("#kilos_netos1").val(kilos_netos);
    $("#observaciones1").val(observaciones);
       
});
<!-- ----------------- CARGAR DATOS --------------------------------->
<!-- ----------------- MODIFICAR --------------------------------->
function modificar()
    { 
    
      var parametros = 
      {
        "nombre" : $("#nombre_compra1").val(),
        "cedula" : $("#cedula_compra1").val(),
        "marca" : $("#marca1").val(),
        "municipio" : $("#municipio_compra1").val(),
        "producto": $("#producto1").val(),
        "tipo" : $("#tipo_grano1").val(),
        "unidad" : $("#unidad1").val(),
        "numero_estopas" : $("#numero_estopas1").val(),
        "estado_estopas" : $("#estado_estopas1").val(),
        "numero_sacos" : $("#numero_sacos1").val(),
        "estado_sacos": $("#estado_sacos1").val(),
        "latas" : $("#latas_compra1").val(),
        "kilos_brutos" : $("#kilos_brutos1").val(),
        "kilos_netos": $("#kilos_netos1").val(),
        "observaciones" : $("#observaciones1").val(),
        "accion":"3"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_COMPRA2.php',
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
      url: 'CONSULTA_COMPRA2.php',
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
