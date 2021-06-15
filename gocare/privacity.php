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
    <title>GoCare - Política de Privacidade</title>
</head>

<body style="background-color:rgb(87, 154, 210)">

    <!-- Conteúdo da página -->

        <header>

            <!-- Barra de Navegação -->
            <?php
            include 'navbar.php';
            ?>

        </header>


            <!-- Cadastro de viagem -->
    <section id="selectacess" style="width: 100%;">

        <!-- Menu de Entrada  -->
            <section id="entrarpassageiromotorista">
                <div class="container-fluid" style="width: 90%;margin-top: 5%; margin-bottom: 5%;">

                        <div class="card mb-3" style="align-content: center;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div id="texte_a_afficher" class="texte_inselectionnable">
                                            <span class="stabilisation"></span><p style="text-align: center;"><strong>POLÍTICA DE PRIVACIDADE<br /></strong></p>
                                            <p><br />Este site é mantido e operado por <span id="span_id_controlador_nome"  >Vinicius de Lucca Silva Almeida</span>.</p>
                                            <p>Nós coletamos e utilizamos alguns dados pessoais que pertencem àqueles que utilizam nosso site. Ao fazê-lo, agimos na qualidade de <strong>controlador</strong> desses dados e estamos sujeitos às disposições da Lei Federal n. 13.709/2018 (Lei Geral de Proteção de Dados Pessoais - LGPD).</p>
                                            <p>Nós cuidamos da proteção de seus dados pessoais e, por isso, disponibilizamos esta política de privacidade, que contém informações importantes sobre:</p>
                                            <p style="padding-left: 30px;">- Quem deve utilizar nosso site<br />- Quais dados coletamos e o que fazemos com eles;<br />- Seus direitos em relação aos seus dados pessoais; e<br />- Como entrar em contato conosco.</p>

                                            <p><strong><strong><br />1. </strong>Quem deve utilizar nosso </strong><strong> site</strong></p>
                                            <p>Nosso site só deve ser utilizado por pessoas com mais de dezoito anos de idade. Sendo assim, crianças e adolescentes não devem utilizá-lo.</p>
                                            <p><br /><strong><strong>2. </strong>Dados que coletamos e motivos da coleta<br /></strong></p>
                                            <p>Nosso site coleta e utiliza alguns dados pessoais de nossos usuários, de acordo com o disposto nesta seção.</p>
                                            <p><em>1. Dados pessoais fornecidos expressamente pelo usuário<strong><br /></strong></em></p>
                                            <p>Nós coletamos os seguintes dados pessoais que nossos usuários nos fornecem expressamente ao utilizar nosso site:</p>
                                            <p style="padding-left: 30px;"><span id="span_id_dados_fornecidos_especifica"  >- Nome;<br />- Sobrenome;<br />- Endereço de e-mail;<br />- Número de telefone;<br />- Data de nascimento;<br />- Gênero;</span></p>
                                            <p>A coleta destes dados ocorre nos seguintes momentos:</p>
                                            <p style="padding-left: 30px;"><span id="span_id_dados_fornecidos_momento"  >- quando o usuário faz cadastro no site;</span></p>
                                            <p>Os dados fornecidos por nossos usuários são coletados com as seguintes finalidades:</p>
                                            <p style="padding-left: 30px;"><span id="span_id_dados_fornecidos_finalidade"  >- para que o usuário possa adquirir nossos serviços;</span></p>
                                            <p><em>2. Dados sensíveis</em></p>
                                            <p><strong>Não</strong> serão coletados dados sensíveis de nossos usuários, assim entendidos aqueles definidos nos arts. 11 e seguintes da Lei de Proteção de Dados Pessoais. Assim, <strong>não</strong> haverá coleta de dados sobre origem racial ou étnica, convicção religiosa, opinião política, filiação a sindicato ou a organização de caráter religioso, filosófico ou político, dado referente à saúde ou à vida sexual, dado genético ou biométrico, quando vinculado a uma pessoa natural.</p>
                                            <p><em>3. Coleta de dados não previstos expressamente</em></p>
                                            <p>Eventualmente, outros tipos de dados não previstos expressamente nesta Política de Privacidade poderão ser coletados, desde que sejam fornecidos com o consentimento do usuário, ou, ainda, que a coleta seja permitida com fundamento em outra base legal prevista em lei.</p>
                                            <p>Em qualquer caso, a coleta de dados e as atividades de tratamento dela decorrentes serão informadas aos usuários do site.</p>
                                            <p><strong><strong><br />3. </strong>Compartilhamento de dados pessoais com terceiros</strong></p>
                                            <p>Nós compartilhamos alguns dos dados pessoais mencionados nesta seção com terceiros.</p>
                                            <p>Os dados compartilhados são os seguintes:</p>
                                            <p style="padding-left: 30px;"><span id="span_id_compartilha_especifica"  >- dados básicos para identificação;</span></p>
                                            <p>Estes dados são compartilhados pelas seguintes razões e para as seguintes finalidades:</p>
                                            <p style="padding-left: 30px;"><span id="span_id_compartilha_razoesefinalidades"  >Para que como motorista, o passageiro possa saber seu nome e sobrenome e para que como passageiro, o motorista possa saber seu nome e sobrenome;</span></p>
                                            <p>Além das situações aqui informadas, é possível que compartilhemos dados com terceiros para cumprir alguma determinação legal ou regulatória, ou, ainda, para cumprir alguma ordem expedida por autoridade pública.</p>
                                            <p>Em qualquer caso, o compartilhamento de dados pessoais observará todas as leis e regras aplicáveis, buscando sempre garantir a segurança dos dados de nosso usuários, observados os padrões técnicos empregados no mercado.</p>
                                            <p><span class="flou"><strong><strong><br /></strong></strong></span><strong>4.</strong> <strong>Por quanto tempo seus dados pessoais serão armazenados</strong></p>
                                            <p>Os dados pessoais coletados pelo site são armazenados e utilizados por período de tempo que corresponda ao necessário para atingir as finalidades elencadas neste documento e que considere os direitos de seus titulares, os direitos do controlador do site e as disposições legais ou regulatórias aplicáveis.</p>
                                            <p>Uma vez expirados os períodos de armazenamento dos dados pessoais, eles são removidos de nossas bases de dados ou anonimizados, salvo nos casos em que houver a possibilidade ou a necessidade de armazenamento em virtude de disposição legal ou regulatória.</p>
                                            <p><span class="flou"><strong><strong><br /></strong></strong></span><strong>5. Bases legais para o tratamento de dados pessoais<span class="flou"><br /></span></strong></p>
                                            <p>Cada operação de tratamento de dados pessoais precisa ter um fundamento jurídico, ou seja, uma base legal, que nada mais é que uma justificativa que a autorize, prevista na Lei Geral de Proteção de Dados Pessoais.</p>
                                            <p>Todas as Nossas atividades de tratamento de dados pessoais possuem uma base legal que as fundamenta, dentre as permitidas pela legislação. Mais informações sobre as bases legais que utilizamos para operações de tratamento de dados pessoais específicas podem ser obtidas a partir de nossos canais de contato, informados ao final desta Política.</p>
                                            <p><strong><span class="flou"><br /></span>6.<span class="flou"> Como o titular pode exercer seus direitos</span></strong></p>
                                            <p><span class="flou">Para garantir que o usuário que pretende exercer seus direitos é, de fato, o titular dos dados pessoais objeto da requisição, poderemos solicitar documentos ou outras informações que possam auxiliar em sua correta identificação, a fim de resguardar nossos direitos e os direitos de terceiros. Isto somente será feito, porém, se for absolutamente necessário, e o requerente receberá todas as informações relacionadas.
                                            <p><br /><strong><strong>7.</strong></strong><strong> Medidas de segurança no tratamento de dados pessoais<br /></strong></p>
                                            <p>Empregamos medidas técnicas e organizativas aptas a proteger os dados pessoais de acessos não autorizados e de situações de destruição, perda, extravio ou alteração desses dados.</p>
                                            <p>As medidas que utilizamos levam em consideração a natureza dos dados, o contexto e a finalidade do tratamento, os riscos que uma eventual violação geraria para os direitos e liberdades do usuário, e os padrões atualmente empregados no mercado por empresas semelhantes à nossa.</p>
                                            <p>Entre as medidas de segurança adotadas por nós, destacamos as seguintes:</p>
                                            <p style="padding-left: 30px;">- Os dados de nossos usuários são armazenados em ambiente seguro;<br />- Limitamos o acesso aos dados de nossos usuários, de modo que terceiros não autorizados não possam acessá-los;<br />- Mantemos registros de todos aqueles que têm, de alguma forma, contato com nossos dados.</p>
                                            <p>Ainda que adote tudo o que está ao seu alcance para evitar incidentes de segurança, é possível que ocorra algum problema motivado exclusivamente por um terceiro - como em caso de ataques de <em>hackers</em> ou <em>crackers</em> ou, ainda, em caso de culpa exclusiva do usuário, que ocorre, por exemplo, quando ele mesmo transfere seus dados a terceiro. Assim, embora sejamos, em geral, responsáveis pelos dados pessoais que tratamos, nos eximimos de responsabilidade caso ocorra uma situação excepcional como essas, sobre as quais não temos nenhum tipo de controle.</p>
                                            <p>De qualquer forma, caso ocorra qualquer tipo de incidente de segurança que possa gerar risco ou dano relevante para qualquer de nossos usuários, comunicaremos os afetados e a Autoridade Nacional de Proteção de Dados acerca do ocorrido, em conformidade com o disposto na Lei Geral de Proteção de Dados.</p>
                                            <p><strong><br />8. Alterações nesta política<br /></strong></p>
                                            <p>A presente versão desta Política de Privacidade foi atualizada pela última vez em: <span id="span_id_data_termo"  >15/06/2021</span>.</p>
                                            <p>Reservamo-nos o direito de modificar, a qualquer momento, as presentes normas, especialmente para adaptá-las às eventuais alterações feitas em nosso site, seja pela disponibilização de novas funcionalidades, seja pela supressão ou modificação daquelas já existentes.</p>
                                            <p>Sempre que houver uma modificação, nossos usuários serão notificados acerca da mudança.</p>
                                            <p><strong><br />9.</strong><strong> Como entrar em contato conosco</strong></p>
                                            <p>Para esclarecer quaisquer dúvidas sobre esta Política de Privacidade ou sobre os dados pessoais que tratamos, entre em contato com nosso Encarregado de Proteção de Dados Pessoais, por algum dos canais mencionados abaixo:</p>
                                            <p style="padding-left: 30px;"><em>E-mail</em>: <span id="span_id_encarregado_email"  >saviogois@gmail.com</span></p>
                                            <p style="padding-left: 30px;">Telefone: <span id="span_id_encarregado_telefone"  class="encours"  >+55 13 98217-7705</span></p>
                                            <p style="padding-left: 30px;">Endereço postal: <span style="white-space:pre-wrap;"><span id="span_id_encarregado_endereco"  class="encours"  >Rua Iporanga, n. 171, bairro Boqueirão,<br />Praia Grande/SP, CEP 11701-705.</span></span></p>                   </div>
                                                            </section>


                                        <p class="card-text"><small class="text-muted">GoCare® - 2021</small></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </section>

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