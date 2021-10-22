<div class="titulo">Incluve vs Require</div>

<?php

echo 'Usando include com arquivo inexistente... <br>';
include('arquivo_inexistente.php');

// ini_set('display_errors', 1); // Coando para mostrar os erros no código

echo 'Usando require com arquivo inexistente... <br>';
require('arquivo_inexixtente.php');