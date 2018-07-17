<?php 

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_alunos");
while($registros = $querySelect->fetch_assoc()) {
		$id = $registros['id'];
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

	echo "<tr>";
	echo "<td>$id</td><td>$cpf_aluno</td><td>$nome</td><td>$idade</td><td>$dtnasc</td><td>$mae</td><td>$pai</td><td>$email</td><td>$endereco</td><td>$telefone</td><td>$celular</td>";
	echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
	echo "<td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
	echo "</tr>";
}



 ?>