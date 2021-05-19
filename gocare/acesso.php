<?php

    session_start(); 
    if ( (!empty($_SESSION['motorista'])) || (!empty($_SESSION['passageiro'])) ){
        if (!empty($_SESSION['motorista'])) {
            $login = $_SESSION['motorista'];
            header("Location: perfilmotorista.php");
            exit;
        } else {
            $login = $_SESSION['passageiro'];
            header("Location: perfilpassageiro.php");
            exit;
        }
    }

    unset($_SESSION['login']);
?>

<?php
if ($_GET['msg']=='1'){
    $msg="O e-mail <b>".$_GET['femail']."</b> n&atilde;o est&aacute; cadastrado.";
} else if ($_GET['msg']=='2'){
    $msg="Senha incorreta para o email <b>".$_GET['femail']."</b>.";
} else if ($_GET['msg']=='3'){
    $msg="O e-mail <b>".$_GET['femail']."</b> j&aacute; est&aacute; cadastrado.";
} else if ($_GET['msg']=='4'){
    $msg="Cadastrado com sucesso!";
} else if ($_GET['msg']=='5'){
    $msg="Por favor, autentifique-se.";
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>GoCare - Acesso</title>
</head>

<body style="background-color:rgb(224, 250, 250)">

    <header>

        <!-- Barra de Navegação -->
        <?php
        include 'navbar.php';
        ?>

    </header>

    <!-- Menu de acesso -->
    <section id="selectacess" style="width: 80%; margin: 80px auto;text-align:center;">
        <div class="w3-bar" style="text-align:center; background-color: #b1cfe4;">
            <button class="w3-button tablink w3-light-blue" onclick="openOption(event,'Entrar')">Entrar</button>
            <button class="w3-button tablink" onclick="openOption(event,'Cadastrar')">Cadastrar-se</button>
        </div>

        <!-- Menu de Entrada  -->
        <div id="Entrar" class="w3-container w3-border option" style="background-color: white;">
            <h2 style="margin: 20px auto;">Entrar</h2>

            <?php
                if ($_GET['msg']=='4'){
                    echo "<p style='color:blue'>".$msg."</p>"; 
                } else {
                    echo "<p style='color:red'>".$msg."</p>";
                } 
            ?>
            
            <section id="entrarpassageiromotorista">
                <div class="container-fluid" style="width: 80%;margin: 5px auto 35px;">
                    <div class="card-group">

                        <div class="card">
                            <img class="card-img-top" src="img/motorista.png" alt="Motorista">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center"></h5>
                                <p class="card-text">
                                    <p style="text-align:center">
                                        <a class="btn btn-info w3-light-blue" data-toggle="modal" data-target="#login-motorista-modal" style="color: white;">Motorista</a>
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
                                        <a class="btn btn-info w3-light-blue" data-toggle="modal" data-target="#login-passageiro-modal" style="color: white;">Passageiro</a>
                                    </p>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

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

    <!-- Modal de Cadastro-->
    <!-- Motorista -->
    <div class="modal fade" id="cad-motorista-modal-lg" tabindex="-1" role="dialog" aria-labelledby="cadmotoLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <!-- class="modal-header" -->
                <div style="text-align: center;margin:20px 20px 0px 20px">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button><br>
                    <img src="img/favicon.ico" style="width: 12%;">
                    <h2>Venha ser nosso motorista!</h2>
                </div>

                <div class="modal-body">
                    <form action="cadastramotorista.php" method="post" style="margin: 1% 2%;">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>Nome: </p>
                                <label for="nome" class="sr-only">Nome</label>
                                <input class="form-control" type="text" id="nome" name="fnome" maxlength=30 required>
                            </div>
                            <div class="form-group col-md-6">
                                <p>Sobrenome: </p>
                                <label for="sobrenome" class="sr-only">Sobrenome</label>
                                <input class="form-control" type="text" id="sobrenome" name="fsobrenome" maxlength=30 required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>Gênero: </p>
                                <label for="genero" class="sr-only">Gênero</label>
                                <select class="form-control" id="genero" name="fgenero">
                                    <option value="1">Feminino</option>
                                    <option value="2">Masculino</option>
                                    <option value="2">Outro</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <p>Data de Nascimento: </p>
                                <label for="datanasc" class="sr-only">Data de Nascimento</label>
                                <input class="form-control" type="date" id="datanasc" name="fdatanasc" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>E-mail: </p>
                                <label for="email" class="sr-only">E-mail</label>
                                <input class="form-control" type="email" id="email" name="femail" maxlength=50 required>  
                            </div>
                            <div class="form-group col-md-6">
                                <p>Senha: </p>
                                <label for="senha" class="sr-only">Senha</label>
                                <input class="form-control" type="password" id="senha" name="fsenha" maxlength=30 required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>Telefone/celular: </p>
                                <label for="telcel" class="sr-only">Telefone/celular</label>
                                <input class="form-control telcel" type="tel" id="telcel" name="ftelcel" maxlength=20 pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <p>Cidade: </p>
                                <label for="cidade" class="sr-only">Cidade</label>
                                <input class="form-control" type="text" id="cidade" name="fcidade" maxlength=30 required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck"> Li e aceito os termos de uso de dados.<br>
                                    <a href="#" class="link" style="color: #007bff;">Termos de uso de dados</a>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block ">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Passageiro -->
    <div class="modal fade" id="cad-passageiro-modal-lg" tabindex="-1" role="dialog" aria-labelledby="cadpasLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <!-- class="modal-header" -->
                <div style="text-align: center;margin:20px 20px 0px 20px">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button><br>
                    <img src="img/favicon.ico" style="width: 12%;">
                    <h2>Viaje conosco!</h2>
                </div>

                <div class="modal-body">
                    <form action="cadastrapassageiro.php" method="post" style="margin: 1% 2%;">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>Nome: </p>
                                <label for="nome" class="sr-only">Nome</label>
                                <input class="form-control" type="text" id="nome" name="fnome" maxlength=30 required>
                            </div>
                            <div class="form-group col-md-6">
                                <p>Sobrenome: </p>
                                <label for="sobrenome" class="sr-only">Sobrenome</label>
                                <input class="form-control" type="text" id="sobrenome" name="fsobrenome" maxlength=30 required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>Gênero: </p>
                                <label for="genero" class="sr-only">Gênero</label>
                                <select class="form-control" id="genero" name="fgenero">
                                    <option value="1">Feminino</option>
                                    <option value="2">Masculino</option>
                                    <option value="2">Outro</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <p>Data de Nascimento: </p>
                                <label for="datanasc" class="sr-only">Data de Nascimento</label>
                                <input class="form-control" type="date" id="datanasc" name="fdatanasc" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>E-mail: </p>
                                <label for="email" class="sr-only">E-mail</label>
                                <input class="form-control" type="email" id="email" name="femail" maxlength=50 required>
                            </div>
                            <div class="form-group col-md-6">
                                <p>Senha: </p>
                                <label for="senha" class="sr-only">Senha</label>
                                <input class="form-control" type="password" id="senha" name="fsenha" maxlength=30 required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6" style="margin-left: auto;margin-right: auto;">
                                <p>Telefone/celular: </p>
                                <label for="telcel" class="sr-only">Telefone/celular</label>
                                <input class="form-control telcel" type="tel" id="telcel" name="ftelcel" maxlength=20 pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck"> Li e aceito os termos de uso de dados.<br>
                                <a href="#" class="link" style="color: #007bff;">Termos de uso de dados</a>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block ">
                            Cadastrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de Login -->
    <!-- Motorista -->
    <div class="modal fade" id="login-motorista-modal" tabindex="-1" role="dialog" aria-labelledby="loginmotoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- Cabeçalho -->
                <div class="modal-header">
                    <h2 class="modal-title">Login</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button><br>
                </div>

                <!-- Corpo -->
                <div class="modal-body">
                    <form action="loginmotorista.php" method="post" style="margin: 1% 2%;">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <p>Usuário: </p>
                                <label for="nome" class="sr-only">Usuário:</label>
                                <input class="form-control" type="text" id="nome" name="fusuario" maxlength=50 required>
                            </div>
                            <div class="form-group col-md-12">
                                <p>Senha: </p>
                                <label for="nome" class="sr-only">Senha:</label>
                                <input class="form-control" type="password" id="senha" name="fsenha" maxlength=30 required>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck"> Lembre de mim.</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck"> Mantenha-me conectado.</label>
                                    </div>
                                    <br>
                                    <a href="#" class="link" style="color: #007bff;">Esqueceu a senha?</a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Passageiro -->
    <div class="modal fade" id="login-passageiro-modal" tabindex="-1" role="dialog" aria-labelledby="logipasLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- Cabeçalho -->
                <div class="modal-header">
                    <h2 class="modal-title">Login</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button><br>
                </div>

                <!-- Corpo -->
                <div class="modal-body">
                    <form action="loginpassageiro.php" method="post" style="margin: 1% 2%;">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <p>Usuário: </p>
                                <label for="nome" class="sr-only">Usuário:</label>
                                <input class="form-control" type="text" id="nome" name="fusuario" maxlength=50 required>
                            </div>
                            <div class="form-group col-md-12">
                                <p>Senha: </p>
                                <label for="nome" class="sr-only">Senha:</label>
                                <input class="form-control" type="password" id="senha" name="fsenha" maxlength=30 required>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck"> Lembre de mim.</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck"> Mantenha-me conectado.</label>
                                    </div>
                                    <br>
                                    <a href="#" class="link" style="color: #007bff;">Esqueceu a senha?</a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer style="background-color:#1e47a8;">
        
        <?php
        include 'footer.php';
        ?>

    </footer>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Abrir opções -->
    <script>
        function openOption(evt, optionName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("option");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-light-blue", "");
            }
            document.getElementById(optionName).style.display = "block";
            evt.currentTarget.className += " w3-light-blue";
        }
    </script>

    <!-- Abrir opção de Cadastro -->
    <script>
        function openOptionCadastrar() {
            var i, x, tablinks;
            x = document.getElementsByClassName("option");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            tablinks[0].className = tablinks[0].className.replace("w3-light-blue", "");
            tablinks[1].className = tablinks[1].className.replace("w3-button tablink", "w3-button tablink w3-light-blue");
            document.getElementById('Cadastrar').style.display = "block";
            history.pushState({}, '', 'acesso.php');
        }
    </script>

    <!-- Interpretar comando JavaScript na URL -->
    <script>
        function buscaEndereco() {
            var blocos = location.href.split('?');
            for (i = 0; i < blocos.length; i++) {
                var partes = blocos[i].split(':');
                if (partes[0] == 'js') eval(partes[1]);
            }
        }

        window.addEventListener("load", function() {
            buscaEndereco();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
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

</body>

</html>