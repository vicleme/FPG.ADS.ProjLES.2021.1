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

$consulta1 = "SELECT * FROM corridas WHERE motorista is null;";
$consulta2 = "SELECT * FROM corridas WHERE motorista = '$login';";
$con1 = $db->query($consulta1) or die($db->error);
$con2 = $db->query($consulta2) or die($db->error);

?>