<div class="titulo">Datas #02</div>

<?php
// criando o formato das datas
$formatoData1 = 'D, d \d\e\ M \d\e Y';
$formatoData2 = '%A, %d, de %B, de %Y';
$formatoDataHora = '%A, %d, de %B de %Y - %H:%M:%S';

$agora = new DateTime();

print_r($agora);
echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'pt_BR'); // traduzondo o formato da data para português
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$dataFixa = new DateTime('1975-01-25 15:30:50'); // setando uma data fixa

$amanha = new DateTime('+2 day'); // acresentando mais dois dias a data
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

$amanha->modify('+1 day'); // acresentando + 1 dia na data
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000, 5, 20); // setando uma data fixa
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');
echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>'; // Comparando datas com operação ternaria
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo ($outraData == $dataFutura ? 'Igual' : 'Diferente');

echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo'); // alterando o TimeZone
$agora = new DateTime(null, $tz);
echo $agora->format('d/M/Y H:i:s');
