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

        var index = 1

        while (index <= num) {
            soma += index
            index++
        }

        res.innerHTML = "Soma de 1 até " + num + ": " + soma
    }
}