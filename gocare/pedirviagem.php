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
	$enderecosaida = $_POST['fenderecosaida'];
    $cidadesaida = $_POST['fcidadesaida'];
	$enderecochegada = $_POST['fenderecochegada'];
	$cidadechegada = $_POST['fcidadechegada'];
	$horario = $_POST['fhorarioviagem'];
	$datav = $_POST['fdataviagem'];
	$observacao = $_POST['fobservacaoviagem'];
	$passageiro = $_POST['fpassageiro'];
	

	$sql = "INSERT INTO corridas(enderecosaida, cidadesaida, enderecochegada, cidadechegada, horario, datav, observacao, passageiro) 
	VALUES ('${enderecosaida}', '${cidadesaida}', '${enderecochegada}', '${cidadechegada}', '${horario}', '${datav}', '${observacao}', '${passageiro}')";
	
	$query = $db->query($sql);
	
	if ($query){
		mysqli_close($db);
		header("Location: viagempedir.php?msg=2");
		exit;
	}
	else {
		mysqli_close($db);
		header("Location: viagempedir.php?msg=1");
		exit;
	}

}
?>