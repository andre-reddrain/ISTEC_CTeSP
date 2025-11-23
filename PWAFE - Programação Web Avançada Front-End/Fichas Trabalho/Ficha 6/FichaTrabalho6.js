var userInput = document.getElementById("userInput")
var btn = document.getElementById("btn")
var msgError = document.getElementById("msgError")
var msg = document.getElementById("msg")
var res = document.getElementById("res")
var inputs = []
var count = null

function insertNumbers() {
    // Verificação do input
    if (!isNaN(userInput.value) && userInput.value != '') {
        msgError.innerHTML = ""

        // Se for o 1º input, vai começar a pedir os nºs
        if (count == null) {
            count = userInput.value

            // Atualização do DOM
            let h2 = document.createElement("h2")
            h2.textContent = count
            res.appendChild(h2)
            msg.innerHTML = "Insira um nº"
            
            userInput.value = ""
        } else {
            inputs.push(parseInt(userInput.value))

            // Atualização do DOM
            res.appendChild(document.createTextNode("[" + count + "] - " + userInput.value))
            res.appendChild(document.createElement("br"))
            userInput.value = ""

            count--
            
            // Se já inseriu todos os nºs, vai fazer a média
            if (count == 0) {
                // Vai fazer a média
                var media = inputs.reduce((a, b) => a + b) / inputs.length

                // Atualização do DOM
                res.appendChild(document.createTextNode("Média: " + media))
                btn.disabled = true
            }
        }
    } else {
        msgError.innerHTML = "Por favor insira um número"
    }
}