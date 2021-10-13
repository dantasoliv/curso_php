<?php
session_start();
if(!$_SESSION['usuario']) { // criando uma condição para verificar se o uruario está logado
    header('Location: login.php'); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= include('template/head.php') ?> <!-- Incluindo o head -->
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            include('template/menu.php'); // Incluindo o menu
            ?>
        </div>
    </main>
    <footer class="rodape">
        <?= include('template/footer.php')?> <!-- Incluindo o rodapé -->
    </footer>
</body>
</html>