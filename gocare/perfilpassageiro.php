<?php

    session_start(); 
    if ( (!empty($_SESSION['motorista'])) || (!empty($_SESSION['passageiro'])) ){
        if (!empty($_SESSION['motorista'])) {
            $login = $_SESSION['motorista'];
            header("Location: perfilmotorista.php"); 
        } else {
            $login = $_SESSION['passageiro'];
        }
    } else {
        header("Location: acesso.php?msg=5");   
    }

    unset($_SESSION['login']);
?>

<?php

include("selecionapassageiro.php");

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
    <?php
        include 'verticalnavbar.php';
    ?>

    <!-- Conteúdo da página -->
    <div class="page-content" id="content">

        <header>

            <!-- Barra de Navegação -->
            <?php
            include 'navbar.php';
            ?>

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
                            <h2 class="card-title"><?php echo $campo['nome'];?> <?php echo $campo['sobrenome'];?></h2>
                            <p>
                            <b>Nome de usuário:</b> <?php echo $campo['nomeu'];?>
                            </p>
                            <img src="uimg/<?php echo $campo['fotoperfil']?>" style="max-width: 200px;width: 80%;background-color: #cacfcd;">
                            <p style="padding-top: 10px;">
                                <i class="fa fa-star"></i> Avaliação: <?php echo $campo['avaliacao'];?><br>
                                <i class="fas fa-car" ></i> Corridas: <?php echo $campo['corridas'];?><br>
                                <i class="fas fa-user-clock" style="margin-bottom:12px"></i> Na plataforma desde: <?php echo $campo['tempoplat'];?><br>
                            </p>
                        </div>

                        <div class="col-md-auto" style="margin: auto;">
                            <div style="margin-bottom: 25px;">
                                <p><b>E-mail:</b> <?php echo $campo['email'];?></p>
                                <p><b>Telefone:</b> <?php echo $campo['telcel'];?></p>
                                <p><b>Gênero:</b> <?php echo $campo['generoe'];?></p>
                            </div>
                            <div>
                                <p>
                                    <i class="fas fa-globe"></i> <b>Idioma:</b> <?php echo $campo['idioma'];?><br>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div style="width: fit-content;margin-left: auto;text-align: center">
                        <a href="perfilpassageiroedita.php" class="card-link"><i class="fas fa-pencil-alt"></i> Editar dados</a><br>
                        <a href="perfilpassageirodesativar.php" class="card-link"><i class="fas fa fa-close"></i>  Desativar conta</a>
                    </div>

                </div>
            </div>

        </div>

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
        var aba = document.getElementById("abaeditarperfil");
        aba.className+= " ativo";

    </script>

</body>

</html>