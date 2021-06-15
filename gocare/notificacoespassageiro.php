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

include_once("pedirviagem.php");

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
    <title>GoCare - Notificações</title>
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
        

        <!-- Cartão de notificações -->
            <div class="card" style="width: 85%;margin: auto;">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-auto" style="margin: auto;">
                            <h2 class="card-title">Notificações</h2>
                            <p style="padding-top: 10px;"></p>
                            <div>
                            <?php
                            $consulta = "SELECT * FROM corridas";
                            $con = $db->query($consulta) or die($db->error);
                            ?>
                           <div style="overflow-x:auto;">
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="thead-dark">
                                <tr class="table-primary">
                                    <td style="font-weight:bold;">Endereço de Saída</td>
                                    <td style="font-weight:bold;">Endereço de Destino</td>
                                    <td style="font-weight:bold;">Cidade de Saída</td>
                                    <td style="font-weight:bold;">Cidade de Destino</td>
                                    <td style="font-weight:bold;">Horário da Viagem</td>
                                    <td style="font-weight:bold;">Data de Viagem</td>
                                    <td style="font-weight:bold;">Observação</td>
                                    <td style="font-weight:bold;">Status</td>
                                </tr>
                                </thead>
                                <?php while($dado = $con->fetch_array()){ ?>
                                <tr>
                                    <td><?php echo $dado['enderecosaida']; ?></td>
                                    <td><?php echo $dado['cidadesaida']; ?></td>
                                    <td><?php echo $dado['enderecochegada']; ?></td>
                                    <td><?php echo $dado['cidadechegada']; ?></td>
                                    <td><?php echo $dado['datav']=date('d/m/Y', strtotime($dado['datav']));?></td>
                                    <td><?php echo $dado['horario']=date('h:m', strtotime($dado['horario']));?></td>
                                    <td><?php echo $dado['observacao']; ?></td>
                                     <td><?php echo $dado['status']; ?></td>
                                </tr>
                                <?php }?>
                            </table>
                            </div>
                            </div>
                            </div>
                        </div>

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
        var aba = document.getElementById("abanotificacoes");
        aba.className+= " ativo";

    </script>

    </div>

</body>

</html>