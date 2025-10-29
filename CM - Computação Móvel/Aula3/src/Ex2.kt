/* Exercício 2 - Validar cadastro
    Criar função validarCadastro(email: String, senha: String) : Boolean
    Email:
        - Deve seguir o padrão usuario@my.istec.pt
    Senha:
        - Mínimo 8 chars
        - Pelo menos 1 letra maiúscula
        - Pelo menos 1 letra minúscula
        - Pelo menos 1 número
        - Pelo menos 1 char especial (!@#\$%^&*()-_+=)
 */
fun validarCadastro(email: String, senha: String): Boolean {
    val resEmail = validarEmail(email)
    val resSenha = validarSenha(senha)
    return (resEmail && resSenha)
}

fun validarEmail(email: String): Boolean {
    val emailRegex = "^[A-Za-z0-9+_.-]+@[A-Za-z0-9.-]+\$"
    if (email.matches(emailRegex.toRegex())) {
        println("Email: $email validado com sucesso!")
        return true
    }
    println("Email: $email não é válido!")
    return false
}

fun validarSenha(senha: String): Boolean {
    // Mínimo 8 chars
    if (senha.length < 8) {
        println("Senha não tem 8 caracteres.")
        return false
    }

    // Pelo menos 1 letra maiúscula
    val upperCase = senha.filter { it.isUpperCase() }
    if (upperCase.isEmpty()) {
        println("Senha não contêm letras maiúsculas.")
        return false
    }

    // Pelo menos 1 letra minúscula
    val lowerCase = senha.filter { it.isLowerCase() }
    if (lowerCase.isEmpty()) {
        println("Senha não contêm letras minúsculas.")
        return false
    }

    // Pelo menos 1 número
    val num = senha.filter { it.isDigit() }
    if (num.isEmpty()) {
        println("Senha não contêm números.")
        return false
    }

    // Pelo menos 1 char especial
    val specialChar = senha.filter { !it.isLetterOrDigit() }
    if (specialChar.isEmpty()) {
        println("Senha não contêm chars especiais.")
        return false
    }
    println("Senha validada com sucesso!")
    return true
}