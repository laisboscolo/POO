<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
      $this->nome = $nome;
      $this->idade = $idade;  
    }
    // criar variavel igual js
    public function apresentar(){
        echo "Olá, sou {this->nome} e tenho {this->idade}";
    }
}

// Classe Aluno herdadr pessoas
// extends=pegar carecteristicas da class pessoa
class Aluno extends Pessoa{
    public function estudar(){
        echo "{this->nome} está estudando";
    }
}

// A classe Professor herda de Pessoas
class Professor extends Pessoa{
    public function ensinar(){
        echo "Professor {$this->nome} está ensinando";
    }
}

// criando objetos
$thalita = new Aluno ("Thalita", 16);
$rayanne = new Professor ("Rayanne", 54);

$thalita->apresentar();
$thalita->estudar();
$rayanne->ensinar();
$rayanne->apresentar();

?>