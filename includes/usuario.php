<?php
include('pessoa.php'); // Incluindo o arquivo pessoa.php

class Usuario extends Pessoa { // Criando classe Usuario herdando da classe Pessoa do arquivo pessoa.php

    function __construct($nome, $idade, $login) { // Método Construtor
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    public function apresentar() { // Método Normal
        $login =  "@{$this->login}: ";
        return $login . parent::apresentar();
    }

}