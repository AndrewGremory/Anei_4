<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
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
                <th>CODIGO</th>
                <th>KILOS AHORRADOS</th>
                <th>VALOR * KILO</th>
                <th>VALOR AHORRADO</th>
                <th>FECHA</th>
                <th>HORA</th>
            </tr>
        </thead>

       	 <tbody>
            <?php
                
                $resul = mysqli_query($conexion,"select *from ahorro");
		        while($consul = mysqli_fetch_array($resul))
		        {  
            ?>         
			     <tr>
				  <td><?php echo $consul['nombre_ahorro']?></td>
				  <td><?php echo $consul['cedula_ahorro']?></td>
				  <td><?php echo $consul['codigo_ahorro']?></td>
				  <td><?php echo $consul['kilos_ahorro']?></td>
				  <td><?php echo $consul['cantidad_ahorro']?></td>
				  <td><?php echo $consul['valor_ahorro']?></td>
                  <td><?php echo $consul['fecha_ahorro']?></td>
				  <td><?php echo $consul['hora_ahorro']?></td>
			     </tr>
                <?php 
                }
                ?>
            
		 </tbody>
		 
		 <tfoot>
               <tr>
                <th>NOMBRE</th>
                <th>CEDULA</th>
                <th>CODIGO</th>
                <th>KILOS AHORRADOS</th>
                <th>VALOR * KILO</th>
                <th>VALOR AHORRADO</th>
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