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

if(!empty($_GET))
	{
	$codtimestamp = $_GET['fcodtimestamp'];

		$sql = "DELETE FROM corridas WHERE codtimestamp = '$codtimestamp';";

		$query = $db->query($sql);

		mysqli_close($db);
		
		if ($query){
			header("Location: corridaspassageiro.php?msg=1");
			exit;
		} else {
			header("Location: corridaspassageiro.php?msg=2");
			exit;
		}
	}
?>