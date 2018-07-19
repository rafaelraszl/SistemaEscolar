<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php'
?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Edição de Registros</h5><hr>
	</div>
</div>

<?php
	include_once 'banco_de_dados/conexao.php'; 

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$_SESSION['id'] = $id;
	$querySelect = $link->query("select * from tb_alunos where id='$id'");

	while($registros = $querySelect->fetch_assoc()) {

		
		$cpf_aluno = $registros['cpf_aluno'];
		$nome = $registros['nome'];
		$idade = $registros['idade'];
		$dtnasc = $registros['dtnasc'];
		$mae = $registros['mae'];
		$pai = $registros['pai'];
		$email = $registros['email'];
		$endereco = $registros['endereco'];
		$telefone = $registros['telefone'];
		$celular = $registros['celular'];
	}
 ?>

 <!-- FORMULÁRIO DE CADASTRO -->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/update.php" method="post" class="col s12">
				<fieldset style="border: 1px #ddd solid; border-radius: 10px; padding: 15px" class="formulario">
					<legend><img src="imagens/avatar-01.jpg" alt="[imagem]" width="100" style="border-radius: 20px"></legend>
					<h5 class="light center">Dados do Aluno</h5>

					<!-- CAMPO ID -->
					<div class="input-field col s12">
						<i class="material-icons prefix">label</i>
						<input type="text" name="id" id="id" value="<?php echo $id ?>" maxlength="11" disabled>
						<label for="id">ID</label>
					</div>

					<!-- CAMPO CPF -->
					<div class="input-field col s12">
						<i class="material-icons prefix">assignment_ind</i>
						<input type="text" name="cpf_aluno" id="cpf_aluno" value="<?php echo $cpf_aluno ?>" maxlength="15" required autofocus>
						<label for="cpf_aluno">CPF</label>
					</div>

					<!-- CAMPO NOME -->
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required>
						<label for="nome">Nome do Aluno</label>
					</div>

					<!-- CAMPO IDADE -->
					<div class="input-field col s12">
						<i class="material-icons prefix">mood</i>
						<input type="text" name="idade" id="idade" value="<?php echo $idade ?>" maxlength="11" required>
						<label for="idade">Idade</label>
					</div>

					<!-- CAMPO NASCIMENTO -->
					<div class="input-field col s12">
						<i class="material-icons prefix">child_friendly</i>
						<input type="text" name="dtnasc" id="dtnasc" value="<?php echo $dtnasc ?>" maxlength="10" required>
						<label for="dtnasc">Data de Nascimento</label>
					</div>

					<!-- CAMPO MÃE -->
					<div class="input-field col s12">
						<i class="material-icons prefix">pregnant_woman</i>
						<input type="text" name="mae" id="mae" value="<?php echo $mae ?>" maxlength="40" required>
						<label for="mae">Nome da mãe</label>
					</div>

					<!-- CAMPO PAI -->
					<div class="input-field col s12">
						<i class="material-icons prefix">person</i>
						<input type="text" name="pai" id="pai" value="<?php echo $pai ?>" maxlength="40" required>
						<label for="pai">Nome do Pai</label>
					</div>

					<!-- CAMPO EMAIL -->
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required>
						<label for="email">Email do Aluno</label>
					</div>

					<!-- CAMPO ENDEREÇO -->
					<div class="input-field col s12">
						<i class="material-icons prefix">map</i>
						<input type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>" maxlength="100" required>
						<label for="endereco">Endereço</label>
					</div>

					<!-- CAMPO TELEFONE -->
					<div class="input-field col s12">
						<i class="material-icons prefix">phone</i>
						<input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required>
						<label for="telefone">Telefone do Aluno</label>
					</div>

					<!-- CAMPO CELULAR -->
					<div class="input-field col s12">
						<i class="material-icons prefix">phone_iphone</i>
						<input type="tel" name="celular" id="celular" value="<?php echo $celular ?>" maxlength="15" required>
						<label for="celular">Celular</label>
					</div>

					<!-- BOTÕES -->
					<div class="input-field col s12">
						<input type="submit" value="alterar" class="btn blue">
						<a href="consulta_aluno.php" class="btn red">cancelar</a>
					</div>
				</fieldset>
			</form>
		</div>


<?php include_once 'includes/footer.inc.php' ?>