 <?php   include_once 'includes/header.inc.php'; ?>
 <?php include_once 'includes/menu.inc.php' ?>
 <?php session_start(); ?>

  <div class="row container">
  	<div class="col s12">
  		<h5 class="light">Edição de registros</h5><hr>
  	</div>
  	
  </div>

  <?php 
     include_once 'banco_de_dados/conexao.php'; //PEGANDO A CONEXAO DO BANCO DE DADOS.
     //PEGANDO DADOS VIA GET QUE VEM DO ARQUIVO READ.PHP LINHA 20.
     $id = filter_input(INPUT_GET,'id' , FILTER_SANITIZE_NUMBER_INT);
     $_SESSION['id'] = $id; //Cirando uma variavel de sessão.
     
     //nome da variavel poder se nome que voce quiser.
     //FAZENDO O SELECT
     $querySelect = $link->query("select * from candidatos where id='$id'");

     while ($registros = $querySelect->fetch_assoc()) {
     	
     	$nome = $registros['nome'];
     	$matricula = $registros['matricula'];
     	$cpf = $registros['cpf'];
     	$rg = $registros['rg'];
     	$nome_mae = $registros['nome_mae'];
     	$nome_pai = $registros['nome_pai']; //pegandos banco de dados
     }

 ?>

 <!--Formulario de cadastro-->
 <!-- Esse fomulario sera direcionado ao update.php onde poder ter o efeito de alteração -->
      <div class="row container">
        <form action="banco_de_dados/update.php" method="post" class="col s12">
          <fieldset class="fomulario">
            <legend><img src="imagens/avatar2.jpg" alt="(imagem)" width="100"></legend>
            <h5 class="light center"> Alteração </h5>
     

            <!-- campo nome -->
            <!-- value="<php echo($nome)?>" pega os valores que vem do 24 do banco de dados-->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="nome" id="nome" maxlength="40" required autofocus value="<?php echo($nome)  ?>">
              <label for="nome">Nome do CLiente</label>
            </div>

             <!-- campo matricula -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="matricula" id="nome" maxlength="40" maxlength="16" value="<?php echo($matricula)?>">
              <label for="nome">Matricula</label>
            </div>

             <!-- campo CPF -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="cpf" id="nome" maxlength="16" value="<?php echo($cpf)?>" >
              <label for="nome">CPF</label>
            </div>


             <!-- campo RG -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="rg" id="nome" maxlength="40" value="<?php echo($rg)?>" >
              <label for="nome">RG</label>
            </div>

             <!-- campo Nome da mãe -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="mae" id="nome" maxlength="40" value="<?php echo($nome_mae)?>" >
              <label for="nome">Nome da Mãe</label>
             </div>
               <!-- campo Nome do pai -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="pai" id="nome" maxlength="40" value="<?php echo($nome_pai)?>">
              <label for="nome">Nome do pai</label>
            </div>

            <!--botões-->
            <div class="inpunt-field col 12">
              <input type="submit" value="Alterar" name="" class="btn blue">
            </div>
            <div class="inpunt-field col 12">
              <a href="consultas.php" class="btn red">Cancelar</a>
            </div>

           
          </fieldset>
        </form>
      </div>

 <?php include_once 'includes/footer.inc.php' ?> 