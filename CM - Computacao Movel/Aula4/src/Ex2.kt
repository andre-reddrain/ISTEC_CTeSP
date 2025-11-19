/* Exercício 2 - Conversão segura
    O ficheiro numeros.txt contém um número por linha.
    O programa deve:
        - Tentar converter cada linha para Int
        - Usar try/catch para ignorar linhas inválidas, mas mostrar uma mensagem de aviso
        - No fim, imprimir a soma total dos números válidos
*/
fun conversaoSegura() {
    var caminho = ".\\numeros.txt"
    var conteudo = ReadFile(caminho)
    var soma: Int = 0

    if (conteudo != null) {
        for (linha in conteudo) {
            try {
                var value = linha.toInt()
                // println(value)
                soma += value
            } catch (e : NumberFormatException) {
                println("$linha - não tem o formato correto!")
            }
        }
        println("Soma do conteudo: $soma")
    }
}