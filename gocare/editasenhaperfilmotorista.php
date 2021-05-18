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

	$senhaantiga = md5($_POST['fsenhaantiga']);
    $novasenha = md5($_POST['fnovasenha']);
	$confnovasenha = md5($_POST['fconfnovasenha']);

	$conferesenhaantiga = "SELECT senha FROM motorista WHERE email= '$login';";
	$queryconf = $db->query($conferesenhaantiga);

	foreach($queryconf as $row)
	
	if ($senhaantiga==$row['senha']){
		if($novasenha==$confnovasenha){
			$sql = "UPDATE motorista 
			SET 
			senha = '${novasenha}'
			WHERE email= '$login';";

			$query = $db->query($sql);

			mysqli_close($db);
			
			if ($query){
				header("Location: perfilmotoristaeditasenha.php?msg=1");
				exit;
			} else {
				header("Location: perfilmotoristaeditasenha.php?msg=2");
				exit;
			}
		} else {
			header("Location: perfilmotoristaeditasenha.php?msg=4");
			exit;
		}
	} else {
		header("Location: perfilmotoristaeditasenha.php?msg=3");
		exit;
	}
}
?>