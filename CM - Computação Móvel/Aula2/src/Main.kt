//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
fun main() {
    println("Exercício 1 - Aprovado ou Reprovado")
    ex1()

    println("Exercício 2 - Analisar Pares e Ímpares")
    ex2()

    println("Exercício 3 - Eleições Autárquicas")
    ex3()
}

/* Exercício 1 - Aprovado ou Reprovado
    1 - Perguntar quantos alunos queremos registar
    2 - Para cada aluno, pedir:
        - Nome
        - Nota do Teste Teórico (30%)
        - Nota do Teste Prático (70%)
    3 - No final, mostrar um resumo com a média de todos os alunos e indicar se está aprovado ou reprovado
 */
fun ex1() {
    // TODO Exercício 1
}

/* Exercício 2 - Analisar Pares e Ímpares
    1 - Pedir ao utilizador que introduza números de 1 a 1.
    2 - Continuar a pedir enquanto o valor for diferente de 100.
    3 - Guardar todos os números introduzidos (excepto o 100)
    4 - No fim:
        - Mostrar todos os nºs pares e indicar o maior.
        - Mostrar todos os nºs ímpares e indicar o menor.
 */
fun ex2() {
    var check: Boolean = true
    val pares = mutableListOf<Int>()
    val impares = mutableListOf<Int>()

    do {
        println("Insira um número (concluir com 100):");

        try {
            var input: String? = readLine()
            var number = input!!.toInt();

            if (number == 100) check = false;
            else if (number.rem(2) == 0) pares.add(number)
            else impares.add(number)
        } catch (e: Exception) {
            println("Erro! Introduza um número!")
        }
    } while(check)

    print("Nºs pares: $pares / Maior: ${pares.max()}")
    print("Nºs ímpares: $impares / Menor: ${impares.min()}")
}

/* Exercício 3 - Eleições Autárquicas
    1 - Apresentaros partidos candidatos aos eleitores:
        - A: Partido Socialista (PS)
        - B: Partido Social Democrata (PSD)
        - C: Bloco de Esquerda (BE)
        - D: CDU
    2 - Permitir a introdução de votos pelo utilizador:
        - Cada voto é representado pela letra do partido (A, B, C ou D)
        - A votação termina quando o utilizador escreve "fim"
        - Apenas os votos válidos devem ser contabilizados; votos inválidos devem gerar uma mensagem de aviso
    3 - No final da votação, apresentar:
        - O número de votos e a percentagem de votos de cada partido.
        - O(s) partido(s) vencedor(es) da simulação.
        - O total de votos registados
 */
fun ex3() {
    // TODO Exercício 3
}