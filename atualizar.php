<?php

include_once("config.php"); //conexão com o banco

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE pessoas SET nome='$nome', nascimento='$nascimento', rg='$rg', cpf='$cpf' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);


//conexão com a class Validar (cpfok.php)
if (isset($_POST['registraform']) && !empty($_POST['cpf'])) {
	require "cpfok.php";
	$V = new Validar();

	$cpf = $_POST['cpf'];
	//verificar CPF invalido
	if ($V->ValidarCpf($cpf) == true) {

				//redirecionamento para a página de lista de usuários, atrávez do PHP e JavaScript
				 if ($resultado_usuario) {
				 	echo "<script>window.location.href = 'lista2.php';
 					alert('USUÁRIO ATUALIZADO COM SUCESSO');</script>";
				 }else{
				 	echo "<script>window.location.href = 'lista2.php';
					alert('ERROR: USUÁRIO NÃO FOI ATUALIZADO');</script>";
				 }
		}else{
		echo "<script>window.location.href = 'index.php';
			alert('NÃO FOI POSSÍVEL CADASTRAR, CPF INVÁLIDO');</script>";
	}
}

?>