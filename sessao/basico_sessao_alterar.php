<?php
session_start(); // iniciando uma sessão
print_r($_SESSION); // exibindo informações sobre a sessão 
?>

<?php
$_SESSION['email'] = 'gabrielfilho_alterado@emaillaz.com.br'; // alterando a chace email da sessão
?>

<p>
    <b>Nome:</b> <?= $_SESSION['nome'] ?>
    <b>Email:</b> <?= $_SESSION['email'] ?>
</p>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>