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
                <th>CEDULA</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>MUNICIPIO</th>
                <th>USUARIO</th>
                <th>CONTRASEÑA</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>

        <tbody>
               <?php
                    $resul = mysqli_query($conexion,"select *from usuario");
                    while($consul = mysqli_fetch_array($resul))
                    { 
                        $datos=$consul[0]."||".
                        $consul[1]."||".
                        $consul[2]."||".
                        $consul[3]."||".
                        $consul[4];
                ?>        
			 <tr>
                 <td><?php echo $consul['nombres']?></td>
				 <td><?php echo $consul['cedula']?></td>
				 <td><?php echo $consul['telefono']?></td>
                 <td><?php echo $consul['correo']?></td>
                 <td><?php echo $consul['municipio']?></td>
                 <td><?php echo $consul['usuario']?></td>
                 <td><?php echo $consul['clave']?></td>
                 <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td>
                 <td><input type="button" class="btn btn-primary" id="cedula" value="Eliminar" onclick="eliminar(<?php echo $consul['cedula']?>);"></td>
			 </tr>
			 <?php
             }
            ?> 
			</tbody>
		 
		
     <tfoot>
         <tr>
                <th>NOMBRES</th>
                <th>CEDULA</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>MUNICIPIO</th>
                <th>USUARIO</th>
                <th>CONTRASEÑA</th>
                <th>MODIFICAR</th>
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

 if($accion == 3)
 {
   $resultados= mysqli_query($conexion,"update usuario set nombres='$_POST[nombres]', municipio='$_POST[municipio]', correo='$_POST[correo]', telefono=$_POST[telefono] where cedula= $_POST[cedula]");
 }
 

 if($accion == 4)
 { 

    mysqli_query($conexion,"delete FROM usuario where cedula=$_POST[eli]");
    ?> 
   
   <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRES</th>
                <th>CEDULA</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>MUNICIPIO</th>
                <th>USUARIO</th>
                <th>CONTRASEÑA</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>

        <tbody>
               <?php
                    $resul = mysqli_query($conexion,"select *from usuario");
                    while($consul = mysqli_fetch_array($resul))
                    {  
                        $datos=$consul[0]."||".
                        $consul[1]."||".
                        $consul[2]."||".
                        $consul[3]."||".
                        $consul[4];
                        
                ?>        
			 <tr>
                 <td><?php echo $consul['nombres']?></td>
				 <td><?php echo $consul['cedula']?></td>
				 <td><?php echo $consul['telefono']?></td>
                 <td><?php echo $consul['correo']?></td>
                 <td><?php echo $consul['municipio']?></td>
                 <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td>
                 <td><input type="button" class="btn btn-primary" id="cedula" value="Eliminar" onclick="eliminar(<?php echo $consul['cedula']?>);"></td>
			</tr>
			 <?php
             }
            ?> 
			</tbody>
		 
		
     <tfoot>
         <tr>
                <th>NOMBRES</th>
                <th>CEDULA</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>MUNICIPIO</th>
                <th>USUARIO</th>
                <th>CONTRASEÑA</th>
                <th>MODIFICAR</th>
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