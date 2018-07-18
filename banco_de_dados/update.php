<?php 
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

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

$queryUpdate = $link->query("update tb_alunos set cpf_aluno='$cpf_aluno', nome='$nome', idade='$idade', dtnasc='$dtnasc', mae='$mae', pai='$pai', email='$email', endereco='$endereco', telefone='$telefone', celular='$celular' where id='$id'");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0) {
	header("Location: ../consultas_alunos.php");
}


 ?>