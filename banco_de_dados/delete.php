<?php 

include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$queryDelete = $link->query("delete from tb_alunos where id='$id'");

if(mysqli_affected_rows($link) > 0){
	header("Location: ../cosulta_aluno.php");
}



 ?>