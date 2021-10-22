<div class="titulo">Tray/Catch</div>

<?php
// echo 7/0;
// echo intdiv(7, 0);

try { // iniciando um bloco try
    echo intdiv(7, 0);
} catch(Error $e) {  // Tió do erro
    echo 'Teve um erro aqui<br>';
}

try {
    throw new Exception('Um erro muito estranho aconteceu'); // iniciando uma exceção
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch(Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado<br>';
}

echo 'Execução continua... <br>';