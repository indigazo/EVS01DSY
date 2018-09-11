<!--SESSION CHECKER-->
<?php include_once('back_to_login.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro completo!</title>
</head>

<body style="background-color: rgb(92, 159, 137);" >
    <!-- COSAS QUE INCLUI -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/clases.css">

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
        <div class="container-fluid col-sm-6 border border-white rounded"  style="padding-bottom:20px;">
            <h1 class="h1 text-white">TODO LISTO!</h1>
            <p class="lead text-white text-center">Click en el boton para volver al menu principal</p>
            <form action="index.php">
                <button type="submit" class="btn btn-primary border">Volver al menu</button>
            </form>
        </div>
    </center>

</body>

</html>