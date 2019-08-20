<?php 
	
	require_once("conexao.php");

	$sql = "SELECT * FROM candidatos;";
	$resultado = mysqli_query($conn , $sql);
	

	while ( $row = mysqli_fetch_array($resultado)) {
		echo "Nome: ", $row['Nome'] , "<br>";
		echo "Sobrenome: ", $row['Sobrenome'], "<br>";
		echo "CPF: ", $row['CPF'], "<br>";
		echo "RG: ", $row['RG'], "<br>";
		echo "Nome da Mae: ", $row['Nome_Mae'], "<br>";
		echo "Nome do Pai: ", $row['Nome_Pai'], "<br>";
		echo "==============<>=============", "<br>";
		echo "=============================", "<br>";
		echo "==============<>=============", "<br>";
	}

 ?>