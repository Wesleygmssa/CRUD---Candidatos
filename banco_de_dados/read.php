<?php  
//Fazendo a leitura dos dados no banco.
include_once'conexao.php';

//Pegar a variavel link selecionando todos campos da tabela candidatos.
$querySelect = $link->query("select * from Candidatos"); 
while($registros = $querySelect->fetch_assoc()){// Enquanto minha variavel registro tiver $querySelect (Valor associado)
    $id = $registros['id'];
	$nome = $registros['nome']; //Adicionar na variavel $nome o que esta na variavel $registro porem no indice nome da tabela.
	$matricula = $registros['matricula'];//
	$cpf = $registros['cpf'];
	$rg = $registros['rg'];
	$nome_mae = $registros['nome_mae'];
	$nome_pai = $registros['nome_pai'];// $registros['mome_pai'] dados exatamente igual ao banco.


	//Exibindo uma tabela com os nomes.
	//fazendo o include desse arquivo para consultas.php 
	echo "<tr>";
	echo " <td>$nome</td> <td>$matricula</td> <td>$cpf</td> <td>$rg</td> <td>$nome_mae</td> <td>$nome_pai</td>       <td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></td>   <td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></td> ";
	echo"</tr>";


	//<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></td> --> direcionando para parte de edição.php dos dados no banco de dados. linha 20.
	//Linha 21 direcionando para delete.php para deletar direto do banco. 
 }

