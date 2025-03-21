<?php
session_start();
//abrir arquivo / a = abrir para a escrita
$arquivo = fopen('../../app_help_desk/arquivo.hd','a');
//montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
$texto = $_SESSION['id'] . '#' . $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;

//escrever
fwrite($arquivo, $texto);

//fechar
fclose($arquivo);


//redirecionar
header('Location: abrir_chamado.php');
?>