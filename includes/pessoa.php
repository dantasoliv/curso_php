<?php
class Pessoa { // Criando classe Pessoa

    // Atributos
    public $nome;
    Public $idade;

    function __construct($nome, $idade) { // Método construtor
        $this->nome = $nome;
        $this->idade= $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct() { // Método destrutor
        echo 'Pessoa diz: Tchau!';
    }
    
    public function apresentar() { // Método Normal
        echo "Nome: {$this->nome}, Idade {$this->idade} anos. <br>";
    }

}


