<?php
if ($_GET['msg']=='2'){
    $msg="Houve algum erro. Tente novamente mais tarde.";
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
    <title>GoCare - Excluir conta</title>
</head>

<body style="background-color: #10265A">
<div style="background-color:rgb(87, 154, 210)">
    <header>

        <!-- Barra de Navegação -->
        <?php
        include 'navbar.php';
        ?>

    </header>

    <!-- Contâiner de conteúdo -->
    <div class="p-5" style="margin:auto">

        <!-- Cartão de troca de senha -->
        <div class="card" style="width: 70%;margin: auto;">
            <div class="card-body">

                <div>

                <?php

                    if ($_GET['msg']=='2'){
                        echo "<h2>Conta excluída</h2>";
                        echo "<p style='color:red;text-align:center'>".$msg."</p>";
                    } else {

                ?>

                    <h2>Excluir conta</h2>
                    <p style='color:blue;text-align:center'>Conta excluída com sucesso!</p>
                    <div style="width: fit-content;margin-left: auto;text-align: center;margin-top:16px;"></div>

                <?php } ?>

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

</body>

</html>