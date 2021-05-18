<?php
session_start(); 
include_once("conecta.php");


$email = $_POST['fusuario'];
$senha = $_POST['fsenha'];
$senha = md5($senha);
                                  
$sql = "SELECT email, senha FROM passageiro WHERE email = '${email}' AND senha = '${senha}';";

$sqlv = "SELECT email FROM passageiro WHERE email = '${email}';";

$query = $db->query($sql);

$queryv = $db->query($sqlv);
                        
foreach($db->query($sql)as $row)

if ($row>0){
	$_SESSION['passageiro'] = $row['email'];
        mysqli_close($db);       
        header("Location: perfilpassageiro.php");
        //echo "<script>location.href='perfilpassageiro.html';</script>";
        exit;
}

foreach($db->query($sqlv)as $rowv)

if ($rowv>0){
        mysqli_close($db);
        header("Location: acesso.php?msg=2&femail=$email");
        exit;
}

mysqli_close($db);
header("Location: acesso.php?msg=1&femail=$email");
exit;
?>