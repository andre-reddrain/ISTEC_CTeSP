import kotlin.math.ceil
import kotlin.math.round

/* Exercício Lista 1 - Par ou ímpar
- Ler 20 nºs inteiros fornecidos pelo utilizador
- Armazenar numa lista principal
- Percorrer a lista e separar os nºs em 2 listas distintas:
    - Lista pares - Deve conter todos os nºs pares
    - Lista impares - Deve conter todos os nºs impares
- Imprimir as 3 listas.
 */
fun exLista1() {
    val listaPrincipal = mutableListOf<Int>()
    var pares: MutableList<Int>
    var impares: MutableList<Int>
    var check = false

    for (i in 1..20) {
        println("[$i] Insira um nº inteiro:")
        check = false
        do {
            try {
                val input = readLine()!!.toInt()
                listaPrincipal.add(input)
                check = true
            } catch (e: Exception) {
                println("Erro! Introduza um número!")
                check = false
            }
        } while (!check)
    }

    pares = listaPrincipal.filter { it % 2 == 0 }.toMutableList()
    impares = listaPrincipal.filter { it % 2 != 0 }.toMutableList()

    println("Lista principal: $listaPrincipal")
    println("Nºs pares: $pares")
    println("Nºs impares: $impares")
}

/* Exercício Lista 2 - Contagem de alunos com altura abaixo da média
- Ler as idades e alturas dos 30 alunos
- Calcular a altura média do grupo
- Determinar quantos alunos com mais de 13 anos têm altura inferior à altura média do grupo
- Imprimir o nº de alunos que satisfazem a condição
 */
fun exLista2() {
    val alunos = mutableListOf<Pair<Int, Double>>()

    var check = false

    for (i in 1..30) {
        do {
            println("[$i] Insira a sua idade:")

            try {
                val inputIdade = readLine()!!.toInt()
                println("[$i] Insira a sua altura:")

                try {
                    val inputAltura = readLine()!!.toDouble()
                    alunos.add(Pair(inputIdade, inputAltura))
                    check = true
                } catch (e: Exception) {
                    println("Erro! Introduza uma altura!")
                }
            } catch (e: Exception) {
                println("Erro! Introduza uma idade!")
            }
        } while (!check)
    }

    val alturaMedia = alunos.map { it.second }.average()
    val maiores13 = alunos.count { it.first > 13 && it.second < alturaMedia }

    println("Altura média dos alunos: $alturaMedia")
    println("Nº de alunos maiores de 13 anos com altura abaixo da média: $maiores13")
}

/* Exercício Exceções 1 - Acesso a Índices
- Criar função accessElement(list: List<String>, index: String)
    - Converte o index para inteiro
    - Imprime o elemento correspondente da lista
    - Try-catch para capturar:
        - NumberFormatException - "Índice inválido"
        - IndexOutOfBoundsException - "Índice fora dos limites da lista"
 */
fun accessElement(list: List<String>, index: String) {
    try {
        val i = index.toInt()       // Conversão para int
        val element = list.get(i)   // Recolha do elemento
        println(element)
    } catch (nfe: NumberFormatException) {
        println("Índice inválido")
    } catch (ie: IndexOutOfBoundsException) {
        println("Índice fora dos limites da lista")
    }
}

/* Exercício Exceções 2 - Operações matemáticas
- Criar função performOperation(a: String, b: String, op: String): Int?
    - Converte a e b para Int
    - Faz a operação +,-,*,/
    - Usar try-catch para capturar:
        - NumberFormatException - "Entrada inválida"
        - ArithmeticException - "Não é possível dividir por zero"
        - Exception - "Operação inválida"
 */
fun performOperation(a: String, b: String, op: String): Int? {
    try {
        val num1 = a.toInt()    // Conversão para int
        val num2 = b.toInt()    // Conversão para int
        var res: Int = 0

        // Verificação da operação
        if (op == "+") {
            res = num1 + num2
        } else if (op == "-") {
            res = num1 - num2
        } else if (op == "*") {
            res = num1 * num2
        } else if (op == "/") {
            res = num1 / num2
        } else throw Exception()
        println(res)
        return res
    } catch (nfe: NumberFormatException) {
        println("Entrada inválida")
    } catch (ae: ArithmeticException) {
        println("Não é possível dividir por zero")
    } catch (e: Exception) {
        println("Operação inválida")
    }
    return null
}

/* Exercício Funções 1 - somaImposto()
- Criar função somaImposto que calcule o preço final de um produto após a aplicação de um imposto sobre vendas.
- A função deve receber dois parâmetros:
    - taxaImposto - Taxa de imposto em percentagem (%)
    - custo - Preço do produto antes da aplicação do imposto.
- A função deve calcular o novo valor do produto, incluindo o imposto, e devolver ao programa.
 */
fun somaImposto(taxaImposto: Int, custo: Double): Double {
    val valorImposto = ceil(custo * (taxaImposto / 100.0))
    val res = custo + valorImposto
    return res
}

/* Exercício Funções 2 - Conversão de horário 24h para 12h
- Converter horários do formato de 24h para o formato de 12h
    1 - O programa deve atender aos seguintes requisitos:
        - A entrada será feita através de 2 inteiros fornecidos pelo utilizador
            - Hora (0 a 23)
            - Minuto (0 a 59)
    2 - Deve possuir uma função para converter a hora do formato 24h para 12h
    3 - O programa deve mostrar o horário convertido com a indicação A.M ou P.M
    4 - Incluir um loop que permita ao utilizador repetir a conversão para novos horários quantas vezes quiser
 */
fun convertHours(hora: Int, minuto: Int): String {
    if (hora < 0 || hora >= 24) return "Hora errada!"
    else if (minuto < 0 || minuto > 59) return "Minuto errado!"
    else if (hora < 12) return "$hora:$minuto A.M"
    else if (hora == 12) return "$hora:$minuto P.M"
    else return "${hora - 12}:$minuto P.M"
}

fun main() {
    // Exercícios Listas
    // Exercício 1
    exLista1()

    // Exercício 2
    exLista2()

    // Exercícios Exceções
    // Exercício 1
    val frutas = listOf("Maçã", "Banana", "Pera")
    accessElement(frutas, "1")          // Correto
    accessElement(frutas, "a")          // NumberFormatException
    accessElement(frutas, "99")         // IndexOutOfBoundsException

    // Exercício 2
    performOperation("2", "3", "+")     // Correto
    performOperation("a", "b", "c")     // NumberFormatException
    performOperation("2", "0", "/")     // ArithmeticException
    performOperation("2", "3", "a")     // Exception

    // Exercícios Funções
    // Exercício 1
    println(somaImposto(13, 15.53))

    // Exercício 2
    var repeat = true
    do {
        println("Insira uma hora (0 a 23)")
        val hora = readLine()!!.toInt()

        println("Insira um minuto (0 a 59)")
        val minuto = readLine()!!.toInt()

        println(convertHours(hora, minuto))

        println("Pretende continuar? (s/n)")
        val input = readLine()!!

        if (input == "s") repeat = false
    } while (repeat)
}