<?php session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php'
?>

		<!-- FORMULÁRIO DE CADASTRO -->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/create.php" method="post" class="col s12">
				<fieldset style="border: 1px #ddd solid; border-radius: 10px; padding: 15px" class="formulario">
					<legend><img src="imagens/avatar-01.jpg" alt="[imagem]" width="100" style="border-radius: 20px"></legend>
					<h5 class="light center">Cadastro de Alunos</h5>

					<?php 
						if(isset($_SESSION['msg'])) {

							echo $_SESSION['msg'];
							session_unset();
						}
					 ?>

					 <!-- CAMPO CPF -->
					<div class="input-field col s12">
						<i class="material-icons prefix">assignment_ind</i>
						<input type="text" name="cpf_aluno" id="cpf_aluno" maxlength="15" required autofocus>
						<label for="cpf_aluno">CPF</label>
					</div>

					<!-- CAMPO NOME -->
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" maxlength="40" required>
						<label for="nome">Nome</label>
					</div>

					<!-- CAMPO IDADE -->
					<div class="input-field col s12">
						<i class="material-icons prefix">mood</i>
						<input type="text" name="idade" id="idade" maxlength="11" required>
						<label for="idade">Idade</label>
					</div>

					<!-- CAMPO NASCIMENTO -->
					<div class="input-field col s12">
						<i class="material-icons prefix">child_friendly</i>
						<input type="text" name="dtnasc" id="dtnasc" maxlength="10" required>
						<label for="dtnasc">Data de Nascimento</label>
					</div>

					<!-- CAMPO MÃE -->
					<div class="input-field col s12">
						<i class="material-icons prefix">pregnant_woman</i>
						<input type="text" name="mae" id="mae" maxlength="40" required>
						<label for="mae">Nome da mãe</label>
					</div>

					<!-- CAMPO PAI -->
					<div class="input-field col s12">
						<i class="material-icons prefix">person</i>
						<input type="text" name="pai" id="pai" maxlength="40" required>
						<label for="pai">Nome do Pai</label>
					</div>					

					<!-- CAMPO EMAIL -->
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" maxlength="50" required>
						<label for="email">Email</label>
					</div>

					<!-- CAMPO ENDEREÇO -->
					<div class="input-field col s12">
						<i class="material-icons prefix">map</i>
						<input type="text" name="endereco" id="endereco" maxlength="100" required>
						<label for="endereco">Endereço</label>
					</div>

					<!-- CAMPO TELEFONE -->
					<div class="input-field col s12">
						<i class="material-icons prefix">phone</i>
						<input type="tel" name="telefone" id="telefone" maxlength="15" required>
						<label for="telefone">Telefone</label>
					</div>

					<!-- CAMPO CELULAR -->
					<div class="input-field col s12">
						<i class="material-icons prefix">phone_iphone</i>
						<input type="tel" name="celular" id="celular" maxlength="15" required>
						<label for="celular">Celular</label>
					</div>

					<!-- BOTÕES -->
					<div class="input-field col s12">
						<input type="submit" value="cadastrar" class="btn blue">
						<input type="reset" value="limpar" class="btn red">
					</div>
				</fieldset>
			</form>
		</div>

		<?php include_once 'includes/footer.inc.php' ?>