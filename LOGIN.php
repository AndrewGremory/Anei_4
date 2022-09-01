<!doctype html>
<html>
<head>
  <title>Login</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

<style>

</style>
</head>
<body>
    <div class="container">    
        <div class="container" style=" margin-top:90px">

            <form action="LOGIN2.php" method="post">
                    <?php
                    if (isset($_REQUEST['error']))
                    { echo "USUARIO NO ENCONTRADO"; }
                    ?>
              <div class="form-group row">
                   <div class="col-lg-4"  >
	               <div class="input-group mb-3 form-floating">
                   <input type="text" class="form-control" name="usuario" id="usuario">
                   <span class="input-group-text">✎</span>
                   <label for="usuario" class="form-label">Usuario:</label>
                   </div>
                   </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-4"  >
	              <div class="input-group mb-3 form-floating">
                  <input type="password" class="form-control" name="clave" id="clave">
                  <span class="input-group-text">✎</span>
                  <label for="contraseña" class="form-label">Contraseña:</label>
                  </div>
                  </div>
                </div>

                <div class="form-group row">
                <div class="offset-lg-3 col-lg-9" style="margin-top:-12px; margin-left:10px;">
                <button type="submit" class="btn btn-secondary">Entrar</button>  
                <a href="FCORREO.php" style="margin-top:-10px; margin-left:15px;">recuperar contraseña</a>
                
                </div> 
              </div>
            </form>
          
        </div>       
    </div>
  </body>
</html>