<?php  
//Fazendo a leitura dos dados no banco.
include_once'conexao.php';

//Pegar a variavel link selecionando todos campos da tabela candidatos.
$querySelect = $link->query("select * from Candidatos"); 
while($registros = $querySelect->fetch_assoc()): // Enquanto minha variavel registro tiver $querySelect (Valor associado)
	$nome = $registros['nome']; //Adicionar na variavel $nome o que esta na variavel $registro porem no indice nome da tabela.
	$matricula = $registros['matricula'];//
	$cpf = $registros['cpf'];
	$rg = $registros['rg'];
	$nome_mae = $registros['nome_mae'];
	$nome_pai = $registros['mome_pai'];// $registros['mome_pai'] dados exatamente igual ao banco.


	//Exibindo uma tabela com os nomes.
	echo "<tr>";
	echo " <td>$nome</td> <td>$matricula</td> <td>$cpf</td> <td>$rg</td> <td>$nome_mae</td> <td>$nome_pai</td> ";
	echo"</tr>";
     endwhile;

