<?php 
session_start(); //Iniciando a variavel de sessão $_SESSION['msg']
include_once 'conexao.php';

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS); //TIPO DE FILTRO name="nome"
$matricula = filter_input(INPUT_POST,'matricula',FILTER_SANITIZE_SPECIAL_CHARS); //TIPO DE FILTRO name="matricula"
$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS); //TIPO DE FILTRO
$rg = filter_input(INPUT_POST,'rg',FILTER_SANITIZE_SPECIAL_CHARS); //TIPO DE FILTRO -> name="rg"
$mae = filter_input(INPUT_POST,'mae',FILTER_SANITIZE_SPECIAL_CHARS); //TIPO DE FILTRO
$pai = filter_input(INPUT_POST,'pai',FILTER_SANITIZE_SPECIAL_CHARS); //TIPO DE FILTRO 

$querySelect = $link->query("select cpf from Candidatos"); // selecionando a tabela candidados
$array_cpfs = []; //criando o array para jogar as informações dentro.

                  
                    /* 1.Fazendo a verificão se existe um cpf cadastrado*/
                    /*1.1 Listagem */
/*Enquanto houver um valor associado a minha query então armaze na minha variavel $cpfs.*/
while($cpfs = $querySelect->fetch_assoc()): 
      $cpfs_existentes = $cpfs['cpf'/*campo cpf da tabela*/]; /*Trabalha como se fosse um array os indices são os nome dos campos*/
      array_push($array_cpfs, $cpfs_existentes);/* coloca dentro de um array que vem do banco dados.*/
      /*colocando os cpfs cadastrados dentro $array_cpfs*/
   
endwhile;
                           /*1.1 Listagem fim */


if (in_array($cpf,$array_cpfs)) {/* se no $array_cpfs estiver o $cpf cadastrado*/
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cliente cadastrado com esse email'."</p>";
	header("Location:../index.php");/* se existir direcionar o usuário para index.php*/
}else{
                             /* 1.Fim da verificação se existe um cpf cadastrado*/

	                     /* 2. se não houver cpf cadastrado inserir no banco de dados*/

$queryInsert = $link->query("insert into candidatos values (default,'$nome','$matricula','$cpf','$rg','$mae','$pai'); ");
	$affected_rows = mysqli_affected_rows($link); /* verificar se alguma linha foi afetada.*/

	if ($affected_rows > 0) {
      $_SESSION['msg'] = "<p class= 'center green-text' >".'Casdastro efetuado com sucesso!'."</p>";
      header("Location:../index.php");
	
	}
}
                                /* 2. fim da da inclusão dos dados no banco*/


                  




?>