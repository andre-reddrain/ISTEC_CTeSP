/* Exercício 1 - Pessoa
Criar uma classe Pessoa com as propriedades nome e idade
Adicionar uma função apresentar() que mostra no ecrã:
    "Olá, o meu nome é [nome] e tenho [idade] anos."
No main(), criar 2 pessoas e chamar a função apresentar()
 */
class Pessoa {
    var nome: String = "Nome"
    var idade: Int = 1

    fun apresentar() {
        println("Olá, o meu nome é ${this.nome} e tenho ${this.idade} anos.")
    }
}