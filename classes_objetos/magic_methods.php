<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) { // Método construtor
        echo 'Construtor Invocado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() { // Método destrutor
        echo '<br> E mooreu! <br>';
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declarado: {$atrib} <br>";
        return $atrib;
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params) {
        echo "Tentando executoar método '${metodo}'";
        echo ", com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // cjamando o método connstrutor __construct
$pessoa->apresentar(); // chamando  o __toString
echo $pessoa, '<br>'; // chamando o __toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar(); // chama o método diretamente sem __call
echo '<br>';
$pessoa->nomeCompleto = 'Muito Legal!!!'; // __set
$pessoa->nomeCompleto; // __get
echo $pessoa->nome; // acessa o atributo diretamente sem __get
echo '<br>';
$pessoa->exec(1, 'teste', [1, 2, 3]); // __call pq o método não existe no objeto

$pessoa = null; // Chamando o método destrutor __destruct