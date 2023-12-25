<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <!-- Custom CSS -->

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
    <style>
        .form-group {
            margin-bottom: 5px;

        }

        label {
            color: darkred;

        }

        body {
            margin: 20px;

        }
    </style>
</head>

<body>
    
    <form id="register-form" action="php/registro_usuario_be.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="Nombre" aria-describedby="emailHelp"
                placeholder="Introduce tu nombre">

        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="Apellido" aria-describedby="emailHelp"
                placeholder="Introduce tu apellido">

        </div>
        <div class="form-group">
            <label for="correo">*Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="Correo_electronico" aria-describedby="emailHelp"
                placeholder="Introduce tu correo/email" required>
            <small id="emailHelp" class="form-text text-muted">No compartiremos tu correo con nadie</small>

        </div>
        <div class="form-group">
            <label for="correo">*Nombre Usuario</label>
            <input type="text" class="form-control" id="n_usuario" name="Nombre_Usuario" aria-describedby="userHelp"
                placeholder="Introduce tu nombre de usuario" required>
        </div>
        <div class="form-group">
            <label for="pass">*Contraseña</label>
            <input type="password" class="form-control" id="pass" name="Pass" placeholder="Pass" required>
        </div>
        <div class="form-group">
            <label for="verificaPass">*Verifica tu contraseña</label>
            <input type="password" class="form-control" id="verificaPass" placeholder="Password" required>
            <small id="passwordMismatch" class="form-text text-danger" style="display: none;">Las contraseñas no coinciden.</small>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">*Verificación de que no eres un robot</label>

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#register-form').submit(function(event) {
                var password = $('#pass').val();
                var confirmPassword = $('#verificaPass').val();

                if (password !== confirmPassword) {
                    event.preventDefault();
                    $('#passwordMismatch').text('Las contraseñas no coinciden.').show();
                }
            });
        });
    </script>
</body>

</html>
