<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta
    - Se os dois forem realizados -> TV 50' e Sorvete
    - Se apenas um for executado TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="POST">
    <div>
        <label for="t1">Trbalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="0">Selecione...</option>
            <option value="1">Executado</option>
            <option value="2">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trbalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="0">Selecione...</option>
            <option value="1">Executado</option>
            <option value="2">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.3rem;
    }
</style>

<!--PHP-->
<?php
var_dump(empty($_POST['t1']));
var_dump(empty($_POST['t2']));

if(isset($_POST['t1']) && isset($_POST['t2'])) {

    $trabalhoTerca = $_POST['t1'];
    $trabalhoQuinta = $_POST['t2'];

    if( $trabalhoQuinta == 0 && $trabalhoQuinta == 0 ){
        echo '<br> Por favor selecione todas as opções!';
    }else if(($trabalhoTerca == 0) &&
            ($trabalhoQuinta == 1 || $trabalhoQuinta == 2)
    ){
        echo '<br> Por favor selecione todas as opções!';
    }else if(($trabalhoQuinta == 0) &&
            ($trabalhoTerca == 1 || $trabalhoTerca ==2)
    ){
        echo '<br> Por favor selecione todas as opções!';
    }else{
        if($trabalhoTerca == 1 && $trabalhoQuinta == 1){
            echo '<br> Ir ao Shoping, comprar uma Tv de 50" e tomar sorvete';
        }else if($trabalhoTerca == 1 || $trabalhoQuinta == 1 ){
            echo '<br> Ir ao Shoping, comprae uma Tv de 32" e tomar sorvete';
        }else{
            echo '<br> Ficar em casa, mais saudável!';
        }
    }
}



