<?php

    session_start(); 
    if ( (!empty($_SESSION['motorista'])) || (!empty($_SESSION['passageiro'])) ){
        if (!empty($_SESSION['motorista'])) {
            $login = $_SESSION['motorista'];
            header("Location: perfilmotorista.php?"); 
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

<?php
if ($_GET['msg']=='1'){
    $msg="Alterado com sucesso!";
} else if ($_GET['msg']=='2'){
    $msg="Houve algum erro. Tente novamente mais tarde.";
} else if ($_GET['msg']=='3'){
    $msg="O arquivo enviado não é uma imagem.";
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
    <title>GoCare - Editar perfil</title>
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

                    <div>

                        <?php
                            if ($_GET['msg']=='1'){
                                echo "<p style='color:blue;text-align:center'>".$msg."</p>"; 
                            } else {
                                echo "<p style='color:red;text-align:center'>".$msg."</p>";
                            } 
                        ?>

                        <form action="editaperfilpassageiro.php" method="post" enctype="multipart/form-data" style="margin: 1% 2%;">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <p>Nome: </p>
                                    <label for="nome" class="sr-only">Nome</label>
                                    <input class="form-control" type="text" id="nome" name="fnome" value="<?php echo $campo['nome'];?>" maxlength=30 required>
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Sobrenome: </p>
                                    <label for="sobrenome" class="sr-only">Sobrenome</label>
                                    <input class="form-control" type="text" id="sobrenome" name="fsobrenome" value="<?php echo $campo['sobrenome'];?>" maxlength=30 required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <p>Foto de perfil: </p>
                                    <label for="fotoperfil" class="sr-only">Foto de perfil</label>
                                    <img src="uimg/<?php echo $campo['fotoperfil']?>" style="max-width: 182px;width: 80%;background-color: #cacfcd;">
                                    <br><br>
                                    <input class="form-control" type="file" id="fotoperfil" name="ffotoperfil">
                                </div>
                                <div class="form-group col-md-6" style="margin: auto;">
                                    <p>Gênero: </p>
                                    <label for="genero" class="sr-only">Gênero</label>
                                    <select class="form-control" id="genero" name="fgenero" value="<?php echo $campo['genero'];?>">
                                        <option value="1" <?php if($campo['genero']=="1"){?>selected="selected"<?php }?>>Feminino</option>
                                        <option value="2" <?php if($campo['genero']=="2"){?>selected="selected"<?php }?>>Masculino</option>
                                        <option value="3" <?php if($campo['genero']=="3"){?>selected="selected"<?php }?>>Outro</option>
                                    </select>

                                    <br>
                                    <p>E-mail: </p>
                                    <label for="email" class="sr-only">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="femail" value="<?php echo $campo['email'];?>" maxlength=50 required>

                                    <br>
                                    <p>Telefone/celular: </p>
                                    <label for="telcel" class="sr-only">Telefone/celular</label>
                                    <input class="form-control telcel" type="tel" id="telcel" name="ftelcel" value="<?php echo $campo['telcel'];?>" maxlength=20 pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" required>  

                                </div>
                                
                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-6" style="margin-left: auto;margin-right: auto">
                                    <p>Idioma: </p>
                                    <label for="idioma" class="sr-only">Idioma</label>
                                    <input class="form-control" type="text" id="idioma" name="fidioma" value="<?php echo $campo['idioma'];?>" maxlength=30 required>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary btn-block" style="margin-top:11px;margin-bottom:16px">Salvar alterações</button>
                            
                        </form>

                    </div>

                    <div style="width: fit-content;margin-left: auto;text-align: center">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script>

    jQuery(".telcel")
        .mask("(99) 99999-9999?9")
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
            var aba = document.getElementById("abaeditarperfil");
            aba.className+= " ativo";

    </script>

</body>

</html>