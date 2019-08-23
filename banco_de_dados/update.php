
 <?php 
 session_start(); 
 include_once 'conexao.php';

 $id = $_SESSION['id'];
 //Pegando dados do formulario do arquivo editar.php
 $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
 $matricula = filter_input(INPUT_POST,'matricula',FILTER_SANITIZE_SPECIAL_CHARS);
 $cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS);
 $rg = filter_input(INPUT_POST,'rg',FILTER_SANITIZE_SPECIAL_CHARS);
 $nome_mae = filter_input(INPUT_POST,'mae',FILTER_SANITIZE_SPECIAL_CHARS);
 $nome_pai = filter_input(INPUT_POST,'pai',FILTER_SANITIZE_SPECIAL_CHARS);

 $queryUpdate = $link->query("update candidatos set nome='$nome', matricula='$matricula', cpf='$cpf', rg='$rg', nome_mae='$nome_mae', nome_pai='$nome_pai' where id='$id'");
 $affected_rows = mysqli_affected_rows($link); //Se alguma linha dessa for afetada.
 if ($affected_rows > 0) {
 	header("Location:../consultas.php");
 }

