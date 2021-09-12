<?php
class Pessoa { // Criando classe Pessoa

    // Atributos
    public $nome;
    Public $idade;

    function __construct($nome, $idade) { // Método construtor
        $this->nome = $nome;
        $this->idade= $idade;
    }
    
    public function apresentar() { // Método Normal
        return "Nome: {$this->nome}, Idade {$this->idade} anos.";
    }

}


