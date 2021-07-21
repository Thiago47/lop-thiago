<?php

include_once("config.php"); //conexão com o banco

//variavel de armazenamento de dados do formulario
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$municipio = filter_input(INPUT_POST, 'municipio', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$sites = filter_input(INPUT_POST, 'sites', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$email1 = filter_input(INPUT_POST, 'email1', FILTER_SANITIZE_STRING);
$email2 = filter_input(INPUT_POST, 'email2', FILTER_SANITIZE_STRING);
$ie = filter_input(INPUT_POST, 'ie', FILTER_SANITIZE_STRING);
$im = filter_input(INPUT_POST, 'im', FILTER_SANITIZE_STRING);
$situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);

	
//Linha de comando para o banco de dados
$result_usuario = "INSERT INTO cliente (cnpj, codigo, empresa, cep, endereco, bairro, municipio, uf, complemento, sites, telefone, email1, email2, ie, im, situacao) VALUES('$cnpj' , '$codigo' , '$empresa' , '$cep' , '$endereco' , '$bairro' , '$municipio' , '$uf' , '$complemento' , '$sites' , '$telefone' , '$email1' , '$email2' , '$ie' , '$im' , '$situacao')";

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
?>