<div class="titulo">Include Função</div>

<?php
echo 'Carregando include_funcao <br>';

function carregandoArquivo() { // Criando uma função / método
    include('include_arquivo.php'); // incluindo um arquivo php na função

    echo $variavel . '<br>'; // usando a variável do arquivo incluido dentro da função
    echo soma(2, 5) . '<br>'; // usendo a função do arquivo incluido na função
}

echo 'Novamente no arquivo include_funcao <br>';
//echo soma(1, 8) . '<br>';
carregandoArquivo(); // incovando a função / método
//echo "Variável = '{$variavel}'.";
echo soma(3, 8); // incocando a função soma do arquivo incluido pela função