fun main() {
    // Exercício 1 - Verificar se tem direito a portes grátis
    println("Exercício 1 - Portes grátis")

    // Valor compra
    println("Insira o valor da compra:")
    var valorCompra = readLine()!!.toDouble()

    // Cliente Premium
    println("É cliente premium? (s/n):")
    var clientePremiumInput = readLine()!!
    var clientePremium : Boolean
    if (clientePremiumInput == "s") clientePremium = true
    else clientePremium = false

    if(temDireitoAPortesGratis(valorCompra, clientePremium)) {
        println("Tem direito a portes grátis.")
    } else {
        println("Não tem direito a portes grátis.")
    }

    // Exercício 2 - Validar cadastro
    println("Exercício 2 - Validar cadastro")

    // Email
    println("Insira um email:")
    var email = readLine()!!

    // Senha
    println("Insira a senha:")
    var senha = readLine()!!.trim()

    if (validarCadastro(email, senha)) {
        println("Cadastro validado.")
    } else {
        println("Cadastro não validado.")
    }

    // Exercício 3 - Cinema: Verificar direito a desconto
    println("Exercício 3 - Cinema")

    // Idade
    println("Insira a sua idade:")
    var idade = readLine()!!.toInt()

    // Estudante
    println("É estudante? (s/n):")
    var estudanteInput = readLine()!!
    var estudante : Boolean
    if (estudanteInput == "s") estudante = true
    else estudante = false

    // Dia Semana
    println("Qual o dia da semana? (Ex: Segunda-feira):")
    var diaSemana = readLine()!!

    if (temDescontoCinema(idade, estudante, diaSemana)) {
        println("Tem desconto de cinema.")
    } else {
        println("Não tem desconto de cinema.")
    }
}
