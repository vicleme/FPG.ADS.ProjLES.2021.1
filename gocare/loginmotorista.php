<?php

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

session_start(); 
include_once("conecta.php");


$email = $_POST['fusuario'];
$senha = $_POST['fsenha'];
$senha = md5($senha);
                                  
$sql = "SELECT email, senha FROM motorista WHERE email = '${email}' AND senha = '${senha}';";

$sqlv = "SELECT email FROM motorista WHERE email = '${email}';";

$query = $db->query($sql);

$queryv = $db->query($sqlv);
                        
foreach($db->query($sql)as $row)

if ($row>0){
	$_SESSION['motorista'] = $row['email'];
        include_once("reativacontamotorista.php");  
        mysqli_close($db);
        header("Location: perfilmotorista.php");
        //echo "<script>location.href='perfilmotorista.html';</script>";
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