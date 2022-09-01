
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

        
        <table  id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRES</th>
                <th>CEDULA</th>
                <th>CELULAR</th>
                <th>TIPO VINCULACIÓN</th>
                <th>NOMBRE FINCA</th>
                <th>CODIGO UP</th>
                <th>MUNICIPIO</th>
                <th>VEREDA</th>
                <th>STATUS</th>
                <th>CUPO CAFE</th>
                <th>CUPO CACAO</th>
                <?php
                 if ($_SESSION['rol'] == "administrador") 
                 {?>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
                <?php } ?>
            </tr>
        </thead>

       
		 <tbody>
                <?php
                $resul = mysqli_query($conexion,"select *from asociados");
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
				 <td><?php echo $consul['cedula_usuario']?></td>
				 <td><?php echo $consul['contacto']?></td>
				 <td><?php echo $consul['tipo_vinculacion']?></td>
				 <td><?php echo $consul['finca']?></td>
				 <td><?php echo $consul['codigo_up']?></td>
                 <td><?php echo $consul['municipio']?></td>
				 <td><?php echo $consul['vereda']?></td>
				 <td><?php echo $consul['estatus']?></td>
				 <td><?php echo $consul['cupo_cafe']?></td>
				 <td><?php echo $consul['cupo_cacao']?></td>
                 <?php
                 if ($_SESSION['rol'] == "administrador") 
                 {?>
                 <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
                 <?php } ?>
			 </tr>
			
             <?php
            }
            ?>
		 </tbody>
		 
		     
     <tfoot>
         <tr>
         <th>NOMBRES</th>
         <th>CEDULA</th>
         <th>CELULAR</th>
         <th>TIPO VINCULACIÓN</th>
         <th>NOMBRE FINCA</th>
         <th>CODIGO UP</th>
         <th>MUNICIPIO</th>
         <th>VEREDA</th>
         <th>STATUS</th>
         <th>CUPO CAFE</th>
         <th>CUPO CACAO</th>
         <?php
         if ($_SESSION['rol'] == "administrador") 
         {?>
         <th>MODIFICAR</th>
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
 <?php	}
if($accion == 3)
{
  $resultados= mysqli_query($conexion,"update asociados set nombre_usuario='$_POST[nombre]', municipio='$_POST[municipio]', vereda='$_POST[vereda]', finca='$_POST[finca]', cedula_usuario=$_POST[cedula], estatus='$_POST[estatus]', contacto=$_POST[contacto], cupo_cafe=$_POST[cupo_cafe], tipo_vinculacion='$_POST[tipo]', cupo_cacao=$_POST[cupo_cacao] where codigo_up='$_POST[codigo_up]'");
}

if($accion == 4)
{
    mysqli_query($conexion,"delete FROM asociados where numero=$_POST[eli]");
 ?>
    <table id="cesar" class="display" style="width:100%">
    <thead>
        <tr>
            <th>NOMBRES</th>
            <th>CEDULA</th>
            <th>CELULAR</th>
            <th>TIPO VINCULACIÓN</th>
            <th>NOMBRE FINCA</th>
            <th>CODIGO UP</th>
            <th>MUNICIPIO</th>
            <th>VEREDA</th>
            <th>STATUS</th>
            <th>CUPO CAFE</th>
            <th>CUPO CACAO</th>
            <?php
            if ($_SESSION['rol'] == "administrador") 
            {?>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
            <?php } ?>           

        </tr>
    </thead>

   
     <tbody>
            <?php
            $resul = mysqli_query($conexion,"select *from asociados");
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
             <td><?php echo $consul['cedula_usuario']?></td>
             <td><?php echo $consul['contacto']?></td>
             <td><?php echo $consul['tipo_vinculacion']?></td>
             <td><?php echo $consul['finca']?></td>
             <td><?php echo $consul['codigo_up']?></td>
             <td><?php echo $consul['municipio']?></td>
             <td><?php echo $consul['vereda']?></td>
             <td><?php echo $consul['estatus']?></td>
             <td><?php echo $consul['cupo_cafe']?></td>
             <td><?php echo $consul['cupo_cacao']?></td>
             <?php
             if ($_SESSION['rol'] == "administrador") 
             {?>
             <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td>
             <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
             <?php } ?> 
         </tr>
        
         <?php
        }
        ?>
     </tbody>
     
         
 <tfoot>
     <tr>
     <th>NOMBRES</th>
     <th>CEDULA</th>
     <th>CELULAR</th>
     <th>TIPO VINCULACIÓN</th>
     <th>NOMBRE FINCA</th>
     <th>CODIGO UP</th>
     <th>MUNICIPIO</th>
     <th>VEREDA</th>
     <th>STATUS</th>
     <th>CUPO CAFE</th>
     <th>CUPO CACAO</th>
     <?php
     if ($_SESSION['rol'] == "administrador") 
     {?>
     <th>MODIFICAR</th>
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