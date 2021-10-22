<div class="titulo">Sessão</div>

<?php
session_start(); // iniciando uma sessão
// sessão é uma array e serve para guardar o estado da aplicação

print_r($_SESSION); // exibindo ibformações sobre a sessão
echo '<br>';

if(!$_SESSION['nome']) { // colocando uma informação em uma chave da sessão usando if
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION) // exibindo informações sobre a sessão

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>
