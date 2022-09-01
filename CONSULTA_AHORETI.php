<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    

</head>

<body>

        <h1 style="margin-left:400px">CENTRO DE ACOPIO ANEI</h1>
		<hr>
        <h1 style="margin-left:500px">TRANSACIONES</h1>
		
        <table id="taahorro" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CEDULA</th>
                <th>AHORRO</th>
                <th>RETIRO</th>
                <th>DISPONIBLE</th>
            </tr>
        </thead>

        <tbody>
         <?php
           $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");
		    $resul = mysqli_query($conexion,"select nombre_ahorro, cedula_ahorro, sum(valor_ahorro) as total from ahorro group by (cedula_ahorro)");
		    while($consul = mysqli_fetch_array($resul))
		    { $resultado = mysqli_query($conexion,"select sum(valor_retiro) as total2 from retiro where cedula_retiro=$consul[cedula_ahorro] ");
            $retiro=0;
            while($consulta = mysqli_fetch_array($resultado))
            {$retiro=  $consulta['total2'];} 
         ?>
			 <tr>
				 <td><?php echo $consul['nombre_ahorro']?></td>
				 <td><?php echo $consul['cedula_ahorro']?></td>
				 <td><?php echo $consul['total']?></td>
				 <td><?php echo $retiro?></td>
                 <td><?php echo $consul['total']-$retiro?></td>
			 </tr>
             <?php }  ?>
		 </tbody>
		 
		
        
       
     <tfoot>
         <tr>
         
                <th>NOMBRE</th>
                <th>CEDULA</th>
                <th>AHORRO</th>
                <th>RETIRO</th>
                <th>DISPONIBLE</th>
               
         </tr>
     </tfoot>
 </table>


<script> 
    $(document).ready(function () {
    $('#taahorro').DataTable();
   });
</script>
</body>
</html>

