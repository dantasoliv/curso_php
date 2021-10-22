<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>'; // a função time exibe quantidade de segundos dese 01/01/1970 até a data atual
echo date('D, d \d\e M \d\e Y H:i A') . '<br>'; // função para exibir o dia da semana, o mês e o ano e a hora

echo strftime('%A %d de %B de %Y', time()) . '<br>'; // outra função para exibir a data
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8'); // função para traduzir as informações da data para português
echo strftime('%A %d de %B de %Y', time()) . '<br>'; // outra função para exibir a data

$amanha = time() + (24 * 60 * 60); // somando um dia a data
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week'); // somando uma semana a data
echo strftime('%A, %d de %b, de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975); // fixando uma data
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);