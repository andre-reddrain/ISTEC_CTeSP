fun main() {
    println("Exercício 1")
    ex1()

    println("Exercício 2")
    ex2()

    println("Exercício 3")
    ex3()

    println("Exercício 4")
    ex4()
}

/* Exercício 1 - ???

 */
fun ex1() {
    //TODO Exercício 1
}

/* Exercício 2 - Determinar qual dos dois alunos obteve a maior nota final

 */
fun ex2() {
    //TODO Exercício 2
}

/* Exercício 3 - Dizer se a maior nota é par ou ímpar

 */
fun ex3() {
    //TODO Modificar para user input
    val notaTesteTeorico = 15
    val notaTestePratico = 14

    val notaFinal = (notaTesteTeorico * 0.3 + (notaTestePratico * 0.7)).toInt()

    if (notaFinal <= 9) println("$notaFinal - Reprovado") else println("$notaFinal - Aprovado")
    if (notaFinal % 2 == 0) println("$notaFinal - Par") else println("$notaFinal - Ímpar")
}

/* Exercício 4 - Calculadora Simples:
    - Escrever um programa que receba 2 valores numéricos e uma operação a realizar.
    - Operação pode ser:
        - (+) Soma dos valores
        - (-) Diferença dos valores
        - (*) Multiplicação dos valores
        - (/) Divisão dos valores
 */
fun ex4() {
    //TODO Exercício 4
}