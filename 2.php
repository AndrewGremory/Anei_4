<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>DataTables example</title>
</head>
<body>
<h1>Behold... the power of DataTables!</h1>
<table id="cesar" class="display" style="width: 100%">
    <thead>
        <tr>
            <th>CEDULA</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>VALOR</th>
            <th>NOMBRE</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");
        $resultado = mysqli_query($conexion,"select *from retiro");
        
        while($consulta= mysqli_fetch_array($resultado))
		{
        ?>
        <tr>
            <td><?php echo $consulta['cedula_retiro']?></td>
            <td><?php echo $consulta['fecha_retiro']?></td>
            <td><?php echo $consulta['hora_retiro']?></td>
            <td><?php echo $consulta['valor_retiro']?></td>
            <td><?php echo $consulta['nombre_retiro']?></td>
            
        </tr>
        <?php
          }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>CEDULA</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>VALOR</th>
            <th>NOMBRE</th>
        </tr>
    </tfoot>
</table>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script type="application/javascript">
    $(document).ready( function () {
    $('#cesar').DataTable();
    } );
</script>