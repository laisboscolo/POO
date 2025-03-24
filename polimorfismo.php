<?php

class Pessoa {
    public $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function apresentar(){
        echo "Olá, sou {$this->nome}";
    }
}

// a classe Aluno Herda de Pessoa e sobrescreve o metodo apresentar

class Aluno extends Pessoa{
    public function apresentar()
    {
        echo "Oii! Meu nome é {$this->nome} e sou seu aluno";
    }
}

class Professor extends Pessoa{
    public function apresentar()
    {
        echo "Oi! Eu sou o Professor {$this->nome}";
    }
}

// objetos
$daniluski = new Aluno("Daniluski", 17);
$isa = new Professor("isa", 17);

echo $daniluski->apresentar();
echo $isa->apresentar();
?>