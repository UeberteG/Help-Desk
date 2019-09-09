<?php 
	session_start();

	//trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//abrindo o arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
	//escrevendo o texto
	$texto =  $_SESSION['id'] . '#' .$titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;
	//fechando o arquivo
	fwrite($arquivo, $texto);

	fclose($arquivo);

	header('Location: abrir_chamado.php');

?>