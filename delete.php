<?php

include_once("config.php"); //conexão com o banco

$id2 = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$consulta = "DELETE FROM pessoas WHERE id = '$id2'";
$resultado_usuario = mysqli_query($conn, $consulta);

//redirecionamento para a página de lista de usuários, atrávez do PHP e JavaScript
 if ($resultado_usuario) {
 	echo "<script>window.location.href = 'lista2.php';
 	alert('USUÁRIO EXCLUÍDO COM SUCESSO');</script>";
 }else{
 	echo "<script>window.location.href = 'lista2.php';
	alert('ERROR: USUÁRIO NÃO EXCLUÍDO');</script>";
 }
?>