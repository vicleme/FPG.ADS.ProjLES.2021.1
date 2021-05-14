<?php
session_start(); 
include_once("conecta.php");


$email = $_POST['fusuario'];
$senha = $_POST['fsenha'];
$senha = md5($senha);
                                  
$sql = "SELECT email, senha FROM motorista WHERE email = '${email}' AND senha = '${senha}';";

$query = $db->query($sql);
                        
foreach($db->query($sql)as $row)

if ($row>0){
	$_SESSION['motorista'] = $row['email'];
        mysqli_close($db);       
        header("Location: perfilmotorista.html");
        //echo "<script>location.href='perfilmotorista.html';</script>";
        exit;
}

mysqli_close($db);
header("Location: perfilmotorista.html");
exit;
?>