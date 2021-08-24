<div class="titulo">Desafio Classe Data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano} <br>";
    }
} 

$data1 = new Data;

$data2 = new Data;
$data2->dia = 20;
$data2->mes = 3;
$data2->ano = 1993;

$data3 = new Data();
$data3->dia = 14;
$data3->mes = 07;
$data3->ano = 2018;

echo $data1->apresentar();
echo $data2->apresentar();
echo $data3->apresentar();