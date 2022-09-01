<?php session_start(); ?>
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
                <th>CODIGO</th>
                <th>POLITICA</th>
                <th>PRECIO DEL DIA</th>
                <th>F. RENDIMIENTO</th>
                <th>BONIFICACION</th>
                <th>PRIMA</th>
                <th>V. KILO</th>
                <th>KILOS/LATAS</th>
                <th>SUBTOTAL</th>
                <th>DIAN</th>
                <th>ASOCIADOS</th>
                <th>AHORRO * KILO</th>
                <th>TOTAL AHORRADO</th>
                <th>APORTE</th>
                <th>TOTAL</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>OBSERVACIONES</th>
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
            </tr>
        </thead>

       	
		 <tbody>
         <?php
         $resul = mysqli_query($conexion,"select *from liquidacion");
         while($consul = mysqli_fetch_array($resul))
         {  
          ?>
			 <tr>
                 <td><?php echo $consul['nombre_liquidacion']?></td>
				 <td><?php echo $consul['cedula_liquidacion']?></td>
				 <td><?php echo $consul['codigo_liquidacion']?></td>
				 <td><?php echo $consul['politica']?></td>
                 <td><?php echo $consul['precio_dia']?></td>
                 <td><?php echo $consul['rendimiento']?></td>
                 <td><?php echo $consul['bonificacion']?></td>
                 <td><?php echo $consul['prima']?></td>
                 <td><?php echo $consul['precio_final']?></td>
                 <td><?php echo $consul['kilos_liquidacion']?></td>
                 <td><?php echo $consul['subtotal']?></td>
                 <td><?php echo $consul['dian']?></td>
                 <td><?php echo$consul['asociados']?></td>
                 <td><?php echo $consul['ahorro']?></td>
                 <td><?php echo $consul['total_ahorro']?></td>
                 <td><?php echo $consul['aporte']?></td>
				 <td><?php echo $consul['neto_pagar']?></td>
                 <td><?php echo $consul['fecha_liquidacion']?></td>
                 <td><?php echo $consul['hora_liquidacion']?></td>
                 <td><?php echo $consul['observaciones_liquidacion']?></td>
                 <?php
                 if ($_SESSION['rol'] == "administrador") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
                 <?php } ?>
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
         <th>POLITICA</th>
         <th>PRECIO DEL DIA</th>
         <th>F. RENDIMIENTO</th>
         <th>BONIFICACION</th>
         <th>PRIMA</th>
         <th>V. KILO</th>
         <th>KILOS/LATAS</th>
         <th>SUBTOTAL</th>
         <th>DIAN</th>
         <th>ASOCIADOS</th>
         <th>AHORRO * KILO</th>
         <th>TOTAL AHORRADO</th>
         <th>APORTE</th>
         <th>TOTAL</th>
         <th>FECHA</th>
         <th>HORA</th>
         <th>OBSERVACIONES</th>
         <?php
         if ($_SESSION['rol'] == "administrador") 
         {?>
         <th>ELIMINAR</th>
         <?php } ?>
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
   $resul= mysqli_query($conexion,"select *FROM liquidacion where numero=$_POST[eli]");  
    if($consul = mysqli_fetch_array($resul))
    {mysqli_query($conexion,"delete FROM ahorro where codigo_ahorro='$consul[codigo_liquidacion]'");  
     mysqli_query($conexion,"delete FROM liquidacion where numero=$_POST[eli]");   
    }
    ?>
    <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CEDULA</th>
                <th>CODIGO</th>
                <th>POLITICA</th>
                <th>PRECIO DEL DIA</th>
                <th>F. RENDIMIENTO</th>
                <th>BONIFICACION</th>
                <th>PRIMA</th>
                <th>V. KILO</th>
                <th>KILOS/LATAS</th>
                <th>SUBTOTAL</th>
                <th>DIAN</th>
                <th>ASOCIADOS</th>
                <th>AHORRO * KILO</th>
                <th>TOTAL AHORRADO</th>
                <th>APORTE</th>
                <th>TOTAL</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>OBSERVACIONES</th>
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>

            </tr>
        </thead>

       	
		 <tbody>
         <?php
         $resul = mysqli_query($conexion,"select *from liquidacion");
         while($consul = mysqli_fetch_array($resul))
         {  
          ?>
			 <tr>
                 <td><?php echo $consul['nombre_liquidacion']?></td>
				 <td><?php echo $consul['cedula_liquidacion']?></td>
				 <td><?php echo $consul['codigo_liquidacion']?></td>
				 <td><?php echo $consul['politica']?></td>
                 <td><?php echo $consul['precio_dia']?></td>
                 <td><?php echo $consul['rendimiento']?></td>
                 <td><?php echo $consul['bonificacion']?></td>
                 <td><?php echo $consul['prima']?></td>
                 <td><?php echo $consul['precio_final']?></td>
                 <td><?php echo $consul['kilos_liquidacion']?></td>
                 <td><?php echo $consul['subtotal']?></td>
                 <td><?php echo $consul['dian']?></td>
                 <td><?php echo$consul['asociados']?></td>
                 <td><?php echo $consul['ahorro']?></td>
                 <td><?php echo $consul['total_ahorro']?></td>
                 <td><?php echo $consul['aporte']?></td>
				 <td><?php echo $consul['neto_pagar']?></td>
                 <td><?php echo $consul['fecha_liquidacion']?></td>
                 <td><?php echo $consul['hora_liquidacion']?></td>
                 <td><?php echo $consul['observaciones_liquidacion']?></td> <?php
                 if ($_SESSION['rol'] == "administrador") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
                 <?php } ?> </tr>
			
            <?php
            }
            ?>
		 </tbody>
		     
     <tfoot>
         <tr>
         <th>NOMBRE</th>
         <th>CEDULA</th>
         <th>CODIGO</th>
         <th>POLITICA</th>
         <th>PRECIO DEL DIA</th>
         <th>F. RENDIMIENTO</th>
         <th>BONIFICACION</th>
         <th>PRIMA</th>
         <th>V. KILO</th>
         <th>KILOS/LATAS</th>
         <th>SUBTOTAL</th>
         <th>DIAN</th>
         <th>ASOCIADOS</th>
         <th>AHORRO * KILO</th>
         <th>TOTAL AHORRADO</th>
         <th>APORTE</th>
         <th>TOTAL</th>
         <th>FECHA</th>
         <th>HORA</th>
         <th>OBSERVACIONES</th>
         <?php
         if ($_SESSION['rol'] == "administrador") 
         {?>
         <th>ELIMINAR</th>
         <?php } ?>
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