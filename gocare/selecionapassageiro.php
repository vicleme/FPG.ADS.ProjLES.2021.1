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
    
$seleciona=mysqli_query($db,"SELECT * FROM passageiro WHERE email= '$login';");
$campo=mysqli_fetch_array($seleciona);
$campo['tempoplat']=date('d/m/Y', strtotime($campo['tempoplat']));
if($campo['genero']=='2'){
    $campo['generoe']='Masculino';
}
?>