<div class="titulo">Desafio Switch</div>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metros-km">Metros > Km</option>
        <option value="km-metros">Km > Metros</option>
        <option value="celsius > fahrenheit">Celsius para Fahrenheit</option>
        <option value="fahrenheit > celsius">Fahrenheit para Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
if(isset($_POST['param']) && isset($_POST['conversao'])){
    // echo $_POST['param'] . '<br>';
    // echo $_POST['conversao'] . '<br>';
    $valor = $_POST['param'];
    $resultado = 0.0;
    switch ($_POST['conversao']){
        case 'km-milha':;
            $resultado = floatval($valor) * 0.621371;
            break;
        case 'milha-km':;
            $resultado = floatval($valor) / 0.621371;
            break;
        case 'metros-km':;
            $resultado = floatval($valor) / 1000;  
            break;
        case 'km-metros':;
            $resultado = floatval($valor) * 1000;
            break;
        case 'celsius > fahrenheit':;
            $resultado = ($valor * (9/5)) + 32;
            break;
        case 'fahrenheit > celsius':;
            $resultado = ($valor - 32) * (5/9);
            break;
    }   
    echo "Resultado: $resultado";
}


