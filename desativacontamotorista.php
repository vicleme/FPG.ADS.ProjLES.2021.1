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

	$conferesenha= "SELECT senha FROM motorista WHERE email= '$login';";
	$queryconf = $db->query($conferesenha);

	foreach($queryconf as $row)
	
	if ($senha==$row['senha']){
			$sql = "UPDATE motorista 
			SET 
			motivodesativacao = '${motivodesativacao}',
			contaativa = 0
			WHERE email= '$login';";

			$query = $db->query($sql);

			mysqli_close($db);
			
			if ($query){
				header("Location: perfilmotoristadesativado.php");
				exit;
			} else {
				header("Location: perfilmotoristadesativar.php?msg=2");
				exit;
			}
		} else {
		header("Location: perfilmotoristadesativar.php?msg=3");
		exit;
		}
}
?>