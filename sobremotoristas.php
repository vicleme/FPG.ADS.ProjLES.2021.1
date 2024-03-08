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
    <link href="css/vertical-navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>GoCare - Motoristas</title>
</head>

<body style="background-color:rgb(87, 154, 210)">

    <!-- Conteúdo da página -->

        <header>

            <!-- Barra de Navegação -->
            <?php
            include 'navbar.php';
            ?>

        </header>


            <!-- Cadastro de viagem -->
    <section id="selectacess" style="width: 100%;">

        <!-- Menu de Entrada  -->
            <section id="entrarpassageiromotorista">
                <div class="container-fluid" style="width: 90%;margin-top: 5%; margin-bottom: 5%;">

                        <div class="card mb-3" style="align-content: center;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img\motorista.png" style="width: 100%; margin: 1%">

                            
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title-primary">Motorista</h4>
                                        <hr>
                                        <p class="card-text text-break">Um motorista que está nas proximidades recebe e aceita a solicitação de viagem do usuário. Já agendada a viagem, quando faltar dez minutos para a chegada do motorista, o usuário recebe um aviso.</p>
                                        <p class="card-text text-break">O motorista e o usuário confirmam seus nomes e o destino. O motorista inicia a viagem.</p>
                                        <p class="card-text"><small class="text-muted">GoCare® - 2021</small></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </section>

        <!-- Menu de Cadastro -->
        <div id="Cadastrar" class="w3-container w3-border option" style="display:none;background-color: white;">
            <h2 style="margin: 20px auto;">Cadastrar-se</h2>
            <section id="cadastrarpassageiromotorista">
                <div class="container-fluid" style="width: 80%;margin: 5px auto 35px;">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="img/motorista.png" alt="Motorista">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center"></h5>
                                <p class="card-text">
                                    <p style="text-align:center">
                                        <a class="btn btn-info w3-light-blue" data-toggle="modal" data-target="#cad-motorista-modal-lg" style="color: white;">Motorista</a>
                                    </p>
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="img/passageiro2.png" alt="Passageiro">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center"></h5>
                                <p class="card-text">
                                    <p style="text-align:center">
                                        <a class="btn btn-info w3-light-blue" data-toggle="modal" data-target="#cad-passageiro-modal-lg" style="color: white;">Passageiro</a>
                                    </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </section>


        <footer style="background-color:#1e47a8;">
            
            <?php
            include 'footer.php';
            ?>

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

    <script>
        
        // Get the container element
        var aba = document.getElementById("abacorridas");
        aba.className+= " ativo";

    </script>

</body>

</html>