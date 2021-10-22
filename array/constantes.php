<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['Laranja', 'Abacaxi'];
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = array("Fiat" => "Uno", "Ford" => "Fiesta");
//CARROS("BMW") = '325I';
echo '<br>' . CARROS["Fiat"];

define('Cidades', array('Belo Horizonte', 'Recife'));
//Cidades[] = 'São paulo';
echo '<br>' . Cidades[1];