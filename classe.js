// Criando a classe Aluno
class Aluno {
    constructor(nome, idade) {
      // O constructor deve ser um método tradicional
      this.nome = nome;
      this.idade = idade;
    }
  
    estudar = () => console.log(`${this.nome} está estudando.`)
    anos = () => console.log(`tem ${this.idade} anos.`)
    feliz = () => console.log (`A ${this.nome} está feliz`)
  }
   

  // Criando objetos (alunos)
  const pedro = new Aluno("Pedro", 17);
  
  console.log(pedro.nome); // Pedro
  pedro.estudar(); // Pedro está estudando.
  pedro.anos();
  pedro.feliz();

  const giovanna = new Aluno("giovanna", 17);

  console.log(giovanna.nome.idade);
  giovanna.estudar();
  giovanna.anos();
  giovanna.feliz();


 