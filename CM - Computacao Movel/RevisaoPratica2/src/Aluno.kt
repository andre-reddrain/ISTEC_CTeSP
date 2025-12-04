import kotlin.compareTo

/*
    Exercício 1. Cria uma classe Aluno com:
    Atributos:
        • nome
        • idade
        • média
    Métodos:
        • mostrarInfo(): imprime os dados
        • isAprovado(): devolve true se média ≥ 10
 */
class Aluno {
    var Nome: String = "André"
    var Idade: Int = 26
    var Media: Double = 15.0

    fun mostrarInfo() {
        println("Nome: ${this.Nome}")
        println("Idade: ${this.Idade}")
        println("Media: ${this.Media}")
    }

    fun isAprovado(): Boolean {
        return this.Media >= 10
    }
}