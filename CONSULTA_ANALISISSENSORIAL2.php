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
                <th>CODIGO</th>
                <th>PUNTAJE SCAA</th>
                <th>ACIDEZ</th>
                <th>NOTAS</th>
                <th>FECHA</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>

        <tbody>
                 <?php
                 $resul = mysqli_query($conexion,"select *from analisissensorial join asociados on cedula_usuario=cedula_sensorial");
		         while($consul = mysqli_fetch_array($resul))
		         { 
                ?>
			 <tr>
                 <td><?php echo $consul['nombre_sensorial']?></td>
				 <td><?php echo $consul['codigo_sensorial']?></td>
				 <td><?php echo $consul['puntaje_scaa']?></td>
                 <td><?php echo $consul['acidez']?></td>
                 <td><?php echo $consul['notas']?></td>
                 <td><?php echo $consul['fecha_sensorial']?></td>
                 <td><input type="button" class="btn btn-primary" id="codigo_analisisfisico" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
			 </tr>
             <?php
             }
             ?>
		 </tbody>
		 
	 <tfoot>
         <tr>
         <th>NOMBRE</th>
         <th>CODIGO</th>
         <th>PUNTAJE SCAA</th>
         <th>ACIDEZ</th>
         <th>NOTAS</th>
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
   <?php }
if($accion == 4)
{
    mysqli_query($conexion,"delete FROM analisissensorial where numero=$_POST[eli]");
    ?>
    <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CODIGO</th>
                <th>PUNTAJE SCAA</th>
                <th>ACIDEZ</th>
                <th>NOTAS</th>
                <th>FECHA</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>

        <tbody>
                 <?php
                 $resul = mysqli_query($conexion,"select *from analisissensorial");
		         while($consul = mysqli_fetch_array($resul))
		         { 
                ?>
			 <tr>
                 <td><?php echo $consul['nombre_sensorial']?></td>
				 <td><?php echo $consul['codigo_sensorial']?></td>
				 <td><?php echo $consul['puntaje_scaa']?></td>
                 <td><?php echo $consul['acidez']?></td>
                 <td><?php echo $consul['notas']?></td>
                 <td><?php echo $consul['fecha_sensorial']?></td>
                 <td><input type="button" class="btn btn-primary" id="codigo_analisisfisico" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
			 </tr>
             <?php
             }
             ?>
		 </tbody>
		 
	 <tfoot>
         <tr>
         <th>NOMBRE</th>
         <th>CODIGO</th>
         <th>PUNTAJE SCAA</th>
         <th>ACIDEZ</th>
         <th>NOTAS</th>
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