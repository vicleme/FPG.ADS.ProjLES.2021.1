<section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1e47a8;">

        <!-- Marca -->
        <a class="navbar-brand" href="index.php">
            <img src="img/brand-navbar.png" style="width: 112px;" alt="Logotipo da GoCare">
        </a>

        <!-- Menu hambúrguer -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Guias -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Informação -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobremotoristas.php">Motoristas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobrepassageiros.php">Passageiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viagempedir.php">Peça sua viagem</a>
                </li>
            </ul>

            <!-- Acesso -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    
                    <?php
                        if ( (!empty($_SESSION['passageiro'])) ){
                            $usertype = 'passageiro';
                            $usertypeC = 'Passageiro';}
                        if ( (!empty($_SESSION['motorista'])) ){
                            $usertype = 'motorista';
                            $usertypeC = 'Motorista';}
                        if ( (!empty($_SESSION['passageiro'])) || (!empty($_SESSION['motorista'])) ) {
                    
                    ?>

                    <!-- Conta -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Conta
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php echo '<a class="dropdown-item" href="perfil'.$usertype.'.php">Área do '.$usertypeC.'</a>'; ?>
                                <?php echo '<a class="dropdown-item" href="logout.php?token='.md5(session_id()).'">Sair</a>'; ?>
                            </div>
                        </li>
                    </ul>

                    <?php 
                    } else { 
                    ?>

                    <!-- Entrar -->
                    <li class="nav-item">
                        <form action="acesso.php" class="form-inline my-2 my-lg-0">
                            <div style="padding-right:7px">
                                <button type="submit" class="btn btn-info btn-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                                    </svg>
                                    &nbspEntrar
                                </button>
                            </div>
                        </form>
                    </li>

                    <!-- Cadastrar-se -->
                    <li class="nav-item">
                        <a href="acesso.php?js:openOptionCadastrar()" class="form-inline my-2 my-lg-0" style="text-decoration: none;">
                            <div style="padding-right:7px">
                                <button type="submit" class="btn btn-info btn-block" style="height: 37px" ;>
                                    Cadastrar-se
                                </button>
                            </div>
                        </a>
                    </li>

                    <?php } ?>
                </li>          
            </ul>
                   
            <!-- Ajuda -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ajuda
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">Dúvidas</a>
                        <a class="dropdown-item" href="contatocare.php">Contato</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
</section>