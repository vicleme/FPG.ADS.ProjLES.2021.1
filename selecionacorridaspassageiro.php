<?php
include("conecta.php");
session_start(); 

    if ( (!empty($_SESSION['motorista'])) || (!empty($_SESSION['passageiro'])) ){
        if (!empty($_SESSION['motorista'])) {
            $login = $_SESSION['motorista'];
        } else {
            $login = $_SESSION['passageiro'];
        }
    }

/* Informa o nível dos erros que serão exibidos */
//error_reporting(E_ALL);
	 
/* Habilita a exibição de erros */
//ini_set("display_errors", 1);

/* $seleciona=mysqli_query($db,"SELECT * FROM corridas WHERE passageiro = '$login';");
$campocorridas=mysqli_fetch_array($seleciona);
$campocorridas['datav']=date('d/m/Y', strtotime($campocorridas['datav']));
$campocorridas['horario']=date('h:m', strtotime($campocorridas['horario'])); */

$consulta = "SELECT * FROM corridas WHERE passageiro = '$login';";
$con = $db->query($consulta) or die($db->error);

?>