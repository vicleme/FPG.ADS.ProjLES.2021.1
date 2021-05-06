<?php
include_once("conecta.php");

if(!empty($_POST))
{
	$email = $_POST['email'];
	$nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
	$senha = $_POST['senha'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$celular = $_POST['celular'];
	$termo = $_POST['termo'];

	// verifica se usuario já existe

	$senha = md5($senha);
	
    // Insere usuário
	$sql = "INSERT INTO motorista (email,nome,sobrenome,senha,endereco,cidade,celular,termo) 
  VALUES 
  ( '${email}',
  '${nome}',
  '${sobrenome}',
   '${senha}',
   '${endereco}',
  '${cidade}',
  '${celular}',
'${termo}')";
  	
   echo $sql; 
   $query = $mysqli->query($sql);
 
	if ($query){
	  mysqli_close($mysqli);
	  header("Location: loginpage.html");exit;
	  echo "Cadastrado com sucesso";
	}
	else{
		mysqli_close($mysqli);
        header("Location: loginpage_form.php?msg=2&email=$email");    
        echo "Não cadastrado";
	}
	
}else {
	echo "Não dá";
}
?>

