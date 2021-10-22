<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string<br>'; 
var_dump("Eu também");
echo '<br>';

//concatenação
echo ("Nós tembém" . ' somos'); // O . é utilizado para fazet uma concatenação na linguagem PHP
echo '<br>Número é: ' . 123;
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' ", '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também exixte a função print");
print "<br>Também exixte a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado'); // Essa função deixa as letras MAXIMIZASDAS
echo '<br>' . strtolower('MINIMIZADO'); // Essa função deixa as letras minimizadas
echo '<br>' . ucfirst('só a primeira letra'); // Essa função deixa somente a primeira letra Maximizada
echo '<br>' . ucwords('todas as palavras'); // Essa função deixa todas as primeiras letras de todas as palavras Maximizadas
echo '<br>' . strlen('Quantas letras?'); // Essa função mostas quantas letras tem no texto
echo '<br>' . mb_strlen('Eu também', "utf-8"); // Essa função mostas quantas letras tem no texto excluindo os caracteres especiais
echo '<br>' . substr('Só uma parte mesmo', 7,6); // Essa função seleciona parte de uma string
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); // Essa função substitui as palavaras