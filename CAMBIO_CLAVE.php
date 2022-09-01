<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script src="sweetalert2.all.min.js"></script>
          <script src="sweetalert2.min.js"></script>
          <link rel="stylesheet" href="sweetalert2.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
          <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						CLAVE / USUARIO
					</span>
				</div>

				<form class="login100-form validate-form" action="CAMBIO_CLAVE2.PHP" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="cedula is required">
						<span class="label-input100">Cedula</span>
						<input class="input100" type="text" name="cedula" id="cedula" placeholder="Ingrese Cedula">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="usuario is required">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="usuario" id="usuario" placeholder="Ingrese Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "clave is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="clave" id="clave" placeholder="Ingrese clave">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30" style="color:#E81E0A">
                    <?php
                    if (isset($_REQUEST['error']))
                    { echo "Usuario No Encontrado"; }
                    ?>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Cambiar
						</button>
					</div>
				</form>
				<?php
                    if (isset($_REQUEST['bueno']))
                    {
					?>
					<script>
                        Swal.fire({
						position: 'top-end',
						icon: 'success',
						title: 'Los Cambios Fueron Realizados',
						showConfirmButton: false,
						timer: 3000
						})  
                                            
					</script>
				   <?php }?>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>