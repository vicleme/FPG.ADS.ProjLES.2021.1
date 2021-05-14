<?php

    session_start(); 
    $login = $_SESSION[''];
       if (!empty( $_SESSION['motorista'])){
             echo "Usu&aacute;rio Logado :" . $login;
       }      
       else{
            echo "Usuario n&atilde;o logado";
            header("Location: loginmotorista.php");   
      }
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
    <link href="css/vertical-navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>GoCare - Área do Usuário</title>
</head>

<body style="background-color:rgb(87, 154, 210)">

    <!-- Barra de navegação vertical -->
    <div class="vertical-nav" id="sidebar" style="background-color: rgb(26, 57, 129);">
        <div class="py-4 px-3 mb-4" style="background-color: rgb(30, 44, 78);">
            <div class="media d-flex align-items-center"><img src="img/motorista.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                <div class="media-body">
                    <h3 class="m-0" style="color:white">Roberto</h3>
                    <p class="font-weight-light mb-0" style="color: rgb(153, 192, 192);">Motorista</p>
                </div>
            </div>
        </div>

        <!-- Conta -->
        <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0" style="color: rgb(175, 245, 245);">Conta</p>
        <ul class="nav flex-column mb-0" style="color: white">
            <li class="nav-item">
                <a href="#" class="nav-link" style=" color: white; background-color: rgb(87, 154, 210);">
                    <i class='fas fa-address-card' style='margin-right:15px'></i>Editar perfil
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onMouseOver="rgb(87, 154, 210)" style="color: white;">
                    <i class='fas fa-key' style='margin-right:15px;'></i>Alterar senha
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: white;">
                    <i class='fas fa-bell' style='margin-right:15px'></i>Notificações
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: white;">
                    <i class='fas fa-user-clock' style='margin-right:15px'></i>Atividade da conta
                </a>
            </li>
        </ul>
        <br>

        <!-- Rede -->
        <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0" style="color: rgb(175, 245, 245);">Rede</p>
        <ul class="nav flex-column mb-0" style="color: white">
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: white;">
                    <i class='fas fa-car' style='margin-right:15px'></i>Corridas
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: white;">
                    <i class='fas fa-user-circle' style='margin-right:15px'></i>Contatos
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: white;">
                    <i class='fas fa-sms' style='margin-right:15px'></i>Conversas
                </a>
            </li>
        </ul>
    </div>

    <!-- Conteúdo da página -->
    <div class="page-content" id="content">
        <header>

            <!-- Barra de Navegação -->
            <section id="navbar">
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1e47a8">

                    <!-- Marca -->
                    <a class="navbar-brand" href="index.html">
                        <img src="img/brand-navbar.png" alt="Logotipo da GoCare">
                    </a>

                    <!-- Menu hambúrguer da barra de navegação horizontal -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Guias -->
                    <div class="collapse navbar-collapse" id="navbarNav">

                        <!-- Informação -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Motoristas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Passageiros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Peça sua viagem</a>
                            </li>
                        </ul>

                        <!-- Acesso -->
                        <ul class="navbar-nav">
                            <li class="nav-item">

                                <!-- Entrar -->
                                <form action="acesso.html" class="form-inline my-2 my-lg-0">
                                    <div style="padding-right:7px">
                                        <button type="submit" class="btn btn-info btn-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                            fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                                        </svg>
                                        &nbspEntrar
                                        </button>
                                    </div>
                                </form>

                            </li>

                            <!-- Cadastrar-se -->
                            <li class="nav-item">
                                <a href="acesso.html?js:openOptionCadastrar()" class="form-inline my-2 my-lg-0" style="text-decoration: none;">
                                    <div style="padding-right:7px">
                                        <button type="submit" class="btn btn-info btn-block" style="height: 37px" ;>
                                        Cadastrar-se
                                    </button>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <!-- Ajuda -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ajuda
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Dúvidas</a>
                                    <a class="dropdown-item" href="">Contato</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </nav>
            </section>
        </header>

        <!-- Contâiner de conteúdo -->
        <div class="p-5">
            <!-- Menu hambúrguer da barra de navegação vertical -->
            <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4 "><i class="fa fa-bars mr-2"></i></button>

            <!-- Cartão de perfil -->
            <div class="card" style="width: 70%;margin: auto;">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-auto" style="margin: auto;">
                            <h2 class="card-title">Roberto Praia Grande</h2>
                            <p><b>Nome de usuário:</b> robertopg</p>
                            <img src="img/motorista.png" style="max-width: 200px;width: 80%;background-color: #cacfcd;">
                            <p style="padding-top: 10px;">
                                <i class="fa fa-star"></i> Avaliação: 0<br>
                                <i class="fas fa-user-clock"></i> Na plataforma há: 2 dias<br>
                                <i class="fas fa-car" style="margin-bottom:12px"></i> Corridas: 0<br>
                            </p>
                        </div>

                        <div class="col-md-auto" style="margin: auto;">
                            <div style="margin-bottom: 25px;">
                                <p><b>E-mail:</b> robertopg@gocare.com.br</p>
                                <p><b>Telefone:</b> +55 13 90000-0000</p>
                                <p><b>Gênero:</b> Masculino</p>
                            </div>
                            <div>
                                <p>
                                    <i class="fas fa-globe"></i> <b>Idioma:</b> Português Brasil<br>
                                    <i class="fas fa-map-marker-alt"></i> <b>Cidade:</b> Praia Grande
                                </p>
                            </div>
                        </div>

                    </div>

                    <div style="width: fit-content;margin-left: auto;text-align: center">
                        <a href="#" class="card-link"><i class="fas fa-pencil-alt"></i> Editar dados</a><br>
                        <a href="#" class="card-link"><i class="fas fa fa-close"></i>  Desativar conta</a>
                    </div>

                </div>
            </div>

        </div>

        <footer style="background-color:#1e47a8;">
            <!-- Mapa de navegação -->
            <section id="navmap" class="clearfix"><br>

                <!-- Download -->
                <div class="column">
                    <img src="img/qrcode.png" width="135px" alt="QRCode para o download do aplicativo">
                    <br><br>
                    <button style="width: 135px;" class="btn btn-info btn-block downloadapp"><i style="font-size: 20px;"
                  class="fab fa-apple"> &nbsp;</i>Apple
              Store</button>
                    <button style="width: 135px;" class="btn btn-info btn-block downloadapp"><i class="fab fa-google-play">
                  &nbsp;</i>Play Store</button>
                </div>

                <!-- Institucional -->
                <div class="column" style="color:white">
                    <p>GoCare Tecnologia Ltda<br> Praia Grande/SP<br>CEP: 11700-100<br> CNPJ: 00.000.000/0000-00</p>
                    <div id="Redes Sociais">
                        <i class='fab fa-facebook' style='font-size:24px'></i>&nbsp
                        <i class='fab fa-twitter' style='font-size:24px'></i>&nbsp
                        <i class='fab fa-linkedin' style='font-size:24px'></i>&nbsp
                        <i class='fab fa-youtube' style='font-size:24px'></i>&nbsp
                        <i class='fab fa-instagram' style='font-size:24px'></i>
                    </div>
                </div>

                <!-- Informação  -->
                <div style="color:white;" class="column">
                    <a href="index.html">Início</a><br>
                    <a href="">Sobre </a><br>
                    <a href="">Motoristas </a> <br>
                    <a href="">Passageiros </a> <br>
                    <a href="">Peça sua viagem</a> <br>
                </div>

                <!-- Ajuda -->
                <div style="color:white" class="column">
                    <a href="">Dúvidas </a><br>
                    <a href="">Contato </a><br>
                </div>

                <!-- Acesso -->
                <div style="color:white;" class="column">
                    <a href="index.html">Entrar</a><br>
                    <a href="index.html">Cadastrar-se</a><br>
                </div>

            </section>

            <!-- Autoria -->
            <section id="author" style="background-color: #10265A;">
                <div style="color:white;padding-top: 15px;text-align: center;">
                    Desenvolvido na disciplina de LES -
                    <small>Prof. Salgado</small>
                </div>
                <div style="padding-bottom:15px;color:white;text-align: center;">
                    <small>Milena Audrey, Sávio Gois, Victor Leme e Vinícius Almeida<br></small>
                </div>
            </section>

        </footer>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
            $(function() {
                // Sidebar toggle behavior
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
    </script>
</body>

</html>