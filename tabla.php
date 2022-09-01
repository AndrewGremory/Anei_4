<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    
    <title>Document</title>
</head>
<table id="table_id" class="display">
    <thead>
        <tr>
        <th>Column 1</th>
            <th>Column 2</th><th>Column 1</th>
            <th>Column 2</th><th>Column 1</th>
            <th>Column 1</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>CHAO</td>
        </tr>
        <tr>
        <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>HOLA</td>
        </tr>
    </tbody>
</table>

<body>

    <script>
        $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>
</body>
</html>