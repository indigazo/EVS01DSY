<!--SESSION CHECKER-->
<?php include_once('back_to_login.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuario - Mis perris</title>
</head>

<body style="background-image: linear-gradient(rgb(100, 159, 137),rgb(39, 58, 41))">
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
            $("#Registro").validate({
                rules: {
                    txtMail: "required",
                    txtRut: "required",
                    txtName: "required",
                    dtDate: "required",
                },
                messages: {
                    txtMail: {
                        required: "Ingrese un correo"
                    },
                    txtRut: {
                        required: "Ingrese un rut"
                    },
                    txtName: {
                        required: "Ingrese un nombre"
                    },
                    dtDate: {
                        required: "Seleccione una fecha"
                    }
                },
                submitHandler: function (form) {
                    $.ajax({
                        url: 'valida_registro.php',
                        type: 'post',
                        data: $("#Registro").serialize(),
                        success: function (data) {
                            if (data == 1) {
                                alert('Registro completado! :)');
                                window.location = 'succes.php';
                            } else {
                                alert('No se pudo ingresar! :(');
                                window.location = 'contacto.php';
                            }
                        }
                    });
                }
            });
        });
    </script>

    <!--BARRA SUPERIOR -->
    <div class="container-fluid" style="background-color: rgb(92, 159, 137);">
        <?php echo 'Bienvenido! '.$usuario; ?>
        <center>
            <img style="position: relative; padding-top: 10px; padding-bottom: 10px" src="../IMGS/logo.png">
        </center>
    </div>

    <!--NAV BAR -->
    <?php include_once('menu.php'); ?>

    <!--FORMULARIO-->
    <center style="padding-top: 100px; padding-bottom: 100px">
        <div class="container col-sm-6 border border-white rounded">
            <h2 class="text-center h1" style="color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black; padding-top:10px; padding-bottom: 10px">
                Registro de usuario
            </h2>
            <div class="container col-sm-6 text-center">
                <form id="Registro" method="post" action="valida_registro.php">

                    <!--CORREO (Requerido)-->
                    <div class="form-group text-left">
                        <label for="txtMail" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Correo
                            electronico
                        </label>
                        <input type="text" name="txtMail" class="form-control" id="txtMail" aria-describedby="emailHelp" placeholder="Correo">
                        <small id="emailHelp" class="form-text" style="color:lightgray;">Ingrese un correo valido.</small>
                    </div>

                    <!--RUN (Requerido)-->
                    <div class="form-group text-left">
                        <label for="txtRut" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Run</label>
                        <input type="text" name="txtRut" class="form-control" id="txtRut" placeholder="Rut">
                        <small id="rutHelp" class="form-text" style="color:lightgray;">Ingrese rut sin puntos ni guion.</small>
                    </div>

                    <!--NOMBRE COMPLETO (Requerido)-->
                    <div class="form-group text-left">
                        <label for="txtName" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Nombre
                            completo
                        </label>
                        <input type="text" name="txtName" class="form-control" id="txtName" placeholder="Nombre completo">
                        <small id="nameHelp" class="form-text" style="color:lightgray;">Ingrese su nombre y apellido.</small>
                    </div>

                    <!--FECHA DE NACIMIENTO (Requerido)-->
                    <div class="form-group text-left">
                        <label for="dtDate" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Fecha
                            de nacimiento</label>
                        <input type="date" name="dtDate" class="form-control" id="dtDate">
                        <small id="dateHelp" class="form-text" style="color:lightgray;">Ingrese su fecha de nacimiento.</small>
                    </div>

                    <!--TELEFONO DE CONTACTO-->
                    <div class="form-group text-left">
                        <label for="numPhone" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Telefono
                            de contacto</label>
                        <input type="number" name="numPhone" class="form-control" id="numPhone" placeholder="Ingrese su numero sin +569">
                        <small id="phoneHelp" class="form-text" style="color:lightgray;">Solo numeros.</small>
                    </div>

                    <!--REGIÓN (Requerido)-->
                    <div class="form-group text-left">
                        <label for="cboRegion" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Región</label>
                        <input type="number" name="cboRegion" class="form-control" id="cboRegion">
                        <small id="regionHelp" class="form-text" style="color:lightgray;">Seleccione su región.</small>
                    </div>

                    <!--CIUDAD (Requerido)-->
                    <div class="form-group text-left">
                        <label for="cboCiudad" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Ciudad</label>
                        <input type="number" name="cboCiudad" class="form-control" id="cboCiudad">
                        <small id="cityHelp" class="form-text" style="color:lightgray;">Seleccione ciudad.</small>
                    </div>

                    <!--TIPO DE VIVIENDA (Requerido)-->
                    <div class="form-group text-left">
                        <label for="cboHouse" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Tipo
                            de vivienda</label>
                        <select name="cboHouse" class="form-control" id="cboHouse">
                            <option value="pat_big">Casa con patio grande</option>
                            <option value="pat_small">Casa con patio pequeño</option>
                            <option value="pat_no">Casa sin patio</option>
                            <option value="dept">Departamento</option>
                        </select>
                        <small id="houseHelp" class="form-text" style="color:lightgray;">Seleccione su tipo de vivienda.</small>
                    </div>

                    <!--BOTÓN-->
                    <button type="submit" class="btn btn-primary border border-white">Registrar usuario nuevo</button>

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