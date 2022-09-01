<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
<head>
	<meta charset="utf-8">
	
<body>
<?php
 $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

 $accion = $_POST['accion'];
 
if($accion == 1)
{  ?>
        
        <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRES</th>
                <th>CODIGO</th>
                <th>ALMENDRA TOTAL (gr)</th>
                <th>ALMENDRA TOTAL (%)</th>
                <th>ALMENDRA SANA (gr)</th>
                <th>ALMENDRA SANA(%)</th>
                <th>BROCA (gr)</th>
                <th>BROCA (%)</th>
                <th>BROCA PUNTO (gr)</th>
                <th>BROCA PUNTO (%)</th>
                <th>NEGRO (gr)</th>
                <th>NEGRO (%)</th>
                <th>VINAGRE (gr)</th>
                <th>VINAGRE (%)</th>
                <th>HUMEDAD</th>
                <th>FACTOR</th>
                <th>OBSERVACIONES</th>
                <th>FECHA</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>

        <tbody>
               <?php
                    $resul = mysqli_query($conexion,"select *from analisisfisico");
                    while($consul = mysqli_fetch_array($resul))
                    { 
                        $codigo=$consul['codigo_analisisfisico'];
                ?>        
			 <tr>
                 <td><?php echo $consul['nombre_analisisfisico']?></td>
				 <td><?php echo $consul['codigo_analisisfisico']?></td>
				 <td><?php echo $consul['almendra_total']?></td>
                 <td><?php echo $consul['almendra_total1']?></td>
                 <td><?php echo $consul['almendra_sana']?></td>
                 <td><?php echo$consul['almendra_sana1']?></td>
				 <td><?php echo$consul['broca']?></td>
                 <td><?php echo$consul['broca1']?></td>
                 <td><?php echo$consul['broca_punto']?></td>
                 <td><?php echo$consul['broca_punto1']?></td>
				 <td><?php echo$consul['negro']?></td>
                 <td><?php echo$consul['negro1']?></td>
				 <td><?php echo$consul['vinagre']?></td>
                 <td><?php echo$consul['vinagre1']?></td>
				 <td><?php echo$consul['humedad']?></td>
              	 <td><?php echo$consul['factor']?></td>
                 <td><?php echo$consul['observaciones_analisisfisico']?></td>
                 <td><?php echo$consul['fecha_analisisfisico']?></td>
                 <td><input type="button" class="btn btn-primary" id="codigo_analisisfisico" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
			 </tr>
			 <?php
             }
            ?> 
			</tbody>
		 
		
     <tfoot>
         <tr>
         <th>NOMBRES</th>
         <th>CODIGO</th>
         <th>ALMENDRA TOTAL (gr)</th>
         <th>ALMENDRA TOTAL (%)</th>
         <th>ALMENDRA SANA (gr)</th>
         <th>ALMENDRA SANA(%)</th>
         <th>BROCA (gr)</th>
         <th>BROCA (%)</th>
         <th>BROCA PUNTO (gr)</th>
         <th>BROCA PUNTO (%)</th>
         <th>NEGRO (gr)</th>
         <th>NEGRO (%)</th>
         <th>VINAGRE (gr)</th>
         <th>VINAGRE (%)</th>
         <th>HUMEDAD</th>
         <th>FACTOR</th>
         <th>OBSERVACIONES</th>
         <th>FECHA</th>
         <th>ELIMINAR</th>
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


 if($accion == 4)
 { 

    mysqli_query($conexion,"delete FROM analisisfisico where numero=$_POST[eli]");
    ?> 
   
   <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRES</th>
                <th>CODIGO</th>
                <th>ALMENDRA TOTAL (gr)</th>
                <th>ALMENDRA TOTAL (%)</th>
                <th>ALMENDRA SANA (gr)</th>
                <th>ALMENDRA SANA(%)</th>
                <th>BROCA (gr)</th>
                <th>BROCA (%)</th>
                <th>BROCA PUNTO (gr)</th>
                <th>BROCA PUNTO (%)</th>
                <th>NEGRO (gr)</th>
                <th>NEGRO (%)</th>
                <th>VINAGRE (gr)</th>
                <th>VINAGRE (%)</th>
                <th>HUMEDAD</th>
                <th>FACTOR</th>
                <th>OBSERVACIONES</th>
                <th>FECHA</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>

        <tbody>
               <?php
                    $resul = mysqli_query($conexion,"select *from analisisfisico");
                    while($consul = mysqli_fetch_array($resul))
                    { 
                        $codigo=$consul['codigo_analisisfisico'];
                ?>        
			 <tr>
                 <td><?php echo $consul['nombre_analisisfisico']?></td>
				 <td><?php echo $consul['codigo_analisisfisico']?></td>
				 <td><?php echo $consul['almendra_total']?></td>
                 <td><?php echo $consul['almendra_total1']?></td>
                 <td><?php echo $consul['almendra_sana']?></td>
                 <td><?php echo$consul['almendra_sana1']?></td>
				 <td><?php echo$consul['broca']?></td>
                 <td><?php echo$consul['broca1']?></td>
                 <td><?php echo$consul['broca_punto']?></td>
                 <td><?php echo$consul['broca_punto1']?></td>
				 <td><?php echo$consul['negro']?></td>
                 <td><?php echo$consul['negro1']?></td>
				 <td><?php echo$consul['vinagre']?></td>
                 <td><?php echo$consul['vinagre1']?></td>
				 <td><?php echo$consul['humedad']?></td>
              	 <td><?php echo$consul['factor']?></td>
                 <td><?php echo$consul['observaciones_analisisfisico']?></td>
                 <td><?php echo$consul['fecha_analisisfisico']?></td>
                 <td><input type="button" class="btn btn-primary" id="codigo_analisisfisico" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
			 </tr>
			 <?php
             }
            ?> 
			</tbody>
		 
		
     <tfoot>
         <tr>
         <th>NOMBRES</th>
         <th>CODIGO</th>
         <th>ALMENDRA TOTAL (gr)</th>
         <th>ALMENDRA TOTAL (%)</th>
         <th>ALMENDRA SANA (gr)</th>
         <th>ALMENDRA SANA(%)</th>
         <th>BROCA (gr)</th>
         <th>BROCA (%)</th>
         <th>BROCA PUNTO (gr)</th>
         <th>BROCA PUNTO (%)</th>
         <th>NEGRO (gr)</th>
         <th>NEGRO (%)</th>
         <th>VINAGRE (gr)</th>
         <th>VINAGRE (%)</th>
         <th>HUMEDAD</th>
         <th>FACTOR</th>
         <th>OBSERVACIONES</th>
         <th>FECHA</th>
         <th>ELIMINAR</th>
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