<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w'); // função para criar um arquivo
fwrite($arquivo, "Valor Inicial\n"); // função para escrever no arquivo (\n serve para quebrar a linha)
$str = "Segunda linha\n";
fwrite($arquivo, $str); // adicionando mais uma linha no arquivo
fclose($arquivo); // função para fechar o arquivo

$arquivo = fopen('teste.txt', 'w'); // reescrevendo o arquivo
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a'); // 'a' serve para adicionar uma nova linha no arquivo
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x'); // 'x' serve para verificar se existe um arquico com o mesmo nome