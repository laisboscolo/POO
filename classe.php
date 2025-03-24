<?php
// reescevendo pra php do js
class Aluno {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
     $this->nome = $nome;
     $this->idade = $idade;
    }
    // variavel estudar
    public function estudar(){
        echo "{$this->nome} está estudando e tem {$this->idade}";
    }
}

// CRIANDO OBJETOS
$dani = new Aluno ("Dani", 15);
$lais = new Aluno ("Lais", 16);

echo $dani->nome;
$lais->estudar()
?>