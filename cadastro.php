<?php 

	include("conexao.php");

	$nome = $_POST['nome'];
	$sobrenome = $_POST['Sobrenome'];
	$cpf = $_POST['CPF'];
	$rg = $_POST['RG'];
	$nome_mae = $_POST['mae'];
	$nome_pai = $_POST['Pai'];

	
	$sql = "SELECT COUNT(CPF) as existe FROM candidatos WHERE CPF = '$cpf' LIMIT 1;";
	$resultado = mysqli_query($conn , $sql);
	$linha = mysqli_fetch_array($resultado);

	if ($linha['existe']){
		echo 'Login ja cadastrado no sistema!';
	}else{	

		$deix = "INSERT INTO candidatos (Nome, Sobrenome, CPF, RG, Nome_Mae, Nome_Pai) VALUES ('$nome', '$sobrenome', '$cpf', '$rg', '$nome_mae', '$nome_pai')";
		$ress = mysqli_query($conn, $deix);

		if($ress){
			echo "<h1>Cadastro Efetuado</h1>";
		}else{
			echo "Error ao Efetuar Cadastro!!";
		}
		
	}

	



 ?>