<!DOCTYPE html>
<html lang="en">
<head>
  <title>Iniciar sesión</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
     body {
            background-image: url("img/06.jpg");
            background-color: #cccccc;

        }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="">

<div class="container">
  <h2>Iniciar sesión</h2>
  <form class="form-horizontal" action="php/login_usuario_be.php" method="POST"> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email/Correo electrónico:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Introduce Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Introduce contraseña" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Recuérdame</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Entrar</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
