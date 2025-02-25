// Criando a classe Aluno
class pessoa {
    constructor(nome, idade) {
      // O constructor deve ser um método tradicional
      this.nome = nome;
      this.idade = idade;
    };

    apresentar = () => console.log (`Olá, sou ${this.nome} e tenho ${this.idade} anos `);
}

class Aluno extends pessoa{
 estudar = () => console.log(`${this.nome} está estudando`)
}

class Professor extends pessoa{
 ensinar = () => console.log(`Professor ${this.nome} está ensinando`)
}


// objeto

const pedro = new Aluno ("Pedro" , 17)
const raul = new Professor ("Raul", 28)
const lais = new Aluno ("Laís" , 16)
const nadja = new Professor ("Nadja" , 28)
 

pedro.apresentar();
raul.apresentar();
pedro.estudar();
raul.ensinar();
lais.apresentar();
nadja.apresentar();
lais.estudar();
nadja.ensinar();
