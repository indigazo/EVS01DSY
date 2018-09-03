<!--SI NO ES EL USUARIO, LO ENVIA ATRAS!-->
<?php
session_start();
if (isset($_SESSION["user"])) {
    $usuario=$_SESSION["user"];
}else{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Mis Perris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body style="background-color:white;">

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
        <?php echo 'Bienvenido! '.$usuario; ?>
        <center>
            <img style="position: relative; padding-top: 10px; padding-bottom: 10px" src="../IMGS/logo.png">
        </center>
    </div>

    <!--MENU-->
    <?php include_once('menu.php') ?>

    <!--CARRUSEL-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" style="height:432px; width:600px" src="../IMGS/adoptados/Apolo.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="padding-right: 100px;">
                    <h1 class="display-4" style="text-align: left; color:black">Apolo</h1>
                    <p class="lead" style="text-align: left; color:white; font-size: 30px; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">
                        <i>"Cuando Apolo llegó a nuestra vida, todo cambió"</i>
                    </p>

                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" style="height:432px; width:600px" src="../IMGS/adoptados/Duque.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="padding-left: 100px; padding-bottom: 260px;">
                    <h1 class="display-4" style="text-align: right; color:black">Duque</h1>
                    <p class="lead" style="text-align: right; color:white; font-size: 30px; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">
                        <i>"Duque es más que mi amigo, es mi familia"</i>
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" style="height:432px; width:600px" src="../IMGS/adoptados/Tom.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="padding-bottom: 90px;">
                    <h1 class="display-4" style="text-align: left; color:black">Tom</h1>
                    <p class="lead" style="text-align: left; color:white; font-size: 30px; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">
                        <i>"Mi hija y Tom, son amigos inseparables"</i>
                    </p>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--REDES SOCIALES-->
    <div class="container-fluid" style="background-color: rgb(92, 159, 137); padding-top:6px; padding-bottom:6px;">
        <center>
            <a href="https://www.facebook.com/" target="_blank"><img class="img-fluid rounded-circle" style="position: relative; padding-top: 3px; padding-bottom: 3px; width: 40px; height: 40px;"
                    src="../IMGS/Facebook-Icon.png"></a>
            <a href="https://www.plus.google.com/people.com/" target="_blank"><img class="img-fluid rounded-circle" style="position: relative; padding-top: 3px; padding-bottom: 3px; width: 40px; height: 40px;"
                    src="../IMGS/Google-Plus-Icon.png"></a>
            <a href="https://www.instagram.com/" target="_blank"><img class="img-fluid rounded-circle" style="position: relative; padding-top: 3px; padding-bottom: 3px; width: 40px; height: 40px;"
                    src="../IMGS/Instagram-Icon.png"></a>
            <a href="https://www.tixio.io/" target="_blank"><img class="img-fluid rounded-circle" style="position: relative; padding-top: 3px; padding-bottom: 3px; width: 40px; height: 40px;"
                    src="../IMGS/RSS-Icon.png"></a>
        </center>
    </div>
  
    <!--PAGE BODY-->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1 class="card-title" style="text-align: right">RESCATE</h1>
                <h3 class="card-title" style="text-align: right; position: relative; top: -15px;">ETAPA UNO</h3>
                <p class="lead" style="text-align: right; position: relative; top: -25px; padding-right: 3px;">Rescatamos perros en situacion de peligro y/o abandono. Los rehabilitamos y los preparamos para buscarles un hogar</p>
                <img class="rounded float-right" style="position: relative; padding-left: 110px" src="../IMGS/rescate.jpg" alt="">
            </div>
            <div class="col-sm">
                <img class="rounded float-left border border-dark" style="width: 350px; height: 196px; position: relative; top: 20px;" src="../IMGS/crowfunding.jpg" alt="">
                <h1 class="card-title" style="text-align: left;position: relative; padding-top: 230px;">CROWFUNDING</h2>
                <h3 class="card-title;" style="text-align: left; position: relative; top: -10px;">FINANCIAMIENTO</h3>
                <p class="lead" style="text-align: left; position: relative; top: -15px">Sigue nuestras redes sociales para informarte acerca de las diversas campañas y actividades que realizamos para obtener financiamiento para seguir ayudando</p>
            </div>
        </div>
    </div>


    <!--BOTTOM TEXT-->
    <div class="container-fluid" style="padding-top: 32px">
        <div class="jumbotron border border-secondary">
            <h2>Apoyanos!</h2>
            <p class="lead" style="font-size: 20px; font-weight: bold">El apoyo de la gente es lo más escencial que tenemos
                para surgir, Muchas gracias por sus constantes aportes!</p>
            <button type="button" class="btn btn-lg btn-outline-dark">Campañas</button>
        </div>
    </div>

    <!--LIGHT GALLERY-->



</body>

</html>