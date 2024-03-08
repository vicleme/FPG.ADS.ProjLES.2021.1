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
if ($_GET['msg']=='1'){
    $msg="Senha alterada com sucesso!";
} else if ($_GET['msg']=='2'){
    $msg="Houve algum erro. Tente novamente mais tarde.";
} else if ($_GET['msg']=='3'){
    $msg="A senha antiga inserida está incorreta.";
} else if ($_GET['msg']=='4'){
    $msg="Certifique-se de que as senhas inseridas correspondem.";
}
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
    <title>GoCare - Alterar senha</title>
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

            <!-- Cartão de troca de senha -->
            <div class="card" style="width: 70%;margin: auto;">
                <div class="card-body">

                    <div>

                        <?php
                            if ($_GET['msg']=='1'){
                                echo "<p style='color:blue;text-align:center'>".$msg."</p>"; 
                            } else {
                                echo "<p style='color:red;text-align:center'>".$msg."</p>";
                            } 
                        ?>

                        <form action="editasenhaperfilpassageiro.php" method="post" style="margin: 1% 2%;">
                            <div class="form-row">
                                <div class="form-group col-md-9" style="margin-left: auto;margin-right: auto;">
                                    <p>Senha antiga: </p>
                                    <label for="senhaantiga" class="sr-only">Senha antiga</label>
                                    <input class="form-control" type="password" id="senhaantiga" name="fsenhaantiga" maxlength=20 required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-9" style="margin-left: auto;margin-right: auto;">
                                    <p>Nova senha: </p>
                                    <label for="novasenha" class="sr-only">Nova senha</label>
                                    <input class="form-control" type="password" id="novasenha" name="fnovasenha" maxlength=20 required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-9" style="margin-left: auto;margin-right: auto;">
                                    <p>Confirmar nova senha: </p>
                                    <label for="confnovasenha" class="sr-only">Confirmar nova senha</label>
                                    <input class="form-control" type="password" id="confnovasenha" name="fconfnovasenha" maxlength=20 required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block col-md-6" style="margin-top:11px;margin-bottom:16px;margin-left:auto;margin-right:auto">Alterar senha</button>
                            
                        </form>

                        <a href="#" class="link" style="color: #007bff">Esqueceu a senha?</a>

                    </div>

                    <div style="width: fit-content;margin-left: auto;text-align: center;margin-top:16px;">
                        <a href="perfilpassageiro.php" class="card-link"><i class="fas fa-eye"></i> Ver perfil</a><br>
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

    jQuery(".telcel")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });

    </script>

    <script>

        // Get the container element
        var aba = document.getElementById("abaalterarsenha");
        aba.className+= " ativo";

    </script>

</body>

</html>