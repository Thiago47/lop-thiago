<?php

include_once("config.php"); //conexão com o banco

//variavel de armazenamento de dados do formulario
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

//verificar se o cpf já foi cadastrado no banco
$verificar = mysqli_query($conn, "SELECT * FROM pessoas WHERE cpf = '$cpf'");
//conexão com a class Validar (cpfok.php)
if (isset($_POST['registraform']) && !empty($_POST['cpf'])) {
	require "cpfok.php";
	$V = new Validar();

	$cpf = $_POST['cpf'];
	//verificar CPF invalido
	if ($V->ValidarCpf($cpf) == true) {
		//consultar no banco se o CPF já foi cadastrado
			if(mysqli_num_rows($verificar) > 0){

				echo "<script>window.location.href = 'index.php';
				alert('NÃO FOI POSSÍVEL CADASTRAR, CPF JÁ EXISTE NO BANCO DE DADOS');</script>";
			}
			else{
			//Linha de comando para o banco de dados
			$result_usuario = "INSERT INTO pessoas (nome, nascimento, rg, cpf) VALUES('$nome', '$nascimento','$rg', '$cpf')";

			//processa a informação
			$resultado_usuario = mysqli_query($conn, $result_usuario);

				//redirecionamento para a página de cadastro, atrávez do PHP e JavaScript
				 if ($resultado_usuario) {
				 	echo "<script>window.location.href = 'index.php';
				 	alert('USUÁRIO CADASTRADO COM SUCESSO');</script>";
				 }else{
				 	echo "<script>window.location.href = 'index.php';
					alert('USUÁRIO NÃO FOI CADASTRADO');</script>";
				 }
			}
		}else{
		echo "<script>window.location.href = 'index.php';
			alert('NÃO FOI POSSÍVEL CADASTRAR, CPF INVÁLIDO');</script>";
	}
}
	
?>