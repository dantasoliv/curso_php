<div class="titulo">Include</div>

<?php
echo 'Executei essa linha do arquivo include <br>';
include('include_arquivo.php'); // incluindo outro arquivo php ou html na página

echo soma(3, 8) . ' ! <br>'; // chamando a função do arquivo incluido
echo "O conteúdo da variável é '{$variavel}'. <br>"; // Acessando a variável do arquivo incluido
