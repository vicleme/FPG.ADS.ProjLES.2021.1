<?php
include_once("conecta.php");

if(!empty($_POST))
{
	$nome = $_POST['fnome'];
    $sobrenome = $_POST['fsobrenome'];
	$genero = $_POST['fgenero'];
	$datanasc = $_POST['fdatanasc'];
	$email = $_POST['femail'];
	$senha = $_POST['fsenha'];
	$telcel = $_POST['ftelcel'];
	
	$senha = md5($senha);

	$sql = "INSERT INTO passageiro(nome, sobrenome, genero, datanasc, email, telcel, senha) 
	VALUES ('${nome}', '${sobrenome}', '${genero}', '${datanasc}', '${email}', '${telcel}', '${senha}')";
  	
   //echo $sql;

   $query = $db->query($sql);
 
	if ($query){
		mysqli_close($db);
		header("Location: acesso.html");exit;
	//    echo "<br>Cadastrado com sucesso!";
	}
	else {
		mysqli_close($db);
		header("Location: logindin.php?msg=2&femail=$email");
	//    echo "<br>Houve um erro no cadastro.";
	}

}
?>