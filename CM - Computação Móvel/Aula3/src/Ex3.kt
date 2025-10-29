/* Exercício 3 - Cinema: Verificar direito a desconto
    Criar a função fun temDescontoCinema(idade: Int, estudante: Boolean, diaSemana: String) : Boolean

    Regras:
        - Se for estudante - Tem desconto sempre
        - Se tiver menos de 12 anos - Tem desconto sempre
        - Se for terça ou quarta-feira - Todos têm desconto
        - Caso contrário - Não tem desconto
 */
fun temDescontoCinema(idade: Int, estudante: Boolean, diaSemana: String): Boolean {
    // Se for estudante - Tem desconto
    if (estudante) return true

    // Se menor de 12 anos - Tem desconto
    if (idade < 12) return true

    // Se Terça-feira ou Quarta-feira, tem desconto
    if (diaSemana == "Terça-feira" || diaSemana == "Quarta-feira") return true

    // Não tem desconto
    return false
}