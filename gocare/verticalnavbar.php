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

        <?php
        echo '<div style="position:absolute;bottom:3%;left:8%"><a href="logout.php?token='.md5(session_id()).'" style="color: white;">Sair</a></div>';
        ?>

    </div>