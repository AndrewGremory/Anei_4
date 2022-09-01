<?php
session_start();

$dtz = new DateTimeZone("America/Bogota");
$dt = new DateTime("now", $dtz);
$fecha= $dt->format("Y-m-d");
$hora= $dt->format("h:i:s");
require('fpdf/fpdf.php');
define('EURO',chr(128)); // Constante con el símbolo Euro.
$pdf = new FPDF('P','mm',array(76,60)); // Tamaño tickt 80mm x 150 mm (largo aprox)
$pdf->AddPage();

$conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");
$resultado = mysqli_query($conexion," SELECT  *FROM asociados where cedula_usuario= '$_POST[cedula_turno]'");
if($consulta = mysqli_fetch_array($resultado))
{ 
// CABECERA
$pdf->SetFont('Helvetica','',20);
$pdf->Cell(40,-6,'ANEI',0,1,'C');
$pdf->Ln(7);
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(40,4,'NOMBRE:'. $consulta['nombre_usuario'],0,1,'C');
$pdf->Cell(40,4,'CEDULA:'.$consulta['cedula_usuario'],0,1,'C');
$pdf->Cell(40,4,'MUNICIPIO:'.$_SESSION['municipio'],0,1,'C');

           $resultado = mysqli_query($conexion," SELECT  *FROM turno");
		   $a=1;
		   while($consulta = mysqli_fetch_array($resultado))
		   {  
			if ($consulta['fecha_turno']==$fecha and $consulta['municipio_turno']==$_SESSION['municipio'])
			{  $a=$a+1; }
		   }   
		  
		   
		   	mysqli_query($conexion,"insert into turno (cedula_turno, fecha_turno, hora_turno, municipio_turno,turno) values ($_POST[cedula_turno],'$fecha','$hora','$_SESSION[municipio]',$a)");   

// DATOS FACTURA        
$pdf->Ln(3);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(40,4,'TURNO',0,1,'C');
$pdf->Ln(8);
$pdf->SetFont('Helvetica', 'B', 45);
$pdf->Cell(40,4,$a,0,1,'C');
  
// PIE DE PAGINA
$pdf->Ln(10);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->Cell(40,0,'Fecha:'.' '.$fecha,0,1,'C');
$pdf->Ln(3);
$pdf->Cell(40,0,'Hora'.' '.$hora,0,1,'C');
 
$pdf->Output('ticket.pdf','i');
}
else {
    ?>
    <h1 style="margin-left:350px;">Usuario No Registrado</h1>
  <img src="no.jpg" style="margin-left:380px;">
<?php
}
?>

</body>
</html>

