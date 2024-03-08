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

	$motivodesativacao = ($_POST['fmotivodesativacao']);
    $senha = md5($_POST['fsenha']);

	$conferesenha= "SELECT senha FROM passageiro WHERE email= '$login';";
	$queryconf = $db->query($conferesenha);

	foreach($queryconf as $row)
	
	if ($senha==$row['senha']){
			$sql = "UPDATE passageiro 
			SET 
			motivodesativacao = '${motivodesativacao}',
			contaativa = 0
			WHERE email= '$login';";

			$query = $db->query($sql);

			mysqli_close($db);
			
			if ($query){
				header("Location: perfilpassageirodesativado.php");
				exit;
			} else {
				header("Location: perfilpassageirodesativar.php?msg=2");
				exit;
			}
		} else {
		header("Location: perfilpassageirodesativar.php?msg=3");
		exit;
		}
}
?>