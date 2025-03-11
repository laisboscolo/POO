class Pessoa {
    constructor(nome){
        if(this.constructor === Pessoa) {
            throw new Error ("Não pode criar este objeto")
        }

        this.nome = nome;
    }
}

class Aluno extends Pessoa{
    apresentar = () => console.log(`Olá meu nome é ${this.nome}`);
   }

const lais = new Aluno("Lais")

lais.apresentar();

// Explicaçao

// -A classe *pessoa* não pode ser instanciada diretamente. 
// -*IF* no *CONSTRUCTOR* impede que objetos iguais sejam criados
// -o *Aluno* herda de pessoa, então pode ser instanciado normalmente.
// -Isso garante que *Pessoa* funcione como modelo para outras classes e que não seja repetidas.
