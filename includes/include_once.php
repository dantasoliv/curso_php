<div class="titulo">Include Once</div>

<?php
include('include_once_arquivo.php'); // incluindo um arquivo 
// require('inclide_once_arquivo.php');

echo "Variável  = '{$variavel}'<br>"; // exibindo uma variável de outro arquivo php
$variavel = 'Variável Alterada'; // alterando uma variável de outro arquivo php
echo "Variável = '{$variavel}'<br>"; // exibindo a variavel

include('include_once_arquivo.php');
echo "Variável = '{$variavel}'<br>";
$variavel = 'Variavel alterada';
echo "Variável = '{$variavel}'<br>";

include_once('include_once_arquivo.php'); // include_once inclui o arquivo mas não redefine as variáveis do arquivo
echo "Variável = '{$variavel}'<br>";

require_once('include_once_arquivo.php'); // require_once inclui o arquivo mas não redefine as variáveis do arquivo
echo "Variável = '{$variavel}'<br>";