<?php 
  session_start(); //iniciando sesssão.Para exibir a mensagem da sessão da arquivo create.php?> 
  <?php   include_once 'includes/header.inc.php'; ?>
  <?php include_once 'includes/menu.inc.php' ?>

      
      <!--Formulario de cadastro-->
      <div class="row container">
        <form action="banco_de_dados/create.php" method="post" class="col s12">
          <fieldset class="fomulario">
            <legend><img src="imagens/avatar2.jpg" alt="(imagem)" width="100"></legend>
            <h5 class="light center"> Cadastro de Clientes</h5>
            <?php  
                if (isset($_SESSION['msg'])) { /* Verificando se a variael reamente existe.*/
                    echo $_SESSION['msg'];     /*exibindo a mensagem na tela*/
                    session_unset();           /*limpando pra não ficar exibindo na tela*/
                }


            ?>

            <!-- campo nome -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
              <label for="nome">Nome do CLiente</label>
            </div>

             <!-- campo matricula -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="matricula" id="nome" maxlength="40" maxlength="16" value="000.000.000.00">
              <label for="nome">Matricula</label>
            </div>

             <!-- campo CPF -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="cpf" id="nome" maxlength="16" value="000.000.000.00" >
              <label for="nome">CPF</label>
            </div>


             <!-- campo RG -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="rg" id="nome" maxlength="40" value="" >
              <label for="nome">RG</label>
            </div>

             <!-- campo Nome da mãe -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="mae" id="nome" maxlength="40" >
              <label for="nome">Nome da Mãe</label>
             </div>
               <!-- campo Nome do pai -->
            <div class="input-field col s12">
              <i class="material-icons prefix"></i>
              <input type="text" name="pai" id="nome" maxlength="40" >
              <label for="nome">Nome do pai</label>
            </div>

            <!--botões-->
            <div class="inpunt-field col 12">
              <input type="submit" value="Cadastrar" name="" class="btn blue">
            </div>
            <div class="inpunt-field col 12">
              <input type="reser" value="Limpar" name="" class="btn red">
            </div>

           
          </fieldset>
        </form>
      </div>



      <?php include_once 'includes/footer.inc.php' ?>

       