<div class="titulo">Desafio do Módulo</div>

<?php
include('usuario.php'); // Incluindo o arquivo uruario.php

// Instanciando a classe Usuario do arquico uruario.php
$usuario = new Usuario('Daniel Dantas Oliveira', 28, 'dantasoliv'); 
// Invocando o método apresentar da clase Usuario
echo $usuario->apresentar();
unset($usuario);