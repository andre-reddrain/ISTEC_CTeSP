var userInput = document.getElementById("userInput")
var res = document.getElementById("res")

function verificarPar() {
    var num = parseInt(userInput.value)
    if (isNaN(num)) {
        res.innerHTML = "Por favor insira um número inteiro"
    } else if (num % 2 == 0) {
        res.innerHTML = num + " é par."
    } else {
        res.innerHTML = num + " é impar."
    }
}