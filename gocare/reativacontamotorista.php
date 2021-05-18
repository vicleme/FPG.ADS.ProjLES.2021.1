<?php
include_once("conecta.php");

if(session_id() == ''){
	session_start();
}

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

$confereativacao= "SELECT contaativa FROM motorista WHERE email= '$login';";
$queryconf = $db->query($confereativacao);

foreach($queryconf as $row)
	
if ($row['contaativa']==0){

	$sql = "UPDATE motorista 
	SET 
	contaativa = 1
	WHERE email= '$login';";

	$query = $db->query($sql);

	mysqli_close($db);

	if ($query){
		header("Location: perfilmotoristareativado.php");
		exit;
	} else {
		header("Location: perfilmotoristadesativado.php?msg=2");
		exit;
	}

}

?>