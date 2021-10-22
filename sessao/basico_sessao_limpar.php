<?php
session_start(); // iniciando uma sessao
session_destroy();  // apagando uma sessão
header('Location: basico_sessao.php'); // comando para alterar a url da pagina automaticamente