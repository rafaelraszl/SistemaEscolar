<?php session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<!-- FORMULÁRIO DE CADASTRO USUÁRIOS -->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="cadastro.php" method="post" class="col s12">
				<fieldset style="border: 1px #ddd solid; border-radius: 10px; padding: 15px" class="formulario">
					
					<h5 class="light center">Cadastro de Usuários</h5>

					<?php 
						if(isset($_SESSION['msg'])) {

							echo $_SESSION['msg'];
							session_unset();
						}
					 ?>

					 <!-- CAMPO LOGIN -->
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="login" id="login" maxlength="30"autofocus>
						<label for="login">Login</label>
					</div>

					<!-- CAMPO SENHA -->
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input type="password" name="senha" id="senha" maxlength="40">
						<label for="senha">Senha</label>
					</div>

					<!-- BOTÕES -->
					<div class="input-field col s12">
						<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn blue">
						<input type="reset" value="limpar" class="btn red">
					</div>
				</fieldset>
			</form>

<?php include_once 'includes/footer.inc.php' ?>