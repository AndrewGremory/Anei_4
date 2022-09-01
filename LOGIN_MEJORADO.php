<!doctype html>
<html>
<head>
  <title>Login</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  
  <link rel="stylesheet" href="LOGIN_MEJORADO.css">
<style>

</style>
</head>
<body>
<h1 style="margin-left:300px">CENTRO DE ACOPIO ANEI</h1>
		<hr>
	<div class="login" style="margin-top:120px">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
            <form action="LOGIN2.php" method="post">
            <div style="color:#E81E0A">
                <?php
                 if (isset($_REQUEST['error']))
                 { echo "Usuario No Encontrado"; }
                ?>
                </div>
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" name="usuario" id="usuario">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" name="clave" id="clave">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<button type="submit" class="btn btn-secondary">Entrar</button>  
				<a class="login-link" href="CAMBIO_CLAVE.PHP">Cambiar Contraseña?</a>
			</div>
         </form>
		</div>
	</div>
</body>
</html>