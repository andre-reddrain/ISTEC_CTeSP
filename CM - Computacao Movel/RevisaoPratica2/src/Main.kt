//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
fun main() {

    var euros: Double = 100.0
    var taxa: Int = 15
    var dolares = converterEuroParaDolar(euros, taxa)
    println("${euros}€ com ${taxa}% = ${dolares}$")

    var aluno = Aluno()
    aluno.mostrarInfo()
    println("Aprovado? ${aluno.isAprovado()}")
}

/*
    Exercício 2. Cria uma função chamada converterEuroParaDolar que:
        • recebe um valor em euros
        • recebe a taxa de câmbio
        • devolve o valor convertido

    Atenção: Se falhar, deve apanhar a exceção e mostrar a mensagem: "Erro: valor inválido."
 */
fun converterEuroParaDolar(valor: Double, taxa: Int): Double {
    try {
        val dolares = valor + (valor * (taxa / 100.0))
        return dolares
    } catch (e: Exception) {
        println("Erro: valor inválido")
    }

    return 0.0
}