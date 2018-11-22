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
    <script src="../JS/JQUERY/lettersonly.js"></script>
    <script src="../JS/JQUERY/rutOnly.js"></script>
    <script src="../JS/JQUERY/dateIta.js"></script>
    <script>
        $(document).ready(function(event){
                $("#cboRegion").change(function(){
                    var id=$("#cboRegion").val();
                    $.ajax({
                        url: "../CONTROLADOR/llenar_combo.php",
                        type: 'POST',
                        data: {region: id},
                        success: function(data){
                            $('#cboCiudad').html(data);
                        }
                    });
                });
            });
        $(document).ready(function (event) {
            $("#Registro").validate({
                rules: 
                {
                    txtMail: "required",
                    txtRut: "required",
                    txtName: "required",
                    dtDate: "required",

                    //Reglas para el campo e-mail
                    txtMail: 
                    {
                        required: true,
                        email: true 
                    },

                    //Reglas para el campo rut
                    txtRut: 
                    {
                        required: true, 
                        rutOnly: true,
                        minlength: 9,
                        maxlength: 10
                    },

                    //Reglas para el campo name
                    txtName: 
                    {
                        required: true,
                        lettersonly: true
                    },         
                    
                    //Caracteres del numero de telefono
                    numPhone:
                    {
                        maxlength: 8,
                        minlength: 8
                    }
                },
                messages: 
                {
                    txtMail: 
                    {
                        required: "Ingrese un correo",
                        email: "Ingrese un correo valido"
                    },
                    txtRut: 
                    {
                        required: "Ingrese un rut",
                        minlength: "El rut debe tener al menos 8 caracteres",
                        maxlength: "El rut debe tener un máximo de 9 caracteres"
                    },
                    txtName: 
                    {
                        required: "Ingrese un nombre",
                        lettersonly: "El nombre solo puede tener letras"
                    },
                    dtDate: 
                    {
                        required: "Seleccione una fecha",
                    },
                    numPhone:
                    {
                        maxlength: "El telefono solo puede tener 8 numeros",
                        minlength: "El telefono solo puede tener 8 numeros"
                    }
                },
                submitHandler: function (form) {
                    $.ajax({
                        url: 'valida_registro.php',
                        type: 'post',
                        data: $("#Registro").serialize(),
                        success: function (data) {
                            //$("#txtMail").val(data);
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
    <?php
        $cone = mysqli_connect("localhost", "root", "", "bd_mis_perris");
        $reg = mysqli_query($cone, "select * from regiones");
        $reg_provi = mysqli_query($cone, "select * from provincias");
    ?>
    <!--BARRA SUPERIOR -->
    <div class="container-fluid" style="background-color: rgb(92, 159, 137);">
        <h5 class="text-white lead"><?php echo 'Bienvenido! '.$usuario; ?></h5>
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
                        <input type="text" maxlength="10" name="txtRut" class="form-control" id="txtRut" placeholder="Rut">
                        <small id="rutHelp" class="form-text" style="color:lightgray;">Ingrese rut sin puntos y con guion.</small>
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
                        <input type="number" name="numPhone" class="form-control" id="numPhone" placeholder="+569" disabled>
                    </div>
                    <div class="form-group text-left">
                        <input type="number" name="numPhone" class="form-control" id="numPhone" placeholder="Ingrese su numero">
                        <small id="phoneHelp" class="form-text" style="color:lightgray;">Solo numeros.</small>
                    </div>

                    <!--REGIÓN (Requerido)-->
                    <div class="form-group text-left">
                        <label for="cboRegion" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Región</label>
                        <select name="cboRegion" class="form-control" id="cboRegion">
                            <?php
                                while($row = mysqli_fetch_array($reg))
                                {
                                    echo '<option value='.$row[0].'>'.$row[1].' '.$row[2].'</option>';
                                }
                            ?>
                        </select>
                        <small id="regionHelp" class="form-text" style="color:lightgray;">Seleccione su región.</small>
                    </div>

                    <!--CIUDAD (Requerido)-->
                    <div class="form-group text-left">
                        <label for="cboCiudad" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Ciudad</label>
                        <select name="cboCiudad" class="form-control" id="cboCiudad">

                        </select>
                        <small id="cityHelp" class="form-text" style="color:lightgray;">Seleccione ciudad.</small>
                    </div>

                    <!--TIPO DE VIVIENDA (Requerido)-->
                    <div class="form-group text-left">
                        <label for="cboHouse" style="text-align: left; color:white; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Tipo
                            de vivienda</label>
                        <select name="cboHouse" class="form-control" id="cboHouse">
                            <option value="patio_grande">Casa con patio grande</option>
                            <option value="patio_pequeno">Casa con patio pequeño</option>
                            <option value="patio_no_patio">Casa sin patio</option>
                            <option value="departamento">Departamento</option>
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