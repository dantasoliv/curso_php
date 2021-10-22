<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <select name="estado" id="">
        <option value="SP">São Paulo</option>
        <option value="PR">Paraná</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>' . count($_POST);
echo '<br>' . $_POST["nome"];