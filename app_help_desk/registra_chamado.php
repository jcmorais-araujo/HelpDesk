<?php

session_start();

// os arrays estão relacionados com a "tag' NAME que foi adicionada aos input, select e textArea no arquivo abrir_chamado

// PHP_EOL é uma forma de quebrar as linhas para separar os chamados, caso não fizesse isso
// ficaria tudo junto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);


$texto = $_SESSION['id']. '#' . $titulo. '#' .$categoria . '#' . $descricao . PHP_EOL; 
  
// Abrindo o arquivo

// esse parametro aceita dois valores
// Função nativa do PHP para esvrever "texto" => fopen();

$arquivo = fopen('arquivo.hd', 'a'); //Nesse valor a.. pode ser algumas variáveis que estão disponíveis na documentação... Cada variável dessa é responsavel por uma coisa diferente

// Escrevendo o texto
fwrite($arquivo, $texto);

// Fechando o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php');

// echo '<br/>';
// echo $texto;

?>