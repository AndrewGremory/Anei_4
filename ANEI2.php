<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
<head>
	<meta charset="utf-8">

	<script type="text/javascript">

   
		
		function boni()
		{ 
			var b = document.getElementById('precio_dia').value;
			var o = document.getElementById('rendimiento').value;
			var a = document.getElementById('bonificacion').value;
			var c = document.getElementById('prima_producto').value;

			
			if (document.getElementById('producto_liquidacion').value ==="cafe mojado"  &&  document.getElementById('politica').value==="politica1") 
			{ 
              o=0; 
			  
			  var moja = parseInt(b) + parseInt(a) + parseInt(c);
			  document.getElementById('precio_final').value=moja;
			}

			if (document.getElementById('producto_liquidacion').value =="cafe mojado"  &&  document.getElementById('politica').value=="politica2") 
			{ 
              o=0; 
			  var moja = parseInt(b) + parseInt(a);
			  document.getElementById('precio_final').value=moja;
			}

			if (document.getElementById('producto_liquidacion').value =="cacao en baba"  &&  document.getElementById('politica').value=="politica1") 
			{ 
              o=0; 
			  
			  var moja = parseInt(b) + parseInt(a) + parseInt(c);
			  document.getElementById('precio_final').value=moja ;
			}

			if (document.getElementById('producto_liquidacion').value =="cacao en baba"  &&  document.getElementById('politica').value=="politica2") 
			{ 
              o=0; 
			  var moja = parseInt(b) + parseInt(a);
			  document.getElementById('precio_final').value=moja;
			}

			if (document.getElementById('politica').value=="politica1" && document.getElementById('producto_liquidacion').value =="cafe pergamino seco")
			 {			   
			   var moja = parseInt(a) + parseInt(c)+ parseInt(o);
			   var moja1= new Intl.NumberFormat('de-DE').format(moja);
			   document.getElementById('precio_final').value=moja;
		     }

			if (document.getElementById('politica').value =="politica2" && document.getElementById('producto_liquidacion').value =="cafe pergamino seco") 
			{			
			 var moja = parseInt(a) + parseInt(b);
			 document.getElementById('precio_final').value=moja;
		    } 
		   
			if (document.getElementById('politica').value=="politica1" && document.getElementById('producto_liquidacion').value =="cacao seco")
			 {
				var moja = parseInt(b) + parseInt(a) + parseInt(c);
			    document.getElementById('precio_final').value=moja;
		     }

			 if (document.getElementById('politica').value =="politica2" && document.getElementById('producto_liquidacion').value =="cacao seco") 
			{
			  var moja = parseInt(a) + parseInt(b);
			  document.getElementById('precio_final').value=moja;
		    } 	   

			var f = document.getElementById('precio_final').value;
			var g= document.getElementById('kilos_liquidacion').value;
			var h = (parseFloat(f)) * parseFloat(g);
			var cesar= new Intl.NumberFormat('de-DE').format(h);
			document.getElementById('subtotal').value= h;
			
			if (document.getElementById('producto_liquidacion').value =="cacao seco" || document.getElementById('producto_liquidacion').value =="cacao en baba" ) 
			{ 
				var i = document.getElementById('subtotal').value;
			    var j = parseFloat(h)*0.005;
				var j1= new Intl.NumberFormat('de-DE').format(j);
				document.getElementById('dian').value= j;
				document.getElementById('aporte').value= j;
			}

			if (document.getElementById('producto_liquidacion').value =="cafe pergamino seco" || document.getElementById('producto_liquidacion').value =="cafe mojado" ) 
			{ 
				var i = document.getElementById('subtotal').value;
			    var j = (parseFloat(h))*0.005;
				var j1= new Intl.NumberFormat('de-DE').format(j);
				document.getElementById('dian').value= j;
				document.getElementById('aporte').value= j;
			}

			var k = parseFloat(h)*0.01;
			var k1= new Intl.NumberFormat('de-DE').format(k);
			document.getElementById('asociados').value= k;

			var dsecado = document.getElementById('descuento_secado').value;
			
			var l = parseFloat(h)-parseFloat(j)-parseFloat(k)- parseFloat(dsecado);
			var l1= new Intl.NumberFormat('de-DE').format(l);
			document.getElementById('neto_pagar').value= l;
		}

		
		function facr() 
		{   var p = document.getElementById('almendra_sana').value;
			var r = document.getElementById('almendra_total').value;

			var ss = ((parseInt(p))/250)*100;
			var q = (250*70)/parseInt(p);

			var s = (parseInt(r) - parseInt(p)) / parseInt(r);

			document.getElementById('almendra_sana1').value = ss;
			document.getElementById('factor').value = q;
			document.getElementById('almendra_total1').value = s;
	    }

		function bro() 
		{   var t = document.getElementById('broca').value;
			var u = (parseFloat(t)/250)*100;
			document.getElementById('broca1').value = u;
		}

		function bropu() 
		{   var z = document.getElementById('broca_punto').value;
			var aa = (parseFloat(z)/250)*100;
			document.getElementById('broca_punto1').value = aa;
		}

		function ne() 
		{   var v = document.getElementById('negro').value;
			var w = (parseFloat(v)/250)*100;
			document.getElementById('negro1').value = w;
		}

		function vi() 
		{   var x = document.getElementById('vinagre').value;
			var y = (parseFloat(x)/250)*100;
			document.getElementById('vinagre1').value = y;
		}

		function retotal() 
		{   			        		
			var cos = document.getElementById('costo_resultado').value;
			var can = document.getElementById('cantidad_resultado').value;
			var tot = parseFloat(cos)*parseFloat(can);

			var cesar= new Intl.NumberFormat('es-CO').format(tot);
			var cesar1= parseFloat(tot);
			document.getElementById('costo_total_resultado').value =tot;
		}

		function retotal2() 
		{   var cos = document.getElementById('costo_resultado').value;
			var can = document.getElementById('cantidad_resultado').value;
			var tot = parseInt(cos)*parseInt(can);

			var cesar= new Intl.NumberFormat('es-CO').format(tot);
			
			document.getElementById('costo_total_resultado').value =tot;
		}

		function ocultar()
		{
			if (document.getElementById('producto').value =="cafe pergamino seco" || document.getElementById('producto').value =="cacao seco") 
			{ 
				
				document.getElementById("unidad").value= "kilos";
				document.getElementById("kilos_brutos").disabled=false;
				document.getElementById("numero_estopas").disabled=false;
				document.getElementById("estado_estopas").disabled=false;
				document.getElementById("numero_sacos").disabled=false;
				document.getElementById("estado_sacos").disabled=false;
				document.getElementById("latas_compra").disabled=true;
				document.getElementById("latas_compra").value=0;
			}

		
			if (document.getElementById('producto').value =="cafe mojado" || document.getElementById('producto').value =="cacao en baba") 
			{ 
				document.getElementById("unidad").value= "latas	";
				document.getElementById("kilos_brutos").disabled=true;
				document.getElementById("latas_compra").disabled=false;
				document.getElementById("numero_estopas").disabled=true;
				document.getElementById("estado_estopas").disabled=true;
				document.getElementById("numero_sacos").disabled=true;
				document.getElementById("estado_sacos").disabled=true;
				document.getElementById("kilos_brutos").value=0;
				document.getElementById("numero_estopas").value=0;
				document.getElementById("estado_estopas").value=0;
				document.getElementById("numero_sacos").value=0;
				document.getElementById("estado_sacos").value=0;
			}
        }

		function lat() 
		{  
			document.getElementById('kilos_netos').value =document.getElementById('latas_compra').value;
			
		}
   
		function kibru() 
		{   var ee = document.getElementById('kilos_brutos').value;
			var gg = document.getElementById('numero_sacos').value;
			var hh = document.getElementById('numero_estopas').value;
			var ii= (parseInt(gg)*700 + parseInt(hh)*250)/1000;
			var ff = parseInt(ee) - ii;
			document.getElementById('kilos_netos').value = ff;
		}

		function aho() 
		{   
			
			var jj = document.getElementById('kilos_liquidacion').value;
			var ap = document.getElementById('aporte').value;
			var ll = document.getElementById('ahorro').value;
			var np = document.getElementById('neto_pagar').value;
			var ds = document.getElementById('descuento_secado').value;
			var pf = document.getElementById('precio_final').value;

			var kk = parseFloat(jj)* parseFloat(ll);
			
			var kk1= new Intl.NumberFormat('de-DE').format(kk);
			document.getElementById('total_ahorro').value = kk;

             var cega = parseFloat(pf) * parseFloat(jj);
			 var cega1 = (cega*1000)- cega*0.005*1000 - cega*0.01*1000 - parseFloat(ds) - parseFloat(ap)*1000 - kk;
			
			var tp = parseInt(np) - kk - parseInt(ap);

			var cega2= new Intl.NumberFormat('de-DE').format(cega1);
			document.getElementById('neto_pagar2').value = tp;
		}
		
		function apor() 
		{   var jj = document.getElementById('kilos_liquidacion').value;
			var ap = document.getElementById('aporte').value;
			var ll = document.getElementById('ahorro').value;
			var np = document.getElementById('neto_pagar').value;
			var kk = parseInt(jj)* parseInt(ll);
			var tp = parseInt(np) - kk - parseInt(ap);
			
			document.getElementById('total_ahorro').value = kk;
			var tp1 = new Intl.NumberFormat('es-CO').format(tp);
			document.getElementById('neto_pagar2').value = tp;
		}

		document.getElementById('comentario').innerHTML=" ";
		
		function reti() 
		{   var aneto = document.getElementById('neto_ahorro').value;
			var vretiro = document.getElementById('valor_retiro').value;
		
			var tsaldo= parseInt(aneto) - parseInt(vretiro);
			document.getElementById('saldo_disponible').value = tsaldo;

			if(parseInt(tsaldo)<0)
			{ document.getElementById('comentario').innerHTML="Saldo insuficiente";
			  document.getElementById('boton').disabled=true;
			}
			
			if(parseInt(tsaldo)>=0)
			{ document.getElementById('comentario').innerHTML=" ";
			  document.getElementById('boton').disabled=false;
			}
		}
		function error()
		{
          swal({
		  position: "top-end",
		  title: "¡Error!",
          text: "Este producto ya se registro",
          type: "error",
          });
        }
		

		function bueno()
		{
			Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
            })
        }
</script>
</head>
<body>
<?php
   
	$conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

	$accion = $_POST['accion'];
	$municipio=$_SESSION['municipio'];
    
	$dtz = new DateTimeZone("America/Bogota");
    $dt = new DateTime("now", $dtz);
    $fecha= $dt->format("Y-m-d");
    $hora= $dt->format("h:i:s");


	if($accion == 4)
	{
   	    $mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario LIKE '%$mi_busqueda%'or nombre_usuario LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{
			$resul = mysqli_query($conexion," SELECT  *FROM compra");
			$a=1;
		   while($consul = mysqli_fetch_array($resul))
		   {  
			if ($consul['fecha_compra']==$fecha and $consul['municipio_compra']==$_SESSION['municipio'])
			{  $a=$a+1;
				if($consul['municipio_compra']=="codazzi")
				 {$muni="AC";} 
				if($consul['municipio_compra']=="pueblo bello")
				 {$muni="PB";}
				 if($consul['municipio_compra']=="valledupar")
				 {$muni="VP";}  
		    } 
		   }
		       if($_SESSION['municipio']=="codazzi")
		         {$muni="AC";} 
		       if($_SESSION['municipio']=="pueblo bello")
		         {$muni="PB";}
		         if($_SESSION['municipio']=="valledupar")
		         {$muni="VP";} 
				
				 
			 echo 
			 '
			 <h2 class="text-center">REGISTRO</h2>
			 <form> 
			           
			 <div class="form-group row" style="margin-top: 45px">

			 <div class="row"> 
			 <div class="col-lg-5" style="margin-left:-150px;">
			 <div class="input-group mb-3 form-floating">
             <input type="text" class="form-control" id="nombre_compra" name="nombre_compra" value="'.$consulta['nombre_usuario'].'" readonly ><br>
            
             <label for="nombre" class="form-label">Nombre:</label>
			 </div>
             </div>

			 <div class="col-lg-4">
			 <div class="input-group mb-3 form-floating">
             <input type="number" class="form-control" id="cedula_compra" name="cedula_compra" value="'.$consulta['cedula_usuario'].'" readonly ><br>
			 
             <label for="cedula" class="form-label">Cedula:</label>
			 </div>
		     </div>
		 
			 <div class="col-lg-5">
			 <div class="input-group mb-3 form-floating">
             <input type="text" class="form-control" id="marca" name="marca" value="'.$muni.' '.$fecha.' '.$a.'"  readonly><br>
			 <span class="input-group-text">✎</span>
             <label for="codigo" class="form-label">Codigo:</label>
		     </div>
		     </div>
			 </div>

		<div class="form-group row ">
		     <div class="col-lg-5" style="margin-left:-150px;">
		     <div class="input-group mb-3 form-floating">
		     <input type="text" class="form-control" id="municipio_compra" name="municipio_compra" value="'.$_SESSION['municipio'].'" readonly ><br>
		     <span class="input-group-text">✎</span>
             <label for="Municipio" class="form-label">Municipio:</label>
		     </div>
		     </div>
 
		   <div class="col-lg-5">
		   <div class="input-group mb-3 form-floating">
		   <select class="form-control" name="producto" id="producto" onChange="ocultar()" required>
		   <option></option>
		   <option value="cafe pergamino seco">Cafe pergamino seco </option>
		   <option value="cafe mojado">Cafe mojado</option>
		   <option value="cacao seco">Cacao seco </option>
		   <option value="cacao en baba">Cacao en baba</option>
		   </select><br><br>
		   <span class="input-group-text">✎</span>
		   <label for="producto" class="form-label">Producto:</label>
		   </div>
		   </div>
		 
		  <div class="col-lg-4">
		  <div class="input-group mb-3 form-floating">
		  <input type="text" class="form-control" id="tipo_grano" name="tipo_grano" value="'.$consulta['estatus'].'" readonly ><br>
		  <span class="input-group-text">✎</span>
          <label for="estatus" class="form-label">Estatus:</label>
		  </div>
		  </div>
		  </div>

		<div class="form-group row ">
		  <div class="col-lg-5" style="margin-left:-150px;">
		  <div class="input-group mb-3 form-floating">
		  <input type="text" class="form-control" id="unidad" name="unidad" readonly><br>
		  <span class="input-group-text">✎</span>
          <label for="unidad" class="form-label">Unidad:</label>
		  </div>
		  </div>

        
		  <div class="col-lg-5">
		  <div class="input-group mb-3 form-floating">
		  <input type="text" class="form-control" id="numero_estopas" name="numero_estopas" required><br>
		  <span class="input-group-text">✎</span>
          <label for="numero_estopas" class="form-label">Numero Estopas:</label>
		  </div>
		  </div>

		  <div class="col-lg-4">
		  <div class="input-group mb-3 form-floating">
		  <select  class="form-control" name="estado_estopas" id="estado_estopas" required>
		  <option></option>
          <option value="buena">Buena </option>
          <option value="regular   ">Regular</option>
		  <option value="mala">Mala</option>
          </select><br><br>
		  <span class="input-group-text">✎</span>
          <label for="estado_estopas" class="form-label">Estado Estopas:</label>
		  </div>
		  </div>
		  </div>

		<div class="form-group row ">
		  <div class="col-lg-5" style="margin-left:-150px;">
		  <div class="input-group mb-3 form-floating">
		  <input type="text" class="form-control" id="numero_sacos" name="numero_sacos" required><br>
		  <span class="input-group-text">✎</span>
          <label for="numero_sacos" class="form-label">Numero Sacos:</label>
		  </div>
		  </div>

					 
		  <div class="col-lg-4">
		  <div class="input-group mb-3 form-floating">
          <select class="form-control" name="estado_sacos" id="estado_sacos" required>
		  <option></option>
          <option value="buena">Buena </option>
          <option value="regular">Regular</option>
		  <option value="mala">Mala</option>
          </select><br><br>
		  <span class="input-group-text">✎</span>
          <label for="estado_sacos" class="form-label">Estado Sacos:</label>
		  </div>
		  </div>

		  <div class="col-lg-5">
		  <div class="input-group mb-3 form-floating">
		  <input type="text" class="form-control" id="kilos_brutos" name="kilos_brutos"  onkeyup="kibru()" required><br>
		  <span class="input-group-text">✎</span>
          <label for="kilos_brutos" class="form-label">Kilos Brutos:</label>
		  </div>
		  </div> 
		</div>

		<div class="form-group row ">
		  <div class="col-lg-4" style="margin-left:-150px;">
		  <div class="input-group mb-3 form-floating"> 
		  <input type="number" class="form-control" id="latas_compra" name="latas_compra"  onkeyup="lat()" required><br>
		  <span class="input-group-text">✎</span>
          <label for="numero_latas" class="form-label">numero Latas:</label> 
		  </div>
		  </div>

		  <div class="col-lg-4">
		  <div class="input-group mb-3 form-floating">
		  <input type="text" class="form-control" id="kilos_netos" name="kilos_netos" required><br>
		  <span class="input-group-text">✎</span>
          <label for="kilos_latas" class="form-label">Kilos/Latas</label> 
		  </div>
		  </div>

		  <div class="col-lg-6" >
		  <textarea class="form-control" name="observaciones" id="observaciones" rows="3" cols="60" placeholder="escriba aqui las observaciones" ></textarea><br>
		  </div>

		</div>
		
		<div class="form-group row ">
		<div class="offset-lg-1 col-lg-8">
		<button  class="btn btn-secondary btn-lg" onclick="compra();">Guardar</button>
		</div>
		</div>
		</form>
		'; 
		} 
	}    
 if($accion == 10)
 {    
	    $resultados = mysqli_query($conexion," SELECT * FROM compra WHERE marca  = '$_POST[marca]'");
		if($consulta = mysqli_fetch_array($resultados))
		{echo "<script>alert('Este registro ya existe')</script>";} 
		else
		{mysqli_query($conexion,"insert into compra (municipio_compra, cedula, producto, unidad, marca, numero_estopas, estado_estopas, observaciones, fecha_compra, numero_sacos, estado_sacos, kilos_brutos, kilos_netos, tipo_grano, latas_compra, nombre_compra) values ('$_POST[municipio_compra]',$_POST[cedula_compra],  '$_POST[producto]', '$_POST[unidad]' ,'$_POST[marca]', $_POST[numero_estopas], '$_POST[estado_estopas]','$_POST[observaciones]','$fecha',$_POST[numero_sacos],'$_POST[estado_sacos]',$_POST[kilos_brutos],$_POST[kilos_netos], '$_POST[tipo_grano]',$_POST[latas_compra], '$_POST[nombre_compra]')");
			echo "<script> </script>";
			
		} 
 } 

 if($accion == 11)
 {    
	    $mi_busqueda = $_POST['mi_busqueda'];

		$cesar = mysqli_query($conexion," SELECT  *FROM liquidacion where codigo_liquidacion LIKE '%$mi_busqueda%' ");
		if($alberto = mysqli_fetch_array($cesar))
		{echo "<script> error(); </script>";} 
else
{ 	
		
 		$resultados = mysqli_query($conexion," SELECT * FROM compra WHERE cedula LIKE '%$mi_busqueda%'or marca LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{ 
			$producto=$consulta['producto']; $tipo_grano=$consulta['tipo_grano']; $kilos_netos=$consulta['kilos_netos']; $unidad=$consulta['unidad'];
			$resul = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario=$consulta[cedula]");
			if($consul= mysqli_fetch_array($resul))
		    {$nombre_usuario=$consul['nombre_usuario']; $estatus=$consul['estatus'];}
			$r = mysqli_query($conexion," SELECT * FROM producto WHERE nombre='$producto' and tipo='$tipo_grano'");
			if($c= mysqli_fetch_array($r))
		    {$precio_dia=$c['precio']; $prima_producto=$c['prima_producto'];}

			if($estatus!="organico")
			{  $prima_producto=0;}
			$rendimiento=0; $factor=0;
			$re = mysqli_query($conexion," SELECT * FROM analisisfisico WHERE codigo_analisisfisico='$consulta[marca]'");
			if($ce= mysqli_fetch_array($re))
		    { 
				if($consulta['producto']=="cafe pergamino seco")
				{$rendimiento=($precio_dia*92.8/$ce['factor']); $factor=$ce['factor']; }
			}

			
			$rx = mysqli_query($conexion," SELECT * FROM resultadosecado WHERE codigo_resultado='$consulta[marca]'");
			$d_secado=0;
			if($cx= mysqli_fetch_array($rx))
		    {   
				if($cx['tipo_pago']=="cafe" or $cx['tipo_pago']=="cacao")
				{$d_secado=$cx['costo_total_resultado'];}

			}
			$senso="no se hizo analisis sensorial";
			$redi = mysqli_query($conexion," SELECT * FROM analisissensorial WHERE codigo_sensorial='$consulta[marca]'");
			if($cedi= mysqli_fetch_array($redi))
		    { $senso=$cedi['notas'];}
			
			
			echo 
			'
			<h2 class="text-center">LIQUIDACIÓN</h2>
		    <form> 
		     <div class="form-group row">
			  <div class="col-lg-6" style="margin-left:-200px;">
			  <div class="input-group mb-3 form-floating">
			  <input type="text" class="form-control" id="nombre_liquidacion" name="nombre_liquidacion" value="'.$nombre_usuario.'" readonly ><br>
			  <span class="input-group-text">✎</span>
			  <label for="nombre" class="form-label">Nombre Completo:</label> 
			  </div>
		      </div>

			  <div class="col-lg-4">
			  <div class="input-group mb-3 form-floating">
		      <input type="number" class="form-control" id="cedula_liquidacion" name="cedula_liquidacion" value="'.$consulta['cedula'].'" readonly ><br>
		      <span class="input-group-text">✎</span>
			  <label for="Cedula" class="form-label">Cedula:</label> 
			  </div>
	          </div>

			  <div class="col-lg-5">
			  <div class="input-group mb-3 form-floating">
			  <input type="text" class="form-control" id="codigo_liquidacion" name="codigo_liquidacion" value="'.$consulta['marca'].'" readonly><br>
			  <span class="input-group-text">✎</span>
			  <label for="codigo" class="form-label">Codigo:</label>  
			  </div>
              </div>
			 </div>    

			<div class="form-group row ">
			 <div class="col-lg-4" style="margin-left:-200px;">
			 <div class="input-group mb-3 form-floating">
		     <input type="text" class="form-control" id="producto_liquidacion" name="producto_liquidacion" value="'.$producto.'" readonly><br>
	         <span class="input-group-text">✎</span>
			 <label for="producto" class="form-label">Producto:</label>
			 </div>
	         </div>

		  
			 <div class="col-lg-4">
			 <div class="input-group mb-3 form-floating">
		     <input type="text" class="form-control" id="tipo_grano" name="tipo_grano" value="'.$tipo_grano.'" readonly><br>
			 <span class="input-group-text">✎</span>
			 <label for="tipo" class="form-label">Tipo:</label>
		     </div>
		     </div>

			 <div class="col-lg-3">
			 <div class="input-group mb-3 form-floating">
		     <input type="number" class="form-control" id="kilos_liquidacion" name="kilos_liquidacion" value="'.$kilos_netos.'" readonly><br>
			 <span class="input-group-text">✎</span>
			 <label for="kilos_netos" class="form-label">Kilos/Latas:</label>
	         </div>
	         </div>

			 <div class="col-lg-4">
			 <div class="input-group mb-3 form-floating">
		     <input type="text" class="form-control" id="politica" name="politica" value="'.$c['politica'].'" readonly><br>
		     <span class="input-group-text">✎</span>
			 <label for="politica" class="form-label">Politica:</label>
			 </div>
		     </div>
			</div>
		
		  <div class="form-group row ">
		     <div class="col-lg-3" style="margin-left:-200px;">
			 <div class="input-group mb-3 form-floating">
			 <input type="text" class="form-control" id="precio_dia" name="precio_dia" value="'.$precio_dia.'" readonly ><br>
			 <span class="input-group-text">✎</span>
			 <label for="precio_dia" class="form-label">Precio Dia:</label>
			 </div>
	         </div>

			 <div class="col-lg-3">
			 <div class="input-group mb-3 form-floating">
		     <input type="number" class="form-control" id="factor" name="factor" readonly value="'.$factor.'"><br>
			 <span class="input-group-text">✎</span>
			 <label for="f_rendimiento" class="form-label">F. Rendimiento:</label>
		     </div>
		     </div>

			 <div class="col-lg-3">
			 <div class="input-group mb-3 form-floating">
		     <input type="text" class="form-control" id="rendimiento" name="rendimiento" readonly value="'.$rendimiento.'" readonly><br>
			 <span class="input-group-text">✎</span>
			 <label for="p_calidad" class="form-label">P. Calidad:</label>
		     </div>
		     </div>

			 <div class="col-lg-3">
			 <div class="input-group mb-3 form-floating">
			 <input type="text" class="form-control" id="prima_producto" name="prima_producto" value="'.$prima_producto.'" readonly ><br>
			 <span class="input-group-text">✎</span>
			 <label for="prima" class="form-label">Prima:</label>
		     </div>
	         </div>

			 <div class="col-lg-3">
		     <div class="input-group mb-3 form-floating">
		     <input type="text" class="form-control" id="bonificacion" name="bonificacion" onkeyup="boni()" required><br>
		     <span class="input-group-text">✎</span>
		     <label for="binificacion" class="form-label">Bonificacion:</label>
		     </div>
		     </div>
		  </div>

		 		
		 <div class="form-group row">	 	     
              <div class="col-lg-3" style="margin-left:-200px;">
		      <div class="input-group mb-3 form-floating">
              <input type="text" class="form-control" id="precio_final" name="precio_final" readonly><br>
			  <span class="input-group-text">✎</span>
		      <label for="precio" class="form-label">Precio Kilo:</label>
              </div>
              </div>


			  <div class="col-lg-4">
		      <div class="input-group mb-3 form-floating">
		      <input type="text" class="form-control" id="subtotal" name="subtotal" readonly><br>
			  <span class="input-group-text">✎</span>
		      <label for="subtotal" class="form-label">Subtotal:</label>
		      </div>
		      </div>

			  <div class="col-lg-4">
		      <div class="input-group mb-3 form-floating">
		      <input type="text" class="form-control" id="dian" name="dian" readonly><br>
			  <span class="input-group-text">✎</span>
		      <label for="Dian" class="form-label">Dian:</label>
		      </div>
		      </div>

			  <div class="col-lg-4">
				<div class="input-group mb-3 form-floating">
		        <input type="text" class="form-control" id="asociados" name="asociados" readonly><br>
				<span class="input-group-text">✎</span>
		        <label for="asociados" class="form-label">Asociados:</label>
		        </div>
		        </div>			
			</div>

			<div class="form-group row ">

			    <div class="col-lg-3" style="margin-left:-200px;">
			    <div class="input-group mb-3 form-floating">
			    <input type="text" class="form-control" id="descuento_secado" name="descuento_secado" value="'.$d_secado.'" readonly><br>
			    <span class="input-group-text">✎</span>
			    <label for="secado" class="form-label">D. Secado:</label>
			    </div>
			    </div>

				<div class="col-lg-5">
				<div class="input-group mb-3 form-floating">
		        <input type="text" class="form-control" id="neto_pagar" name="neto_pagar" readonly><br>
				<span class="input-group-text">✎</span>
		        <label for="total" class="form-label">Total:</label>
		        </div>
		        </div>

				<div class="col-lg-3">
				<div class="input-group mb-3 form-floating">
		        <input type="text" class="form-control" id="aporte" name="aporte"  onkeyup="apor()" required><br>
				<span class="input-group-text">✎</span>
		        <label for="aporte" class="form-label">Aporte:</label>
		        </div>
		        </div>

				<div class="col-lg-4">
			   <div class="input-group mb-3 form-floating">
		       <input type="text" class="form-control" id="ahorro" name="ahorro"  onkeyup="aho()" required><br>
			   <span class="input-group-text">✎</span>
		       <label for="ahorro" class="form-label">Ahorro x Kilo:</label>
		       </div>
		       </div>			

		   <div class="form-group row ">

               <div class="col-lg-6"  style="margin-left:-200px;">
		       <div class="input-group mb-3 form-floating">
		       <input type="text" class="form-control" id="total_ahorro" name="total_ahorro" value="0" readonly><br>
		       <span class="input-group-text">✎</span>
		       <label for="t_ahorro" class="form-label">Total Ahorro:</label>
		       </div>
		       </div>
	           </div>
		     
			   <div class="col-lg-9" style="margin-top:-90px; margin-left:120px;">
			   <div class="input-group mb-3 form-floating">
		       <input type="text" class="form-control" id="neto_pagar2" name="neto_pagar2" readonly><br>
			   <span class="input-group-text">✎</span>
		       <label for="t_liquidacion" class="form-label">Total Liquidcion:</label>
		       </div>
		       </div>
			</div>

			<div class="form-group row">
			   <div class="col-lg-7" style="margin-left:-200px;">
			   <textarea class="form-control" name="o_sensorial" id="o_sensorial" rows="4" cols="20" value="'.$senso.'"  placeholder="'.$senso.'" readonly></textarea><br><br>
			   </div>
			 
			   <div class="col-lg-8">
		       <div class="input-group mb-3 form-floating">
	           <textarea name="observaciones_liquidacion" id="observaciones_liquidacion" rows="4" cols="45" placeholder="escriba aqui las observaciones"></textarea>
			   <span class="input-group-text">✎</span> 
			   </div>
		       </div>
		    </div>

		<div class="form-group row ">
		   
		  <div class="form-group row ">
		   <div class="offset-lg-1 col-lg-8">
		    <button class="btn btn-secondary btn-lg" onclick="liquidacion();">Guardar</button>
		   </div> 
		  </div>
		  </form>
           ';
		
		}		
	}
} 
 

if($accion == 12)
 {              
             
            $cesar = mysqli_query($conexion," SELECT  *FROM liquidacion where codigo_liquidacion= '$_POST[codigo_liquidacion]'");
            if($alberto = mysqli_fetch_array($cesar))
            {echo "<script>alert('Este registro ya existe')</script>";} 
            else
            {   
                if($_POST['total_ahorro']>0)
                {mysqli_query($conexion," insert into ahorro (cedula_ahorro, nombre_ahorro, valor_ahorro, fecha_ahorro, hora_ahorro, codigo_ahorro, kilos_ahorro, cantidad_ahorro) value ($_POST[cedula_liquidacion],'$_POST[nombre_liquidacion]',$_POST[total_ahorro],'$fecha','$hora','$_POST[codigo_liquidacion]',$_POST[kilos_liquidacion],$_POST[ahorro])");}
                
                mysqli_query($conexion,"insert into liquidacion (codigo_liquidacion,precio_dia,rendimiento,bonificacion,prima,precio_final,subtotal,fecha_liquidacion,hora_liquidacion,politica,observaciones_liquidacion,dian,asociados,neto_pagar,ahorro, total_ahorro, kilos_liquidacion, cedula_liquidacion, aporte, nombre_liquidacion, producto_liquidacion)
                values ('$_POST[codigo_liquidacion]',$_POST[precio_dia],$_POST[rendimiento],$_POST[bonificacion],$_POST[prima_producto],$_POST[precio_final],$_POST[subtotal],'$fecha' ,'$hora','$_POST[politica]','$_POST[observaciones_liquidacion]',$_POST[dian],$_POST[asociados], $_POST[neto_pagar2],$_POST[ahorro],$_POST[total_ahorro],$_POST[kilos_liquidacion], $_POST[cedula_liquidacion],$_POST[aporte],'$_POST[nombre_liquidacion]','$_POST[producto_liquidacion]')"); 

				echo "<script>	alert ('Registro Exitoso') </script>";
			} 
 } 

 	if($accion == 1)
	{ 
		mysqli_query($conexion,"insert into asociados (nombre_usuario, municipio, vereda, finca, fecha_registro, cedula_usuario, numero_up, codigo_up, estatus, contacto, cupo_bcs, tipo_vinculacion) values ('$_POST[nombre_usuario]','$_POST[municipio]','$_POST[vereda]','$_POST[finca]', '$fecha',$_POST[cedula_usuario],$_POST[numero_up],'$_POST[codigo_up]','$_POST[estatus]',$_POST[contacto],$_POST[cupo_bcs], '$_POST[tipo_vinculacion]')");
	
    }

	if($accion == 2)
	  {
		$mi_busqueda = $_POST['mi_busqueda'];
		$cesar = mysqli_query($conexion," SELECT  *FROM analisisfisico where codigo_analisisfisico LIKE '%$mi_busqueda%' ");
		if($alberto = mysqli_fetch_array($cesar))
		{echo "<script>error();</script>";} 
else
{ 		
		
		$resultados = mysqli_query($conexion," SELECT * FROM compra WHERE cedula LIKE '%$mi_busqueda%'or marca LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{ $producto=$consulta['producto']; $tipo_grano=$consulta['tipo_grano'];
			$resul = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario=$consulta[cedula]");
			if($consul= mysqli_fetch_array($resul))
		    {$nombre_usuario=$consul['nombre_usuario'];}
			
			echo 
			'
			<h2 class="text-center">ANALISIS FISICO</h2>
			<form>       

		<div class="form-group row " style="margin-top: 45px;">
			<div class="col-lg-8" style="margin-left: -180px;">
			<div class="input-group mb-3 form-floating">
			<input type="text" class="form-control" id="nombre_analisisfisico" name="nombre_analisisfisico" value="'.$nombre_usuario.'" readonly ><br>
		    <span class="input-group-text">✎</span>
		    <label for="nombre" class="form-label">Nombre:</label>
		    </div>
		    </div>

			<div class="col-lg-7">
			<div class="input-group mb-3 form-floating">
			<input type="number" class="form-control" value="'.$consul['cedula_usuario'].'" readonly ><br>
			<span class="input-group-text">✎</span>
		    <label for="cedula" class="form-label">Cedula:</label>
		    </div>
	        </div>						
		</div>

	   <div class="form-group row ">
	        <div class="col-lg-8" style="margin-left: -180px;">
			<div class="input-group mb-3 form-floating">
		    <input type="text" class="form-control" id="codigo_analisisfisico" name="codigo_analisisfisico" value="'.$consulta['marca'].'" readonly><br>
		    <span class="input-group-text">✎</span>
		    <label for="codigo" class="form-label">Codigo:</label>
			</div>

	        </div>
	        <div class="col-lg-7" style="margin-left: 0px;">
			<div class="input-group mb-3 form-floating">
		    <input type="text" class="form-control" id="producto" name="producto" value="'.$producto.'" readonly><br>
			<span class="input-group-text">✎</span>
		    <label for="producto" class="form-label">Producto:</label>
		    </div>
	        </div>		
		</div>

	    <div class="form-group row">
		    <div class="col-lg-5" style="margin-left: -180px;">
		    <div class="input-group mb-4 form-floating">
		    <input type="text" class="form-control"  id="tipo_grano name="tipo_grano" value="'.$tipo_grano.'" readonly><br>
		    <span class="input-group-text">✎</span>
		    <label for="t_grano" class="form-label">T. grano:</label>
		    </div>
		    </div>

		    <div class="col-lg-5" >
		    <div class="input-group mb-3 form-floating">
		    <input type="number" class="form-control" id="almendra_total" name="almendra_total" required><br>
		    <span class="input-group-text">✎</span>
		    <label for="a_total" class="form-label">A. Total (gr):</label>
		    </div>
		    </div> 
		     <div class="col-lg-5" style="margin-left: 295px; margin-top: -80px;">
		     <div class="input-group mb-3 form-floating">
		     <input type="number" class="form-control" id="almendra_total1" name="almendra_total1" readonly><br>
		     <span class="input-group-text">✎</span>
		     <label for="a_total" class="form-label">(%) A. Total:</label>
		     </div>
		     </div>			          
		 </div>

	     <div class="form-group row">
		     <div class="col-lg-5" style="margin-left: -180px;">
		     <div class="input-group mb-3 form-floating">
		     <input type="number" class="form-control" id="almendra_sana" name="almendra_sana"  onkeyup="facr()" required><br>
			 <span class="input-group-text">✎</span>
		     <label for="a_sana" class="form-label">A. Sana (gr):</label>
	         </div>
             </div>

			 <div class="col-lg-5">
		     <div class="input-group mb-3 form-floating">
		     <input type="number" class="form-control" id="almendra_sana1" name="almendra_sana1"  readonly><br>
			 <span class="input-group-text">✎</span>
		     <label for="a_sana" class="form-label">(%) A. Sana:</label>
	         </div>
             </div>
	   
	
			 <div class="col-lg-5">
		     <div class="input-group mb-3 form-floating">
		     <input type="number" class="form-control" id="broca" name="broca"  onkeyup="bro()" required><br>
		     <span class="input-group-text">✎</span>
		     <label for="broca" class="form-label">Broca (gr):</label>
	         </div>
	         </div>		      
		 </div>

		 <div class="form-group row">
		      <div class="col-lg-5" style="margin-left: -180px;">
		      <div class="input-group mb-3 form-floating">
	          <input type="number" class="form-control" id="broca1" name="broca1" readonly><br>
			  <span class="input-group-text">✎</span>
		      <label for="broca" class="form-label">(%) Broca:</label>
	          </div>
              </div>

  			  <div class="col-lg-5">
		      <div class="input-group mb-3 form-floating">
			  <input type="number" class="form-control" id="broca_punto" name="broca_punto"  onkeyup="bropu()" required><br>
			  <span class="input-group-text">✎</span>
		      <label for="broca_punto" class="form-label">Broca Punto (gr):</label>
			  </div>
			  </div>

			  <div class="col-lg-5">
		      <div class="input-group mb-3 form-floating">
			  <input type="number" class="form-control" id="broca_punto1" name="broca_punto1" readonly><br>
			  <span class="input-group-text">✎</span>
		      <label for="broca_punto" class="form-label">(%) Broca Punto:</label>
			  </div>
			  </div>			  
		 </div>

		 <div class="form-group row">
		      <div class="col-lg-5" style="margin-left: -180px;">
		      <div class="input-group mb-3 form-floating">
			  <input type="number" class="form-control" id="negro" name="negro"  onkeyup="ne()" required><br>
			  <span class="input-group-text">✎</span>
		      <label for="negro" class="form-label">Negro (gr):</label>
			  </div>
			  </div>

			  <div class="col-lg-5" style="margin-left:0px;">
		      <div class="input-group mb-3 form-floating">
			  <input type="number" class="form-control" id="negro1" name="negro1" readonly><br>
			  <span class="input-group-text">✎</span>
		      <label for="negro" class="form-label">(%) Negro:</label>
			  </div>
			  </div>

			  <div class="col-lg-5">
		      <div class="input-group mb-3 form-floating">
			  <input type="number" class="form-control" id="vinagre" name="vinagre" onkeyup="vi()" required><br>
			  <span class="input-group-text">✎</span>
		      <label for="vinagre" class="form-label">Vinagre (gr):</label>
			  </div>
			  </div>			 
		 </div>

		 <div class="form-group row">
		     <div class="col-lg-5" style="margin-left: -180px;">
		     <div class="input-group mb-3 form-floating">
		     <input type="number" class="form-control" id="vinagre1" name="vinagre1" readonly><br>
		     <span class="input-group-text">✎</span>
		     <label for="vinagre" class="form-label">(%) Vinagre:</label>
		     </div>
		     </div>

		    <div class="col-lg-5" style="margin-left: 0px;">
		    <div class="input-group mb-3 form-floating">
		    <input type="number" class="form-control" id="humedad" name="humedad" required><br>
		    <span class="input-group-text">✎</span>
		    <label for="humedad" class="form-label">Humedad:</label>
		    </div>
		    </div>
		    <div class="col-lg-5" style="margin-left: 285px; margin-top:-72px">
		    <div class="input-group mb-3 form-floating">
		    <input type="number" class="form-control" id="factor" name="factor" readonly><br>
		    <span class="input-group-text">✎</span>
		    <label for="factor" class="form-label">Factor:</label>
		    </div>
		    </div>

		   <div class="col-lg-8">
		   <div class="input-group mb-3 form-floating">
		   <textarea name="observaciones_analisisfisico" id="observaciones_analisisfisico" rows="4" cols="70" placeholder="escriba aqui las observaciones"></textarea>
		   </div>  
		   </div>
	    </div>

			<div class="form-group row ">
			  <div class="offset-lg-3 col-lg-8">
			  <button class="btn btn-secondary btn-lg" onclick="analisisfisico();">Guardar</button>
			  </div> 
			</div>
		
       		</form>
		    ';
		}	}
   }

   if($accion ==3)
   {
	  mysqli_query($conexion,"insert into analisisfisico (codigo_analisisfisico, fecha_analisisfisico, almendra_total, almendra_total1, almendra_sana, almendra_sana1 , broca,broca1, broca_punto, broca_punto1, negro, negro1, vinagre, vinagre1, factor, observaciones_analisisfisico, humedad, nombre_analisisfisico) values ('$_POST[codigo_analisisfisico]','$fecha', $_POST[almendra_total], $_POST[almendra_total1], $_POST[almendra_sana],$_POST[almendra_sana1], $_POST[broca],$_POST[broca1], $_POST[broca_punto],$_POST[broca_punto1], $_POST[negro],$_POST[negro1], $_POST[vinagre],$_POST[vinagre1], $_POST[factor], '$_POST[observaciones_analisisfisico]', $_POST[humedad], '$_POST[nombre_analisisfisico]' )");   
	  echo "<script> bueno(); </script>";
	}
	   if($accion == 5)
	   {
		$mi_busqueda = $_POST['mi_busqueda'];
		$cesar = mysqli_query($conexion," SELECT  *FROM analisissensorial where codigo_sensorial LIKE '%$mi_busqueda%' ");
		if($alberto = mysqli_fetch_array($cesar))
		{echo "<script> error(); </script>";} 
else
{ 		
		
		$resultados = mysqli_query($conexion," SELECT * FROM compra WHERE cedula LIKE '%$mi_busqueda%'or marca LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{ $producto=$consulta['producto']; $tipo_grano=$consulta['tipo_grano'];
			$resul = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario=$consulta[cedula]");
			if($consul= mysqli_fetch_array($resul))
		    {$nombre_usuario=$consul['nombre_usuario'];}
			
			echo 
			'
			<h2 class="text-center">ANALISIS SENSORIAL</h2>
			<form>       

			<div class="form-group row " style="margin-top: 45px;">
			     <div class="col-lg-5">
			     <div class="input-group mb-3 form-floating">
			     <input type="text" class="form-control" id="nombre_sensorial" name="nombre_sensorial" value="'.$consul['nombre_usuario'].'" readonly><br>
				 <span class="input-group-text">✎</span>
				 <label for="nombre" class="form-label">Nombre:</label>
		         </div>
		         </div>

				 <div class="col-lg-3">
			     <div class="input-group mb-3 form-floating">
			     <input type="number" class="form-control" id="cedula_sensorial" name="cedula_sensorial" value="'.$consul['cedula_usuario'].'" readonly ><br>
				 <span class="input-group-text">✎</span>
				 <label for="Cedula" class="form-label">Cedula:</label>
		         </div>
	             </div>

	
				 <div class="col-lg-4">
			     <div class="input-group mb-3 form-floating">
		         <input type="text" class="form-control" id="codigo_sensorial" name="codigo_sensorial" value="'.$consulta['marca'].'" readonly><br>
				 <span class="input-group-text">✎</span>
				 <label for="Codigo" class="form-label">Codigo:</label>
		         </div>
	             </div>
			</div>

			<div class="form-group row ">
				 <div class="col-lg-4">
			     <div class="input-group mb-3 form-floating">
		         <input type="text" class="form-control" id="producto" name="producto" value="'.$producto.'" readonly><br>
				 <span class="input-group-text">✎</span>
				 <label for="producto" class="form-label">Producto:</label>
				 </div>
	             </div>
			

				 <div class="col-lg-4">
			     <div class="input-group mb-3 form-floating">
		         <input type="text" class="form-control"  value="'.$tipo_grano.'" readonly><br>
	             <span class="input-group-text">✎</span>
				 <label for="tipo" class="form-label">Tipo:</label>
				 </div>
	             </div>

	   
				 <div class="col-lg-4">
			     <div class="input-group mb-3 form-floating">
		         <input type="number" class="form-control" id="puntaje_scaa" name="puntaje_scaa"  required><br><br>
				 <span class="input-group-text">✎</span>
				 <label for="puntaje" class="form-label">Puntaje scaa:</label>
		         </div>
                 </div>				
			</div>
			<div class="form-group row">
                 <div class="col-lg-4">
			     <div class="input-group mb-3 form-floating">
			     <select class="form-control" name="acidez" id="acidez" required>
			     <option></option>
			     <option value="baja">Baja </option>
			     <option value="media">Media</option>
			     <option value="alta">Alta</option>
			     </select><br><br> 
			     <span class="input-group-text">✎</span>
			     <label for="acidez" class="form-label">Acidez:</label>
			     </div>
			     </div>

	             <div class="col-lg-8">
			     <textarea name="notas" id="notas" rows="2" cols="60" placeholder="descriptores de calidad" required></textarea><br><br>
				 </div> 
			</div> 
			 
			<div class="form-group row ">
			  <div class="offset-lg-3 col-lg-8">
			  <button class="btn btn-secondary btn-lg" onclick="analisissensorial();">Guardar</button>
			  </div> 
			</div>
			</form>
		    ';
	}	}
	   }  
	 
	   if($accion == 13)
	   {
		   mysqli_query($conexion,"insert into analisissensorial (codigo_sensorial, fecha_sensorial, puntaje_scaa, acidez, notas, nombre_sensorial, cedula_sensorial) values ('$_POST[codigo_sensorial]','$fecha', $_POST[puntaje_scaa], '$_POST[acidez]','$_POST[notas]','$_POST[nombre_sensorial]',$_POST[cedula_sensorial])");   
	   }

  if($accion == 14)
	{
		$mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario LIKE '%$mi_busqueda%'or nombre_usuario LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{
			$resul = mysqli_query($conexion," SELECT  *FROM compra");
			$a=1;
		   while($consul = mysqli_fetch_array($resul))
		   {  
			if ($consul['fecha_compra']==$fecha and $consul['municipio_compra']==$_SESSION['municipio'])
			{   $a=$a+1;
				if($_SESSION['municipio']=="codazzi")
				 {$muni="AC";} 
				if($_SESSION['municipio']=="pueblo bello")
				 {$muni="PB";}
				 if($_SESSION['municipio']=="valledupar")
				 {$muni="VP";}  
		    } 
		   }
		       if($_SESSION['municipio']=="codazzi")
		         {$muni="AC";} 
		       if($_SESSION['municipio']=="pueblo bello")
		         {$muni="PB";}
		         if($_SESSION['municipio']=="valledupar")
		         {$muni="VP";} 
				 
			 echo 
			 '
			 <h2 class="text-center">SECADO</h2>
			 <form> 
			 <div class="form-group row">
                  <div class="col-lg-5" style="margin-left:-150px; margin-top:20px;">
                  <div class="input-group mb-3 form-floating" >
                  <input type="text" class="form-control" id="nombre_secado" name="nombre_secado" value="'.$consulta['nombre_usuario'].'" readonly ><br>
                  <span class="input-group-text">✎</span>
                  <label for="nombre" class="form-label">Nombre:</label></div>
                  </div>
                  </div>

                  <div class="col-lg-5" style="margin-left:150px; margin-top:-90px;">
                  <div class="input-group mb-3 form-floating">
                  <input type="number" class="form-control" id="cedula_secado" name="cedula_secado" value="'.$consulta['cedula_usuario'].'" readonly ><br>
                  <span class="input-group-text">✎</span>
                  <label for="cedula" class="form-label">Cedula:</label></div>
                  </div>
                  </div>
         
                  <div class="col-lg-5" style="margin-left:450px; margin-top:-72px;">
                  <div class="input-group mb-3 form-floating">
                  <input type="text" class="form-control" id="codigo_secado" name="codigo_secado" value="SEC-'.$muni.' - '.$fecha.' '.$a.'"  readonly><br>
                  <span class="input-group-text">✎</span>
                  <label for="codigo" class="form-label">Codigo:</label></div> 
                  </div>
                  </div>
             </div>

             <div class="form-group row ">
                  <div class="col-lg-5" style="margin-left:-150px; margin-top:20px;" >
                  <div class="input-group mb-3 form-floating">
                  <input type="text" class="form-control" id="tipo_usuario" name="tipo_usuario" value="'.$consulta['tipo_vinculacion'].'" readonly><br><br>
                  <span class="input-group-text">✎</span>
                  <label for="t_usuario" class="form-label">T. Usuario:</label></div> 
                  </div>
                  </div>

                  <div class="col-lg-5" style="margin-left:150px; margin-top:-90px;">
                  <div class="input-group mb-3 form-floating">
                  <input type="text" class="form-control" id="municipio_secado" name="municipio_secado" value="'.$_SESSION['municipio'].'" readonly><br><br>
                  <span class="input-group-text">✎</span>
                  <label for="municipio" class="form-label">Municipio:</label></div>  
                  </div>
                  </div>

                  <div class="col-lg-5" style="margin-left:450px; margin-top:-72px;">
                  <div class="input-group mb-3 form-floating">
                  <select class="form-control" name="producto_secado" id="producto_secado" required>
                  <option></option>
                  <option value="cafe mojado">Cafe Mojado</option>
                  <option value="cacao en baba">Cacao en Baba</option>
                  </select><br><br>
                  <span class="input-group-text">✎</span>
                  <label for="producto" class="form-label">Producto:</label></div>  
                  </div>
                  </div>
             </div>

             <div class="form-group row">
                  <div class="col-lg-5" style="margin-left:-150px; margin-top:20px;">
                  <div class="input-group mb-3 form-floating">
                  <input type="number" class="form-control" id="numero_latas" name="numero_latas" placeholder="0" min="0" required><br><br>
                  <span class="input-group-text">✎</span>
                  <label for="n_latas" class="form-label">N. Latas:</label></div> 
                  </div>
                  </div>

                  <div class="col-lg-5" style="margin-left:150px; margin-top:-90px;">
                  <div class="input-group mb-3 form-floating">
                  <select  class="form-control" name="humedad_secado" id="humedad_secado" required>
                  <option></option>
                  <option value="mojado">Mojado</option>
                  <option value="oreado">Oreado</option>
                  </select><br><br>
                  <span class="input-group-text">✎</span>
                  <label for="t_humedad" class="form-label">T. Humedad:</label></div> 
                  </div>
                  </div>

                  <div class="col-lg-5"style="margin-left:450px; margin-top:-72px;">
                  <div class="input-group mb-3 form-floating">
                  <select class="form-control"  name="tiposecado_resultado" id="tiposecado_resultado" required>
                  <option></option>
                  <option value="patio">Patio </option>
                  <option value="patio mini">Patio mini</option>
                  <option value="secadora la mesa">Secadora la Mesa</option>
                  </select><br><br> 
                  <span class="input-group-text">✎</span>
                  <label for="t_secado" class="form-label">T. Secado:</label></div> 
                  </div>
                  </div>
				</div>
				<div class="form-group row" style="margin-left:50px;>
                  <div class="col-lg-8">
                  <div class="input-group mb-3 form-floating">
                  <textarea name="observaciones_secado" id="observaciones_secado" rows="4" cols="60" placeholder="observaciones"></textarea><br><br>
                  <span class="input-group-text">✎</span>
                  </div>
                  </div>
				</div>		     
		  
		          <div class="form-group row ">
		          <div class="offset-lg-5 col-lg-8">
		          <button class="btn btn-secondary btn-lg" onclick="secado();">Guardar</button>
		          </div>
	              </div>
		          </form>
			      '; 
		}
     }

	 if($accion == 6)
	 {
	  mysqli_query($conexion,"insert into compra (municipio_compra, cedula, marca, fecha_compra, tipo_grano, nombre_compra) values ('$_POST[municipio_secado]',$_POST[cedula_secado], '$_POST[codigo_secado]', '$fecha', '$_POST[tipo_usuario]','$_POST[nombre_secado]')");
	  mysqli_query($conexion,"insert into secado (codigo_secado, producto_secado, numero_latas, fecha_secado, tipo_usuario, observaciones_secado, humedad_secado, cedula_secado, municipio_secado, tiposecado_resultado, nombre_secado) values ('$_POST[codigo_secado]','$_POST[producto_secado]',$_POST[numero_latas],'$fecha' ,'$_POST[tipo_usuario]','$_POST[observaciones_secado]','$_POST[humedad_secado]', $_POST[cedula_secado], '$_POST[municipio_secado]','$_POST[tiposecado_resultado]','$_POST[nombre_secado]')");
	 } 

	 if($accion == 15)
	 {
		$mi_busqueda = $_POST['mi_busqueda'];
		$cesar = mysqli_query($conexion," SELECT  *FROM resultadosecado where codigo_resultado LIKE '%$mi_busqueda%'");
		if($alberto = mysqli_fetch_array($cesar))
		{echo '<img src="NO.JPG">'; "<script> error(); </script>";
		} 
		else{ 
		$resultados = mysqli_query($conexion," SELECT * FROM secado WHERE cedula_secado LIKE '%$mi_busqueda%'or codigo_secado LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{ 
			$resul = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario=$consulta[cedula_secado]");
			if($consul= mysqli_fetch_array($resul))
		    {$nombre_usuario=$consul['nombre_usuario'];}

			if($consulta['producto_secado']=="cafe mojado")
		    {$producto="cafe pergamino seco";}

			if($consulta['producto_secado']=="cacao en baba")
		    {$producto="cacao seco";}
			
			echo 
			'
			<h2 class="text-center">RESULTADO DEL SECADO</h2>
			<form>       

			<div class="form-group row ">
			     <div class="col-lg-7" style="margin-top:20px; margin-left:-150px;">
                 <div class="input-group mb-3 form-floating">
			     <input type="text" class="form-control"  id="nombre_resultado" name="nombre_resultado" value="'.$consul['nombre_usuario'].'" readonly ><br>
		         <span class="input-group-text">✎</span>
                 <label for="nombre" class="form-label">Nombre:</label></div>
				 </div>
		         </div>

		         <div class="col-lg-5" style="margin-top:-90px; margin-left:200px;">
		         <div class="input-group mb-3 form-floating">
			     <input type="number" class="form-control"  id="cedula_resultado" name="cedula_resultado" value="'.$consul['cedula_usuario'].'" readonly ><br>
		         <span class="input-group-text">✎</span>
                 <label for="Cedula" class="form-label">Cedula:</label></div>
				 </div>
	             </div>			
	
	            <div class="col-lg-5" style="margin-top:-72px; margin-left:450px;">
		        <div class="input-group mb-3 form-floating">
		        <input type="text" class="form-control" id="codigo_resultado" name="codigo_resultado" value="'.$consulta['codigo_secado'].'" readonly><br>
		        <span class="input-group-text">✎</span>
                <label for="Codigo" class="form-label">Codigo:</label></div>
				</div>
	            </div>
			</div>


	       <div class="form-group row">
		        <div class="col-lg-4">
	            <div class="input-group mb-3 form-floating">
		        <input type="hidden" class="form-control" id="municipio_resultado" name="municipio_resultado" value="'.$_SESSION['municipio'].'" readonly><br>
		        </div>
	            </div>

				<div class="col-lg-4" style="margin-left:-360px;">
		        <div class="input-group mb-3 form-floating">
		        <input type="text" class="form-control" id="producto" name="producto" value="'.$producto.'" readonly><br><br>
				<span class="input-group-text">✎</span>
                <label for="producto" class="form-label">Producto:</label></div>
				</div>
				</div>

				<div class="col-lg-4" style="margin-top:-90px; margin-left:60px;">
		        <div class="input-group mb-3 form-floating">
		        <input type="text" class="form-control" id="tipograno_resultado" name="tipograno_resultado" value="'.$consul['estatus'].'" readonly><br><br>
		        <span class="input-group-text">✎</span>
                <label for="t_grano" class="form-label">T. Grano:</label></div>
				</div>
	            </div>
	  
				<div class="col-lg-4" style="margin-top:-72px; margin-left:260px;">
		        <div class="input-group mb-3 form-floating">
		        <input type="number" class="form-control" id="costo_resultado" name="costo_resultado" onkeyup="retotal();" required><br><br>
		        <span class="input-group-text">✎</span>
                <label for="v_kilo" class="form-label">Valor Kilo:</label></div>
				</div>
                </div>

				<div class="col-lg-5" style="margin-top:-72px; margin-left:460px;">
		        <div class="input-group mb-3 form-floating">
		        <input type="number" class="form-control" id="cantidad_resultado" name="cantidad_resultado"  onkeyup="retotal();" required><br><br>
		        <span class="input-group-text">✎</span>
                <label for="cantidad" class="form-label">Kilos Netos:</label></div>
				</div>
                </div>
			</div>

	        <div class="form-group row">
			     <div class="col-lg-4" style="margin-left:-150px;">
			     <div class="input-group mb-3 form-floating">
		         <input type="text" class="form-control" id="costo_total_resultado" name="costo_total_resultado"  placeholder="0" readonly><br><br>
		         <span class="input-group-text">✎</span>
                 <label for="total" class="form-label">Total:</label></div>
				 </div>
                 </div>

				 <div class="col-lg-4" style="margin-top:-90px; margin-left:60px;">
			     <div class="input-group mb-3 form-floating">
	             <select class="form-control" name="tipo_pago" id="tipo_pago" required>
		         <option></option>
		         <option value="efectivo">Efectivo </option>
		         <option value="cafe">Cafe</option>
		         <option value="cacao">Cacao</option>
		         </select><br><br> 
				 <span class="input-group-text">✎</span>
                 <label for="tipo pago" class="form-label">Tipo Pago:</label></div>
				 </div>
                 </div>

				 <div class="col-lg-9" style="margin-top:-72px; margin-left:255px;">
			     <div class="input-group mb-3 form-floating">
	             <textarea class="form-control"	 name="observaciones_resultado" id="observaciones_resultado" rows="3" cols="90"></textarea><br><br>
				 <span class="input-group-text">✎</span>
				 <label for="observaciones" class="form-label">Observaciones:</label></div>
				 </div>
                 </div>
			</div>

			<div class="form-group row ">
			     <div class="offset-lg-2 col-lg-8">
			  	 <button class="btn btn-secondary btn-lg" onclick="resultado_secado();">Guardar</button>
			     </div> 
			     </div>
			     </form>
			  	';
	  }
	  }
	  }

	 if($accion == 7)
	 {
		$resultados = mysqli_query($conexion," SELECT * FROM resultadosecado WHERE codigo_resultado  = '$_POST[codigo_resultado]'");
		if($consulta = mysqli_fetch_array($resultados))
		{ echo "<script> alert ('este registro ya existe'); </script>"; } 
		else
		{ 
		  $resultados= mysqli_query($conexion,"update compra set kilos_netos=$_POST[cantidad_resultado], producto='$_POST[producto]', unidad='kilo' where marca='$_POST[codigo_resultado]'");	
		  mysqli_query($conexion,"insert into compra (municipio_compra, cedula, producto, marca, fecha_compra, kilos_netos, tipo_grano) values ('$_POST[municipio_resultado]',$_POST[cedula_resultado],  '$_POST[producto]', '$_POST[codigo_resultado]', '$fecha', $_POST[cantidad_resultado], '$_POST[tipograno_resultado]')"); 
		  mysqli_query($conexion,"insert into resultadosecado (codigo_resultado, fecha_resultado, cantidad_resultado, costo_resultado, costo_total_resultado, tipograno_resultado, observaciones_resultado, tipo_pago, nombre_resultado) values ('$_POST[codigo_resultado]','$fecha', $_POST[cantidad_resultado], $_POST[costo_resultado],$_POST[costo_total_resultado]*1000,'$_POST[tipograno_resultado]','$_POST[observaciones_resultado]', '$_POST[tipo_pago]','$_POST[nombre_resultado]')"); 
		  echo "<script> alert ('Registro Exitoso'); </script>";
		} 

	  }

	  if($accion == 16)
      { 
		$resultado = mysqli_query($conexion," SELECT * FROM asociados WHERE codigo_up= '$_POST[codigo_up]'");
		if($consulta = mysqli_fetch_array($resultado))
		{ echo "<script> alert ('este registro ya existe'); </script>"; } 
		else 
		{	   mysqli_query($conexion,"insert into asociados (fecha_registro, codigo_up, nombre_usuario, municipio, vereda, finca, cedula_usuario, contacto, tipo_vinculacion, estatus) values ('$fecha', '$_POST[codigo_up]', '$_POST[nombre_usuario]','$_POST[municipio]','$_POST[vereda]','$_POST[finca]',$_POST[cedula_usuario], $_POST[contacto],'$_POST[tipo_vinculacion]','estandar')");   
		       echo "<script>alert ('Registo Exitoso');</script>";
		}
        
       }

	   if($accion == 17)
	   { 
		
		 mysqli_query($conexion,"insert into producto (tipo, precio, descripcion, prima_producto, politica, nombre) values ('$_POST[tipo]', $_POST[precio], '$_POST[descripcion]', $_POST[prima_producto],'$_POST[politica]','$_POST[nombre]')");   
		}


	  if($accion ==18)
	  { 
		$mi_busqueda = $_POST['mi_busqueda'];
		
		$total_ahorrado=0; $total_retiro=0;
		$cesar = mysqli_query($conexion," SELECT * FROM ahorro WHERE cedula_ahorro LIKE '%$mi_busqueda%'or nombre_ahorro LIKE '%$mi_busqueda%'");

	  if($alberto = mysqli_fetch_array($cesar))
	  { 
		$resultados = mysqli_query($conexion," SELECT * FROM ahorro WHERE cedula_ahorro LIKE '%$mi_busqueda%'or nombre_ahorro LIKE '%$mi_busqueda%'");

		while($consulta = mysqli_fetch_array($resultados))
		{ $total_ahorrado = $total_ahorrado + $consulta['valor_ahorro']; $nombre=$consulta['nombre_ahorro']; $cedula=$consulta['cedula_ahorro'];}

        $resul = mysqli_query($conexion," SELECT * FROM retiro WHERE cedula_retiro LIKE '%$mi_busqueda%'or nombre_retiro LIKE '%$mi_busqueda%'");
		while($consul = mysqli_fetch_array($resul))
		{ $total_retiro = $total_retiro + $consul['valor_retiro'];}

          $neto_ahorro=$total_ahorrado - $total_retiro;		
		
			echo 
			'
			<h2 class="text-center">RETIRO</h2>
			<form>       

			<div class="form-group row" style="margin-top:45px">
			     <div class="col-lg-6">
			     <div class="input-group mb-3 form-floating">
			     <input type="text" class="form-control" id="nombre_retiro" name="nombre_retiro" value="'.$nombre.'" readonly ><br>
		         <span class="input-group-text">✎</span>
                 <label for="nombre" class="form-label">Nombre:</label></div>
				 </div>
		         </div>

				 <div class="col-lg-6" style="margin-left:335px; margin-top:-90px">
			     <div class="input-group mb-3 form-floating">
			     <input type="number" class="form-control" id="cedula_retiro" name="cedula_retiro" value="'.$cedula.'" readonly ><br>
		         <span class="input-group-text">✎</span>
                 <label for="cedula" class="form-label">Cedula:</label></div>
				 </div>
	             </div>
				</div>   

	        <div class="form-group row ">
                 <div class="col-lg-4" >
			     <div class="input-group mb-3 form-floating">
			     <input type="text" class="form-control" id="neto_ahorro" name="neto_ahorro" value="'.$neto_ahorro.'" readonly><br>
			     <span class="input-group-text">✎</span>
			     <label for="ahorro" class="form-label">Ahorro:</label></div>
			     </div>
			     </div>

	             <div class="col-lg-4" style=" margin-left:225px; margin-top:-92px">
	             <div class="input-group mb-3 form-floating" >
		         <input type="text" class="form-control" id="valor_retiro" name="valor_retiro" placeholder="0" onkeyup="reti();" required>
		         <div class="form-text" id="comentario"></div>
				 <span class="input-group-text">✎</span>
                 <label for="retiro" class="form-label">Valor a Retirar:</label></div>
                 </div>   
		         </div>
	             </div>


				 <div class="col-lg-4" style="margin-left:450px; margin-top:-72px">
	             <div class="input-group mb-3 form-floating">
		         <input type="number" class="form-control" id="saldo_disponible" name="saldo_disponible" value="'.$neto_ahorro.'" readonly><br><br>
		         <span class="input-group-text">✎</span>
                 <label for="saldo" class="form-label">Saldo Disponible:</label></div>
				 </div>
                 </div>

	
			 
			<div class="form-group row ">
			     <div class="offset-lg-4 col-lg-8">
			  	 <button class="btn btn-secondary btn-lg" onclick="retiro();" id="boton">Guardar</button>
			     </div> 
			     </div>
			     </form>
		    
           ';
		}
		if($total_ahorrado==0 and $total_retiro==0)
		{ echo "<img src='NO.jpg'>"; }		
	   }
	    
	   if($accion == 19)
	   { 
		mysqli_query($conexion,"insert into retiro (cedula_retiro, fecha_retiro, hora_retiro, valor_retiro, nombre_retiro) values ($_POST[cedula_retiro],'$fecha','$hora',$_POST[valor_retiro],'$_POST[nombre_retiro]')");   
	  }

		if($accion == 20)
		{  			
		   mysqli_query($conexion,"insert into controlsecadora (fecha_secadora, hora_secadora) values ('$fecha','$hora')");   		   
		}		

	  if($accion == 22)
	  {  
		$resul = mysqli_query($conexion,"select *from asociados where cedula_usuario = $_POST[cedula_turno]");
		if($consul = mysqli_fetch_array($resul))
		{ 
			$resultado = mysqli_query($conexion," SELECT  *FROM turno");
			$a=1;
		   while($consulta = mysqli_fetch_array($resultado))
		   {  
			if ($consulta['fecha_turno']==$fecha and $consulta['municipio_turno']==$_SESSION['municipio'])
			{  $a=$a+1; }
		   }
		   $_SESSION['cedula']=$_POST['cedula_turno'];
		   $_SESSION['nombre']=$consul['nombre_usuario'];
		   $_SESSION['turno']=$a;
		   $_SESSION['fecha']=$fecha;
		   $_SESSION['hora']=$hora;
		   
		   	mysqli_query($conexion,"insert into turno (cedula_turno, fecha_turno, hora_turno, municipio_turno,turno) values ($_POST[cedula_turno],'$fecha','$hora','$_SESSION[municipio]',$a)");   

			   ?>
			   header("Location: TICKE.PHP");
               <Script> window.location.replace("TICKE.PHP");</Script> 
               <?php	
			   echo "<script> window.location.replace('TICKE.PHP'); </script>";	 
			   header("Location: TICKE.PHP");
	    }
	    else {
			    echo "<script>alert('EL USUARIO NO ESTA ESTA REGISTRADO')</script>";
				echo '<img src="no.jpg">'; 
		     }
			
	}
	   if($accion == 23)
	   {  $resultado = mysqli_query($conexion," SELECT  *FROM usuario where cedula=$_POST[cedula]");
		 
          if ($consulta = mysqli_fetch_array($resultado))
			{ echo "<script> error();</script>";}
			else 
			{
			  mysqli_query($conexion,"insert into usuario (nombres, correo, telefono, municipio, cedula, usuario, clave) values ('$_POST[nombres]','$_POST[correo]',$_POST[telefono],'$_POST[municipio]',$_POST[cedula],'$_POST[usuario]','$_POST[clave]')");  
			  echo "<script> alert('Este Usuario ya fue Registrado');</script>";
			}
		
		}
     
     ?>
</body>
</html>