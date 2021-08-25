<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa { // Criando a classe Pessoa
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) // Metodo Construtor
    {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade; 
    }

    function __destruct() // Metodo Destrutor
    {
        echo 'E morreu! <br>';
    }

    public function apresentar() { // Metodo normal
        echo "Nome: {$this->nome}, Idade: {$this->idade} anos <br>";
    }
}

// Classe com metodo construtor é obirigatorio passar parametros na hora de instanciar a classe
$pessoa1 = new Pessoa('Daniel Dantas', 28); // Instanciando uma classe Pessoa com parametros
$pessoa1->apresentar();
unset($pessoa1); // Chamando o metodo destrutor da classe

$pessoa2 = new Pessoa('Maria', 20);
$pessoa2->apresentar();
unset($pessoa2); 