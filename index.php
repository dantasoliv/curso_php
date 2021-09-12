<!DOCTYPE html>
<html lang="en">
<head>
    <?= include('template/head.php') ?>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <?php
            include('template/menu.php');
            ?>
        </div>
    </main>
    <footer class="rodape">
        <?= include('template/footer.php')?>
    </footer>
</body>
</html>