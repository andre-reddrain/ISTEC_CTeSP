var userInput = document.getElementById("userInput")
var res = document.getElementById("res")
var errorMsg = document.getElementById("errorMsg")

function somaN() {
    var num = parseInt(userInput.value)
    var soma = 0

    res.innerHTML = ""

    // Verificação Input
    if (isNaN(num) || num <= 0) {
        errorMsg.innerHTML = "Por favor insira um número inteiro positivo"
    } else {
        errorMsg.innerHTML = ""

        // 1 até N
        for (let i = 1; i <= num; i++) {
            soma += i
        }

        res.innerHTML = "Soma de 1 até " + num + ": " + soma
    }
}