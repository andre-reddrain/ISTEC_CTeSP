fun main() {
    // Exercício 1 - Pessoa
    val pessoa1 = Pessoa()
    pessoa1.nome = "André"
    pessoa1.idade = 26
    pessoa1.apresentar()

    val pessoa2 = Pessoa()
    pessoa2.nome = "João"
    pessoa2.idade = 42
    pessoa2.apresentar()

    // Exercício 2 - LivroSimplificado
    val livro1 = Livro()
    livro1.titulo = "Os Maias"
    livro1.autor = "Eça de Queirós"
    livro1.descricao()

    val livro2 = Livro()
    livro2.titulo = "Os Lusíadas"
    livro2.autor = "Luís de Camões"
    livro2.descricao()

    // Exercício 3 - Retângulo
    val retangulo1 = Retangulo()
    retangulo1.altura = 5.0
    retangulo1.largura = 10.0
    println("[Retangulo1] Área - ${retangulo1.calcularArea()} / Perímetro - ${retangulo1.calcularPerimetro()}")

    val retangulo2 = Retangulo()
    retangulo2.altura = 10.0
    retangulo2.largura = 20.0
    println("[Retangulo2] Área - ${retangulo2.calcularArea()} / Perímetro - ${retangulo2.calcularPerimetro()}")
}