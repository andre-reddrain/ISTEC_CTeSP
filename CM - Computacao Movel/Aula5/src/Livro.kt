/* Exercício 2 - LivroSimplificado
Criar uma classe Livro com titulo e autor
Adicionar uma função descricao() que imprime:
    "O livro [titulo] foi escrito por [autor]."
Criar 2 livros no main()
 */
class Livro {
    var titulo: String = ""
    var autor: String = ""

    fun descricao() {
        println("O livro ${this.titulo} foi escrito por ${this.autor}.")
    }
}