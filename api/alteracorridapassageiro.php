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

	$datav = $_POST['fdatav'];
    $horario = $_POST['fhorario'];
	$enderecosaida = $_POST['fenderecosaida'];
	$cidadesaida = $_POST['fcidadesaida'];
	$enderecochegada = $_POST['fenderecochegada'];
	$cidadechegada = $_POST['fcidadechegada'];
	$observacao = $_POST['fobservacao'];
	$codtimestamp = $_POST['fcodtimestamp'];

		$sql = "UPDATE corridas 
		SET 
		datav = '$datav', 
		horario = '${horario}',
		enderecosaida = '${enderecosaida}',
		cidadesaida = '${cidadesaida}',
		enderecochegada = '${enderecochegada}',
		cidadechegada = '${cidadechegada}',
		observacao = '${observacao}'
		WHERE codtimestamp = '${codtimestamp}';";
	
   $query = $db->query($sql);
 
	if ($query){
		mysqli_close($db);
		header("Location: corridapassageiroaltera.php?msg=2");
		exit;
	}
	else {
		mysqli_close($db);
		header("Location: corridapassageiroaltera.php?msg=1");
		exit;
	}

}
?>