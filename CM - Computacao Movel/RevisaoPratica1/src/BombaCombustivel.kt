/* Exercício Classes 2 - Sistema de Bomba de Combustível
- Simular o funcionamento de uma bomba de combustível, utilizando classes e métodos.
- Atributos:
    - tipoCombustível - Indica o tipo de combustível (ex: Gasolina, Diesel, Etanol...)
    - valorLitro - Preço do litro do combustível
    - quantidadeCombustivel - Quantidade de combustível disponível na bomba

- Métodos.
    - abastecerPorValor(valor: Double)
        - Recebe um valor em dinheiro informado pelo cliente
        - Calcula a quantidade de litros correspondente e mostra essa quantidade
        - Atualiza a quantidade de cobustível restante na bomba
    - abastecerPorLitro(litros: Double)
        - Recebe a quantidade de litros que o cliente deseja abastecer
        - Calcula o valor a ser pago pelo cliente e mostra esse valor
        - Atualiza a quantidade de combustível restante na bomba
    - alterarValor(novoValor: Double)
        - Altera o preço do litro do combustível
    - alterarCombustivel(novoTipo: String)
        - Altera o tipo de combustível da bomba
    - alterarQuantidadeCombustivel(novaQuantidade: Double)
        - Altera a quantidade de combustível disponível na bomba
 */
class BombaCombustivel {
    var tipoCombustivel: String? = "Diesel"
    var valorLitro: Double = 1.8
    var quantidadeCombustivel: Double = 20.0

    fun abastecerPorValor(valor: Double) {
        val litros = valor / this.valorLitro
        val novoValor = this.quantidadeCombustivel - litros

        if (novoValor < 0.0) {
            println("Esta bomba não tem combustivel suficiente para o abastecimento!")
        } else {
            println("Abasteceu $litros litros de ${this.tipoCombustivel}! Custo: $valor €")
            alterarQuantidadeCombustivel(novoValor)
        }
    }

    fun abastecerPorLitro(litros: Double) {
        val valor = litros * this.valorLitro

        val novoValor = this.quantidadeCombustivel - litros

        if (novoValor < 0.0) {
            println("Esta bomba não tem combustivel suficiente para o abastecimento!")
        } else {
            println("Abasteceu $litros litros de ${this.tipoCombustivel}! Custo: $valor €")
            alterarQuantidadeCombustivel(novoValor)
        }
    }

    fun alterarValor(novoValor: Double) {
        this.valorLitro = novoValor
    }

    fun alterarCombustivel(novoTipo: String) {
        this.tipoCombustivel = novoTipo
    }

    fun alterarQuantidadeCombustivel(novaQuantidade: Double) {
        this.quantidadeCombustivel = novaQuantidade
    }
}