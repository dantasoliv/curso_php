<div class="titulo">Traits #01</div>

<?php
trait validacao {
    public $a = 'Valor a';
    public function validarString($str) { // Criando uma trait
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor c (privado)';
    public function validarStringmelhor($str) {
        return isset($str)  && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor; // chamando uma trait dentro de uma classe

    public function imprimirValorC() {
        echo '<br>', $this->c;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringmelhor(' '));
echo '<br>';
echo $usuario->a, '<br>' ,$usuario->b;
echo $usuario->imprimirValorC();