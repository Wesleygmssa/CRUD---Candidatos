<?php   include_once 'includes/header.inc.php'; ?>
<?php include_once 'includes/menu.inc.php' ?>

<div class="row container"> <!-- Criando a container --> 
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr> <!-- inserindo a linha com hr embaixo da consulta -->
		<table class="striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Matricula</th>
					<th>CPF</th>
					<th>RG</th>
					<th>Nome da mãe</th>
					<th>Nome do pai</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				    include_once 'banco_de_dados/read.php'; //pegando o dados read.php
				 ?>
			</tbody>
		</table>
	</div>

</div>


<?php include_once 'includes/footer.inc.php' ?>