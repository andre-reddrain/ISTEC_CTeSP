/* Exercício 3 - Retângulo
Criar uma classe Retangulo com largura e altura
Adicionar 2 funções:
    - calcularArea()
    - calcularPerimetro()
No main(), criar 2 retangulos e chamar as funções calcularArea() e calcularPerimetro()
 */
class Retangulo {
    var largura: Double = 0.0
    var altura: Double = 0.0

    fun calcularArea(): Double {
        val area = this.largura * this.altura
        return area
    }

    fun calcularPerimetro(): Double {
        val perimetro = 2 * (this.largura + this.altura)
        return perimetro
    }
}