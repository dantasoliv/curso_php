<?php
session_start(); // iniciando sessão
session_destroy();  // saindo da sessão
unset($_COOKIE['usuario']); // linpando o cookie
setcookie('usuario', ''); // limpando cookie
header('Location: login.php'); // Voltando para a tela de login