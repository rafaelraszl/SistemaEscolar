<?php 
session_start();
include_once 'conexao.php';

$cpf_aluno = filter_input(INPUT_POST, 'cpf_aluno', FILTER_SANITIZE_SPECIAL_CHARS);
$nome      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade     = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$dtnasc    = filter_input(INPUT_POST, 'dtnasc', FILTER_SANITIZE_SPECIAL_CHARS);
$mae       = filter_input(INPUT_POST, 'mae', FILTER_SANITIZE_SPECIAL_CHARS);
$pai       = filter_input(INPUT_POST, 'pai', FILTER_SANITIZE_SPECIAL_CHARS);
$email     = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$endereco  = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone  = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$celular   = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);

/*$id        = $_POST['id'];
$cpf_aluno = $_POST['cpf_aluno'];
$nome      = $_POST['nome'];
$idade     = $_POST['idade'];
$dtnasc    = $_POST['dtnasc'];
$mae       = $_POST['mae'];
$pai       = $_POST['pai'];
$email     = $_POST['email'];
$endereco  = $_POST['endereco'];
$telefone  = $_POST['telefone'];
$celular   = $_POST['celular'];*/

$querySelect = $link->query("select email from tb_alunos");
$array_emails = [];

while($emails = $querySelect->fetch_assoc()) :
	$emails_existentes = $emails['email'];
	array_push($array_emails, $emails_existentes);
endwhile;

if(in_array($email, $array_emails)) :
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um aluno cadastrado com esse email.'."</p>";
	header("Location: ../cadastro_aluno.php");
else:
	$queryInsert = $link->query("insert into tb_alunos values(default, '$cpf_aluno', '$nome', '$idade', '$dtnasc', '$mae', '$pai', '$email', '$endereco', '$telefone', '$celular')");
	$affected_rows = mysqli_affected_rows($link);

	if($affected_rows > 0) :
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."</p>";
		header("Location: ../cadastro_aluno.php");
	endif;
endif;

 ?>