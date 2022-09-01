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
                <th>TIPO USUARIO</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>N° LATAS</th>
                <th>HUMEDAD</th>
                <th>TIPO SECADO</th>
                <th>OBSERVACIONES</th>
                <th>FECHA</th>
           <!-- <th>MODIFICAR</th> -->	
                <th>ELIMINAR</th>
            </tr>
        </thead>
	
		 <tbody>
           <?php
           $resul = mysqli_query($conexion,"select *from secado join asociados on cedula_usuario=cedula_secado");
		   while($consul = mysqli_fetch_array($resul))
		   { 

            $datos=$consul[0]."||".
            $consul[1]."||".
            $consul[2]."||".
            $consul[3]."||".
            $consul[4]."||".
            $consul[5]."||".
            $consul[6]."||".
            $consul[7]."||".
            $consul[8]."||".
            $consul[9]."||".            
            $consul[10];
            ?>
			 <tr>
                 <td><?php echo $consul['nombre_usuario']?></td>
				 <td><?php echo $consul['cedula_secado']?></td>
				 <td><?php echo $consul['codigo_secado']?></td>
                 <td><?php echo $consul['tipo_usuario']?></td>
                 <td><?php echo $consul['municipio_secado']?></td>
				 <td><?php echo $consul['producto_secado']?></td>
				 <td><?php echo $consul['numero_latas']?></td>
				 <td><?php echo $consul['humedad_secado']?></td>
				 <td><?php echo $consul['tiposecado_resultado']?></td>
                 <td><?php echo $consul['observaciones_secado']?></td>
				 <td><?php echo $consul['fecha_secado']?></td>
            <!-- <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td> -->
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo$consul['numero']?>);"></td>
			 
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
                <th>TIPO USUARIO</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>N° LATAS</th>
                <th>HUMEDAD</th>
                <th>TIPO SECADO</th>
                <th>OBSERVACIONES</th>
                <th>FECHA</th>
           <!-- <th>MODIFICAR</th> -->	
                <th>ELIMINAR
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

if($accion == 3)
{
$resultados= mysqli_query($conexion,"update secado set producto_secado='$_POST[producto_secado]', numero_latas=$_POST[numero_latas], humedad_secado='$_POST[humedad_secado]', tiposecado_resultado='$_POST[tiposecado_resultado]', observaciones_secado='$_POST[observaciones_secado]' where codigo_secado='$_POST[codigo_secado]'");
}

if($accion == 4)
{
  mysqli_query($conexion,"delete FROM secado where numero= $_POST[eli]");
?>
 <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CEDULA</th>
                <th>CODIGO</th>
                <th>TIPO USUARIO</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>N° LATAS</th>
                <th>HUMEDAD</th>
                <th>TIPO SECADO</th>
                <th>OBSERVACIONES</th>
                <th>FECHA</th>
           <!-- <th>MODIFICAR</th> -->	
                <th>ELIMINARh>
            </tr>
        </thead>
	
		 <tbody>
           <?php
           $resul = mysqli_query($conexion,"select *from secado");
		   while($consul = mysqli_fetch_array($resul))
		   { 

            $datos=$consul[0]."||".
            $consul[1]."||".
            $consul[2]."||".
            $consul[3]."||".
            $consul[4]."||".
            $consul[5]."||".
            $consul[6]."||".
            $consul[7]."||".
            $consul[8]."||".
            $consul[9]."||".            
            $consul[10];
            ?>
			 <tr>
                 <td><?php echo $consul['nombre_usuario']?></td>
				 <td><?php echo $consul['cedula_secado']?></td>
				 <td><?php echo $consul['codigo_secado']?></td>
                 <td><?php echo $consul['tipo_usuario']?></td>
                 <td><?php echo $consul['municipio_secado']?></td>
				 <td><?php echo $consul['producto_secado']?></td>
				 <td><?php echo $consul['numero_latas']?></td>
				 <td><?php echo $consul['humedad_secado']?></td>
				 <td><?php echo $consul['tiposecado_resultado']?></td>
                 <td><?php echo $consul['observaciones_secado']?></td>
				 <td><?php echo $consul['fecha_secado']?></td>
           <!--  <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td> -->
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo$consul['numero']?>);"></td>
			 
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
                <th>TIPO USUARIO</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>N° LATAS</th>
                <th>HUMEDAD</th>
                <th>TIPO SECADO</th>
                <th>OBSERVACIONES</th>
                <th>FECHA</th>
           <!-- <th>MODIFICAR</th> -->	
                <th>ELIMINAR
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