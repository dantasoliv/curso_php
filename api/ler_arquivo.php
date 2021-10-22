<div class="titulo">Ler Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'r'); // a função 'r' serve para ler um arquivo
echo fread($arquivo, 10); // função para ler o arquivo com a quantidade de bytes
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo); // função para fechar o arquivo

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt'); // função para verificar o tamanho do artquivo 
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho); // função para exibir o arquivo inteiro
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>'; // função para ler uma linha do arquivo
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) { // função para exibir todas as linhas do arquivo
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) { // função para exibir todas os caracteres do arquivo
    echo fgetc($arquivo);
}
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r+'); // a função 'r+' serve para ler e alterar o arquivo
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdiciaonado durante a leitura"); // adicionando mais uma linha de texto no arquivo
fclose($arquivo);

echo "Fim!";