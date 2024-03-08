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

include("selecionacorridaspassageiro.php");

?>

<?php
if ($_GET['msg']=='1'){
    $msg="A corrida foi cancelada com sucesso.";
} else if ($_GET['msg']=='2'){
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
    <title>GoCare - Corridas</title>
</head>
<body style="background-color: rgb(87, 154, 210);">
    
    <!-- Barra de navegação vertical -->
    <?php
        include 'verticalnavbar.php';
    ?>
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

                        <div style="margin: auto;"><h2 class="card-title" style="text-align:center">Corridas</h2></div>

                        <?php
                            if ($_GET['msg']=='1'){
                                echo "<p style='color:blue;text-align:center'>".$msg."</p>"; 
                            } else {
                                echo "<p style='color:red;text-align:center'>".$msg."</p>";
                            } 
                        ?>

                        <form action="viagempedir.php" class="form-inline my-2 my-lg-0">
                        <button type="submit" class="btn btn-primary btn-block col-md-3" style="margin-top:11px;margin-bottom:16px; margin-left: auto">Agendar corrida</button>
                        </form>
                        <?php while($dado = $con->fetch_array()){
                            $dado['datavn']=$dado['datav']; 
                            $dado['datav']=date('d/m/Y', strtotime($dado['datav']));
                            $dado['horario']=date('h:m', strtotime($dado['horario'])); ?>
                        <div class="row">
                            <div class="col-md-auto" style="margin: auto;">
                                <p style="margin-left: 10px;">
                                    <b>Status:</b> <?php echo $dado['statuscorrida'];?>
                                </p>
                                <p style="margin-left: 10px;">
                                    <b>Motorista:</b> <?php echo $dado['motorista'];?>
                                </p>
                                <p style="margin-left: 10px;">
                                <b>Data e hora:</b> <?php echo $dado['datav'];?> às <?php echo $dado['horario'];?><br>
                                <b>De:</b> <?php echo $dado['enderecosaida'];?>, <?php echo $dado['cidadesaida'];?><br>
                                <b>Para:</b> <?php echo $dado['enderecochegada'];?>, <?php echo $dado['cidadechegada'];?>
                                </p>
                            </div>
                            <div class="col-md-auto" style="margin: auto;">
                            <form action="corridapassageiroaltera.php" method="post" class="form-inline my-2 my-lg-0">
                                <input type="hidden" name="fdatav" class="form-control" value="<?php echo $dado['datavn'];?>">
                                <input type="hidden" name="fhorario" class="form-control" value="<?php echo $dado['horario'];?>">
                                <input type="hidden" name="fenderecosaida" class="form-control" value="<?php echo $dado['enderecosaida'];?>">
                                <input type="hidden" name="fcidadesaida" class="form-control" value="<?php echo $dado['cidadesaida'];?>">
                                <input type="hidden" name="fenderecochegada" class="form-control" value="<?php echo $dado['enderecochegada'];?>">
                                <input type="hidden" name="fcidadechegada" class="form-control" value="<?php echo $dado['cidadechegada'];?>">
                                <input type="hidden" name="fobservacao" class="form-control" value="<?php echo $dado['observacao'];?>">
                                <input type="hidden" name="fcodtimestamp" class="form-control" value="<?php echo $dado['codtimestamp'];?>">
                                <button type="submit" class="btn btn-warning btn-block" style="margin-top:11px;margin-bottom:16px; margin-left: auto">Alterar</button>
                            </form>
                            <form class="form-inline my-2 my-lg-0">
                                <input type="button" class="btn btn-danger btn-block" onclick="cancelarCorrida('<?php echo $dado['codtimestamp'];?>')" style="margin-top:11px;margin-bottom:16px; margin-left: auto" value="Cancelar">
                            </form>
                            </div>
                        </div>
                        <hr>
                        <?php }?>

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

        <script>
            function cancelarCorrida(codtimestamp) {
                var resultado;
                resultado = confirm("Tem certeza que deseja cancelar essa corrida? Essa ação não poderá ser desfeita.");
                if (resultado) {
                window.location.replace("cancelacorridapassageiro.php?fcodtimestamp=" + codtimestamp);
            }
            }
        
        </script>
    
    </div>

</body>

</html>