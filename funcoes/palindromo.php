<div class="titulo">Desafio Palindromo</div>

<!-- Prmeira forma do exercicio usando a função do PHP 'strrev' para inverter a palavra-->
<h4>Usando a função do php strrev</h4>
<p>Digite uma palavra:</p>
<form action="#" method="POST">
    <input type="text" name="palavra" value="<?= $_POST['palavra'] ?? '' ?>" id="palavra">
    <button>Verificar</button>
</form>

<?php

if(isset($_POST['palavra'])){

    function palindromo1($palavra){
        // * return $palavra === strrev($palavra) ? 'É um palindromo': 'Não é um palindromo'; // Forma simplificada de usar o If com operador ternario
        if($palavra === strrev($palavra)){
            $palindromo = "É um palindromo";
        }else{
            $palindromo = "Não é um palindromo";
        }
        return $palindromo;
    }  
    echo palindromo1($_POST['palavra']); 
}

?>

<!-- Segunda forma de exercio usando o laço de repetição For para comprar as letras-->
<hr>
<h4>Usando o laço de repetição For</h4>
<p>Digite uma palavra:</p>
<form action="#" method="POST">
    <input type="text" name="palavra2" value="<?= $_POST['palavra2'] ?? '' ?>" id="palavra2">
    <button>Verificar</button>
</form>

<?php


if(isset($_POST['palavra2'])){

    function palindromo2($palavra){
        $ultimoindice = strlen($palavra) - 1;
        for($i = 0; $i <= $ultimoindice; $i++){
            if($palavra[$i] !== $palavra[$ultimoindice - $i]){
                return 'Não é um palindromo';
            }
        }
        return 'É um palindromo';
    }

    echo palindromo2($_POST['palavra2']);

}

?>

<style>
    form{
        margin-bottom: 5px;
    }
    form button{
        border: none;
        font-size: 1rem;
        padding: 2px;
    }
    form button:hover{
        cursor: pointer;
    }
</style>