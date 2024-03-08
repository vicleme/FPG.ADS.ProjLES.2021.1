<?php
    session_start(); 
    if ( (!empty($_SESSION['motorista'])) ){
        $login = $_SESSION['motorista'];}
    if ( (!empty($_SESSION['passageiro'])) ){
        $login = $_SESSION['passageiro'];}
    unset($_SESSION['login']);
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>GoCare</title>
</head>

<body>

    <header>

        <!-- Barra de Navegação -->
        <?php
        include 'navbar.php';
        ?>
        
    </header>

    <!-- Apresentação -->
    <section id="download">

        <!--Cabeçalho-->
        <div id="title" style="color:white;text-align:center;position: absolute; left:18.5vw;top: 1.2vw;">
            <h1 style="font-size: 4.7vw;line-height:5.7vw"><b>Passageiro</b></h1>
        </div>
        <div id="description" style="color:white;text-align:center;position: absolute; left:23vw;top: 9vw;">
            <p style="font-size: 1.7vw;line-height:1.7vw">Venha viajar conosco !!
            </p>
        </div>

        
</section>
    <section id="presentation2">
        <img style="width: 100%;" src="img/circle1.png">
    </section>

    <!-- Download -->
    <section id="download">
        <img style="width: 100%;" src="img/circle2.png">

        <!--Cabeçalho-->
        <div id="title" style="color:rgb(13, 13, 49);text-align:center;position: absolute; left:44.5vw;top: 5.5vw;">
            <h1 style="font-size: 4.7vw;line-height:5.7vw"><b>Baixe o app da GoCare</b></h1>
        </div>
        <div id="description" style="color:rgb(13, 13, 49);text-align:left;position: absolute; left:48vw;top: 15vw;">
            <p style="font-size: 1.7vw">Peça uma viagem de maneira fácil, rápida e simples.
            </p>
        </div>

        <!-- Ícone mobile e QR Code -->
        <div id="mobile" style="text-align:left;position: absolute; left:5vw;top: 10vw;">
            <img src="img/gocaremobile.png" style="width: 32vw;" alt="Ícone mobile do GoCare">
        </div>
        <div id="qrcode" style="text-align:left;position: absolute; left:53vw;top: 21vw;">
            <img src="img/qrcode.png" style="width: 16vw;" alt="QRCode para o download do aplicativo">
        </div>

        <!-- Botões -->
        <div id="buttondownload1" style="color:white;text-align:center;position: absolute; left:71vw;top: 24.2vw;width:15vw">
            <button style="font-size: 1.2vw;" class="btn btn-info btn-block downloadapp">
                <i class="fab fa-apple"> &nbsp;</i>
                Apple Store
            </button>
        </div>
        <div id="buttondownload2" style="color:white;text-align:center;position: absolute; left:71vw;top: 29.2vw;width:15vw">
            <button style="font-size: 1.2vw;" class="btn btn-info btn-block downloadapp">
                <i class="fab fa-google-play">&nbsp;</i>
                Play Store
            </button>
        </div>

    </section>

    <!-- Parceiros -->
    <section id="partners">
        <img style="width: 100%;" src="img/circle3.png">

        <div id="title" style="background-color:white; color:rgb(13, 13, 49);text-align:center;position: absolute; left:20vw;top: 5.5vw;">
            <h1 style="font-size: 4.7vw;line-height:5.7vw"><b>&nbsp;Parceiros&nbsp;</b></h1>
        </div>

        <div>
            <div class="container-fluid" style="position: relative; left:0vw;top: -4vw;padding-left:0;padding-right:2.5;width: 70%;">
               <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <div class="card-group">
                   <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                      <label class="btn btn-outline-primary" for="btnradio1">Modelo 1</label>
                      
                      <div class="card">
                        <img class="card-img-top" src="img/parceiro1.png" alt="Monalisa">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center">Lar das Moças Cegas</h5>
                            <p class="card-text">
                                <p style="text-align:center">
                                    <a class="btn btn-info" style="color: white;">Conheça</a>
                                </p>
                            </p>
                        </div>
                    </div>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Modelo 2</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio3">Modelo 3</label>
</div>
            </div>
        </div>
    </section>

    <footer style="background-color:#1e47a8;">

    <?php
        include 'footer.php';
    ?>

    </footer>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>