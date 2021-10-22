<div class="titulo">Require & Return</div>

<?php
$variavelRetorno = require('return_usado.php'); // retornando o valor de uma variável de outro arquivo php
echo "$variavelRetorno <br>";
echo "$variavelRetornada <br>"; // exibindo o valor de uma variável de outro arquivo php

echo __DIR__ . '<br>';  // __DIR__ retorna a pasta

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php'); // Verificando se o arquivo php existe
// var_dump($valorRetorno2);
echo "$valorRetorno2 <br>";
echo "$variavelDeclarada<br>"; // exibibdo o valor da uma variável de outro arquuivo php