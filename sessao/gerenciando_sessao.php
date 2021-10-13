<div class="titulo">Gerenciando Sessão</div>

<?php
//session_id('eb8qdd6tebferqmv8ipi1o2d0s'); // função para acessar o id de uma sessão
session_start(); // inicoando uma sessão
echo session_id(); // exibindo o id da sessão (coockie)

$contador = &$_SESSION['contador']; // criando um contador para a sessão
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) { // criando uma condição para regenerar o id de sessão
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15) { // criando uma condição para apagar o id de sessão
    session_destroy();
}