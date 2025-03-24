<!-- js -->
<!-- class Aluno{
    #nota
    constructor(nome, idade, nota) {
        //O constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
        this.#nota = nota;
        // # e pra "privar"
    }
    feliz = () => console.log (`${this.nome} de ${this.idade} anos está feliz por ter tirado ${this.#nota} pontos na prova de biologia.`);
}

const pedro = new Aluno("Pedro" , 17 , 72)

pedro.feliz(); -->

<!-- php -->

<?php
class Aluno{
    public $nome;
    public $idade;
    // private e para privar
    private $nota;

    public function __construct($nome, $idade, $nota)
    {
     $this->nome = $nome;
     $this->idade = $idade;
     $this->nota = $nota;
    }
    public function verNota(){
        return $this->nota;
    }
}

$dani = new Aluno ("Dani", 16, 9);

echo $dani->nome;
echo $dani->verNota();
?>
