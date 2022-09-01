<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
 $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

 $accion = $_POST['accion'];
 
 if($accion == 1)
{  
 ?>
       
        <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
            <th>NOMBRE</th>
            <th>CEDULA</th>
            <th>VALOR</th>
            <th>FECHA</th> 
            <th>HORA</th> 
            </tr>
        </thead>

        
		

		
		 <tbody>
           <?php 
           $resul = mysqli_query($conexion,"select *from retiro");
           while($consul = mysqli_fetch_array($resul))
           { 
            ?>        

			<tr>
            <td><?php echo $consul['nombre_retiro']?></td>
             <td><?php echo $consul['cedula_retiro']?></td>             
             <td><?php echo $consul['valor_retiro']?></td>
             <td><?php echo $consul['fecha_retiro']?></td>
             <td><?php echo $consul['hora_retiro']?></td>
			</tr>
         <?php
            }
         ?> 
	   </tbody>
		
       
     <tfoot>
         <tr>
         <th>NOMBRE</th>
         <th>CEDULA</th>
         <th>VALOR</th>
         <th>FECHA</th> 
         <th>HORA</th> 
         </tr>
     </tfoot>
 </table>
 <script type="application/javascript">
    $(document).ready( function () {
    $('#cesar').DataTable();
    } );
</script>
<?php
}
?>
</body>
</html>