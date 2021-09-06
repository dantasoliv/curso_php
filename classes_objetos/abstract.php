<div class="titulo">Classe Abstrata</div>

<?php
abstract class Abstrata { // Criando uma classe abstrata
    public abstract function metodo1(); // Criando um método abstrato
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata { // Classe abstrata herdando de outra classe abstrata
    public function metodo1() {
        echo "Executando método 1 <br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata { // Criando uma classe concreta herdando de uma classe abstrata
    public function metodo1() {
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro) {
        echo "Executando método 2, com parêmetro $parametro <br>";
    }

    public function metodo3() {
        echo "Executando metodo 3 <br>";
        $this->metodo2('interno');
    }
    
}

$c = new Concreta();
$c->metodo1();
//$c->metodo2('externo');
$c->metodo3();

echo '<br>';
var_dump($c);

echo '<br>';
var_dump($c instanceof Concreta);
var_dump($c instanceof FilhaAbstrata);
var_dump($c instanceof Abstrata);