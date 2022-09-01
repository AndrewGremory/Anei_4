<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div >
			<nav id="sidebar">
        
				<div class="p-4 pt-5">
          <a style="margin-left: 75px;" href = ""> <img  src = "anei.png "></a >
           
		  		<a href="#" class="img rounded-circle logo mb-5"  style="background-image: url(sol.png);" ></a>
          
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
              <div style="margin-top: 3px;"> <a href="#formulariosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">REGISTROS</a></div>
	            <ul class="collapse list-unstyled" id="formulariosSubmenu">
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="ASOCIADOS.php" target="cesar">Asociados</a>
                </li>
                <?php } ?>
                <?php
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "recibo") 
                {?>
                <li>
                    <a href="COMPRA.PHP" target="cesar">Recibo</a>
                </li>
                <?php } ?>
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                    <a href="SECADO.php" target="cesar">Secado</a>
                </li>
                <?php } ?>
                
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="RESULTADO_SECADO.php" target="cesar">Resultado Secado</a>
                </li>
                <?php } ?>
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                    <a href="ANALISIS_FISICO.php" target="cesar">Analisis Fisico</a>
                </li>
                <?php } ?>
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="ANALISIS_SENSORIAL.php" target="cesar">Analisis Sensorial</a>
                </li>
                <?php } ?>
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                 <a href="LIQUIDACION.php" target="cesar">Liquidacion</a>
                </li>
                <?php } ?>
                <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
               <li>
                <a href="RETIRO.php" target="cesar">Retirar</a>
               </li>
               <?php } ?>
               <?php
                if ($_SESSION['rol'] == "administrador") 
                {?>
               <li>
                <a href="PRODUCTOS.php" target="cesar">Productos</a>
               </li>
               <?php } ?>
               <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
               <li>
                <a href="TURNO.php" target="cesar">Turnos</a>
               </li>
               <?php } ?>
	            </ul>
	          </li>
	          <li>
              <a href="#consultasSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">CONSULTAS</a>
              <ul class="collapse list-unstyled" id="consultasSubmenu">
              <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                    <a href="CONSULTA_ASOCIADOS.php" target="cesar">Asociados</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                    <a href="CONSULTA_PRODUCTO.php" target="cesar">Productos</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                    <a href="CONSULTA_LIQUIDACION.php" target="cesar">Liquidacion</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "recibo") 
                {?>
                <li>
                  <a href="CONSULTA_COMPRA.php" target="cesar">Registro</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_SECADO.php" target="cesar">Secado</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_RESULTADOSECADO.php" target="cesar">Resultado secado</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_ANALISISFISICO.php" target="cesar">Analisis Fisico</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_ANALISISSENSORIAL.php" target="cesar">Analisis Sensorial</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_RESULTADOSECADO.php" target="cesar">Resultado secado</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_CUPO.php" target="cesar">Cupos</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_AHORRO.php" target="cesar">Ahorros</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_RETIRO.php" target="cesar">Retiros</a>
                </li>
                <?php } ?>
                <?php
               if ($_SESSION['rol'] == "administrador") 
                {?>
                <li>
                  <a href="CONSULTA_AHORETI.php" target="cesar">Movimientos del Ahorro</a>
                </li>
                <?php } ?>
              </ul>
	          </li>
            <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">LOGIN</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="LOGIN_MEJORADO.php" target="_blank">Iniciar Sesion</a>
                </li>
                <li>
                    <a href="LOGIN_MEJORADO.php" target="_blank">Finalizar Sesion</a>
                </li>
              </ul>
            </li>

	        </ul>
         

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.anei.org.co/" target="_blank">ANEI</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

       
        </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>