<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Mis Perris</title>
</head>

<body class="bg">
    <!-- COSAS QUE INCLUI -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/clases.css">
    <script src="../JS/JQUERY/jquery.js"></script>
    <script src="../JS/JQUERY/jquery.validate.js"></script>
    <script>
        $(document).ready(function (event) {
            $("#Ingreso").validate({
                rules: {
                    txtUser: "required",
                    txtPass: "required"
                },
                messages: {
                    txtUser: {
                        required: "Ingrese un usuario"
                    },
                    txtPass: {
                        required: "Ingrese un password"
                    }
                },
                submitHandler: function (form) {
                    $.ajax({
                        url: 'validar_usuario.php',
                        type: 'post',
                        data: $("#Ingreso").serialize(),
                        success: function (data) {
                            if (data == 1) {
                                window.location = 'index.php';
                            } else {
                                alert('no existe');
                                window.location = 'login.php';
                            }

                        }
                    });
                }
            });
        });
    </script>

    <!--LOGIN BOX-->
    <center style="padding-top: 100px;">
        <div class="container col-sm-6 border border-white rounded">
            <h2 class="text-center h1" style="color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black; padding-top:10px; padding-bottom: 10px">
                Login de usuario
            </h2>
            <div class="container col-sm-6 text-center">
                <form id="Ingreso" method="post" action="valida_usuario.php">
                    <div class="form-group text-left">
                        <label for="txtUser" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;" >Usuario</label>
                        <input type="text" name="txtUser" class="form-control" id="txtUser" aria-describedby="emailHelp" placeholder="Usuario">
                        <small id="emailHelp" class="form-text" style="color:lightgray;">Solo usuarios administradores pueden entrar</small>
                    </div>
                    <div class="form-group text-left">
                        <label for="txtPass" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Contraseña</label>
                        <input type="password" name="txtPass" class="form-control" id="txtPass" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary border border-white">Ingresar</button>
                </form>
            </div>
            <div class="container col-sm-6 text-center">
                <h6 class="lead" style="color:white; padding-top: 10px;">
                    Reboot software 2018
                </h6>
            </div>
        </div>
    </center>

</body>

</html>