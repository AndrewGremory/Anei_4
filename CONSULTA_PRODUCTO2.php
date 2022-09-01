<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
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
                <th>CODIGO</th>
                <th>NOMBRE</th>
                <th>TIPO</th>
                <th>PRECIO</th>
                <th>PRIMA</th>
                <th>POLITICA</th>
                <th>DESCRIPCION</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            
            </tr>
        </thead>
     
		<tbody>
            <?php
            $resul = mysqli_query($conexion,"select *from producto");
		    while($consul = mysqli_fetch_array($resul))
		    { 
            $datos=$consul[0]."||".
            $consul[1]."||".
            $consul[2]."||".
            $consul[3]."||".
            $consul[4]."||".
            $consul[5]."||".
            $consul[6];
            ?>
			 <tr>
				 <td><?php echo $consul['numero']?></td>
				 <td><?php echo $consul['nombre']?></td>
                 <td><?php echo $consul['tipo']?></td>
                 <td><?php echo $consul['precio']?></td>
                 <td><?php echo$consul['prima_producto']?></td>
                 <td><?php echo $consul['politica']?></td>
                 <td><?php echo $consul['descripcion']?></td>
                 <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
			 </tr>
		 <?php 
		 }
         ?>
		 </tbody>
		 
		
       
     <tfoot>
         <tr>
         <th>CODIGO</th>
         <th>NOMBRE</th>
         <th>TIPO</th>
         <th>PRECIO</th>
         <th>PRIMA</th>
         <th>POLITICA</th>
         <th>DESCRIPCION</th>
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
$resultados= mysqli_query($conexion,"update producto set tipo='$_POST[tipo]', precio=$_POST[precio], descripcion='$_POST[descripcion]', prima_producto=$_POST[prima_producto], politica='$_POST[politica]', nombre='$_POST[nombre]' where numero = $_POST[numero]");
}

if($accion == 4)
{
    mysqli_query($conexion,"delete FROM producto where numero=$_POST[eli]");
?>
<table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRE</th>
                <th>TIPO</th>
                <th>PRECIO</th>
                <th>PRIMA</th>
                <th>POLITICA</th>
                <th>DESCRIPCION</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            
            </tr>
        </thead>
     
		<tbody>
            <?php
            $resul = mysqli_query($conexion,"select *from producto");
		    while($consul = mysqli_fetch_array($resul))
		    { 
            $datos=$consul[0]."||".
            $consul[1]."||".
            $consul[2]."||".
            $consul[3]."||".
            $consul[4]."||".
            $consul[5]."||".
            $consul[6];
            ?>
			 <tr>
				 <td><?php echo $consul['numero']?></td>
				 <td><?php echo $consul['nombre']?></td>
                 <td><?php echo $consul['tipo']?></td>
                 <td><?php echo $consul['precio']?></td>
                 <td><?php echo$consul['prima_producto']?></td>
                 <td><?php echo $consul['politica']?></td>
                 <td><?php echo $consul['descripcion']?></td>
                 <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
			 </tr>
		 <?php 
		 }
         ?>
		 </tbody>
		 
		
       
     <tfoot>
         <tr>
         <th>CODIGO</th>
         <th>NOMBRE</th>
         <th>TIPO</th>
         <th>PRECIO</th>
         <th>PRIMA</th>
         <th>POLITICA</th>
         <th>DESCRIPCION</th>
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