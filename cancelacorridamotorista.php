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
	$codtimestamp = $_POST['fcodtimestamp'];

		$sql = "UPDATE corridas 
		SET 
		motorista = null,
		statuscorrida = 'Aguardando morotista'
		WHERE codtimestamp = '${codtimestamp}';";
	
   $query = $db->query($sql);
 
	if ($query){
		mysqli_close($db);
		header("Location: corridasmotorista.php?msg=3");
		exit;
	}
	else {
		mysqli_close($db);
		header("Location: corridasmotorista.php?msg=2");
		exit;
	}

}
?>