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
<?php
if ($_GET['msg']=='2'){
    $msg="<br>Agendado com sucesso!";
} else if ($_GET['msg']=='1'){
    $msg="<br>Houve algum erro. Tente novamente mais tarde.";
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
    <title>GoCare - Peça sua viagem</title>
</head>

<body style="background-color:rgb(87, 154, 210)">

    <!-- Barra de navegação vertical -->
    <?php
        include 'verticalnavbar.php';
    ?>

    <?php

    include("selecionapassageiro.php");

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

            <!-- Cartão de corrida -->
            <div class="card" style="width: 70%;margin: auto;">
                <div class="card-body">
                    <div style="text-align: center;margin:20px 20px 0px 20px">
                        <img src="img\faviconv2.ico" style="width: 12%; align-self: center; margin-top: 2.3459%">

                        <?php
                        if ($_GET['msg']=='2'){
                            echo "<p style='color:blue;text-align:center'>".$msg."</p>"; 
                        } else {
                            echo "<p style='color:red;text-align:center'>".$msg."</p>";
                        } 
                        ?>

                        <h2>Agende sua viagem</h2>
                    </div>
                    <form action="pedirviagem.php" method="post" style="padding: 5%">
                        <div class="form-row">
                        <div class="col-md-8">
                            <label for="validationDefault01">Endereço de saída:</label>
                            <input type="text" name="fenderecosaida" class="form-control" id="validationDefault01" placeholder="Endereço" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault02">Cidade:</label>
                            <input type="text" name="fcidadesaida" class="form-control" id="validationDefault02" placeholder="Cidade" required>
                        </div>
                        </div>
                        <div class="form-row" style="margin-top: 2%">
                        <div class="col-md-8">
                            <label for="validationDefault03">Endereço de chegada:</label>
                            <input type="text" name="fenderecochegada" class="form-control" id="validationDefault03" placeholder="Endereço" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault04">Cidade:</label>
                            <input type="text" name="fcidadechegada" class="form-control" id="validationDefault04" placeholder="Cidade" required>
                        </div>
                        </div>
                        <div class="form-row" style="margin-top: 2%">
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault05">Horário:</label>
                            <input type="time" name="fhorarioviagem" class="form-control" id="validationDefault05" placeholder="--:--" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault06">Data:</label>
                            <input type="date" name="fdataviagem" class="form-control" id="validationDefault06" placeholder="01/01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault07">Observação:</label>
                            <input type="text" name="fobservacaoviagem" class="form-control" id="validationDefault07" placeholder="Observação" optional>
                        </div>
                            <input type="hidden" name="fpassageiro" class="form-control" id="validationDefault08" value="<?php echo $campo['email'];?>">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck"> Li e aceito os termos de uso de serviços.<br>
                                <a href="#" class="link" style="color: #007bff;">Termos de uso de serviços</a>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block col-md-6" style="margin-top:11px;margin-left:auto;margin-right:auto">Agendar</button>
                    </form>
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
        var aba = document.getElementById("abacorridas");
        aba.className+= " ativo";

    </script>

</body>

</html>