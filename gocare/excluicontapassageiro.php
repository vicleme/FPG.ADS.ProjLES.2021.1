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

	$motivoexclusao = ($_POST['fmotivoexclusao']);
    $senha = md5($_POST['fsenha']);

	$conferesenha= "SELECT senha FROM passageiro WHERE email= '$login';";
	$queryconf = $db->query($conferesenha);

	foreach($queryconf as $row)
	
	if ($senha==$row['senha']){

		// Selecionando nome da foto do usuário

		$sqldelfoto = "SELECT fotoperfil FROM passageiro WHERE email = '$login';";
		$querydelfoto = $db->query($sqldelfoto);
		foreach($querydelfoto as $nome_foto)

		$sql = "DELETE FROM passageiro WHERE email = '$login';";
		$query = $db->query($sql);

		// Removendo imagem da pasta fotos/
		if ($nome_foto['fotoperfil']!=='passageirodefault.png'){
			unlink("uimg/".$nome_foto['fotoperfil']);
		}

		mysqli_close($db);
		
		if ($query){
			session_destroy();
			header("Location: perfilpassageiroexcluido.php");
			exit;
		} else {
			header("Location: perfilpassageiroexcluir.php?msg=2");
			exit;
		}
	} else {
	header("Location: perfilpassageiroexcluir.php?msg=3");
	exit;
	}
}
?>