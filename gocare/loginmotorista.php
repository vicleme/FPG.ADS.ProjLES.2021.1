
<?php
session_start(); 

include_once("conecta.php");


$email = $_POST['email'];
$senha = $_POST['senha'];

                                  
$sql = "SELECT * FROM motorista WHERE email = '${email}' AND senha = '${senha}';";


$query = $mysqli->query($sql);
                        
foreach($mysqli->query($sql)as $row)

if ($row>0){
	$_SESSION['motorista'] = $row['email'];
        //desconectar
        mysqli_close($mysqli);
        header("Location: perfilmotorista.php");
        exit;
        
}
?>




