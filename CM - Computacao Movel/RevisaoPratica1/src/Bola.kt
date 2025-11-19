/* Exercício Classes 1 - Classe Bola
Atributos:
    - Cor
    - Circunferencia
    - Material
- Métodos:
    - trocaCor(novaCor: String) - Muda a cor da bola.
    - mostraCor() - Mostra a cor atual da bola
    - mostrarDetalhes() - Imprime todas as informações da bola (cor, circunferencia e material)
 */
class Bola {
    var Cor: String = ""
    var Circunferencia = 5.3
    var Material = "Madeira"

    fun trocaCor(novaCor: String) {
        this.Cor = novaCor
    }

    fun mostraCor() {
        println(this.Cor)
    }

    fun mostrarDetalhes() {
        println(this.Cor)
        println(this.Circunferencia)
        println(this.Material)
    }
}