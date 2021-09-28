<div class="titulo">Erros Personalizados</div>

<?php

class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
       // echo "Erro personalizado $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if($idade < 18) {
        throw new FaixaEtariaException('Ainda está muito longe');
    }
    if($idade > 70) {
        throw new FaixaEtariaException('Já deveria estar aposentado');
    }
    return 70 - $idade;
}

$idadesAvalidadas = [15, 30, 60, 80];

foreach($idadesAvalidadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br>";
    } catch(FaixaEtariaException $e) {
        echo"Não foi possivel calcular para idade $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo "Fim!";
