<?php
include_once("conecta.php");
session_start(); 

    if ( (!empty($_SESSION['motorista'])) || (!empty($_SESSION['passageiro'])) ){
        if (!empty($_SESSION['motorista'])) {
            $login = $_SESSION['motorista'];
        } else {
            $login = $_SESSION['passageiro'];
        }
    }

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

if(!empty($_POST))
{

	$nome = $_POST['fnome'];
    $sobrenome = $_POST['fsobrenome'];
	$fotoperfil = $_FILES['ffotoperfil'];
	$genero = $_POST['fgenero'];
	$email = $_POST['femail'];
	$telcel = $_POST['ftelcel'];
	$idioma = $_POST['fidioma'];

	if (!empty($fotoperfil["name"])) {
        
        $error = array();
        // Verifica se o arquivo é uma imagem

        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $fotoperfil["type"])){
			mysqli_close($db);
			header("Location: perfilpassageiroedita.php?msg=3");
			exit;
            $error[1] = "O arquivo enviado não é uma imagem.";
            } 
    
        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $fotoperfil["name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "uimg/" . $nome_imagem;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($fotoperfil["tmp_name"], $caminho_imagem);
        
            // Variável para inserir os dados no banco
			$sql = "UPDATE passageiro 
			SET 
			nome = '${nome}', 
			sobrenome = '${sobrenome}',
			fotoperfil = '${nome_imagem}',
			genero = '${genero}',
			email = '${email}',
			telcel = '${telcel}',
			idioma = '${idioma}'
			WHERE email= '$login';";

		} else {
			// Se houver mensagens de erro, exibe-as
			if (count($error) != 0) {
				foreach ($error as $erro) {
					echo $erro . "<br />";
				}
			exit;
			}
		}

	} else {

		$sql = "UPDATE passageiro 
		SET 
		nome = '${nome}', 
		sobrenome = '${sobrenome}',
		genero = '${genero}',
		email = '${email}',
		telcel = '${telcel}',
		idioma = '${idioma}'
		WHERE email= '$login';";

	}
	
   $query = $db->query($sql);
 
	if ($query){
		mysqli_close($db);
		header("Location: perfilpassageiroedita.php?msg=1");
		exit;
	}
	else {
		mysqli_close($db);
		header("Location: perfilpassageiroedita.php?msg=2");
		exit;
	}

}
?>